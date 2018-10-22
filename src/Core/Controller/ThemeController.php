<?php

namespace Core\Controller;

use Core\Manager\ThemeManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ThemeController
 *
 * @category GSG
 * @package Core\Controller
 * @copyright Copyright (с) 2018, ProtocolOne and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@protocol.one>
 * @version 1.0
 *
 * @Route("/api/v1/theme")
 */
class ThemeController extends Controller
{
    /**
     * @Route("/list/", name="theme.list", methods={"GET"})
     *
     * @return Response
     */
    public function listAction(): Response
    {
        /** @var ThemeManager $manager */
        $manager = $this->container->get('manager.theme');

        return new JsonResponse($manager->getAll());
    }
}