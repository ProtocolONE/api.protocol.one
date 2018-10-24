<?php

namespace Core\Controller;

use Core\Manager\AppManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AppController
 *
 * @category GSG
 * @package Core\Controller
 * @copyright Copyright (с) 2018, ProtocolOne and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@protocol.one>
 * @version 1.0
 *
 * @Route("/api/v1/app")
 */
class AppController extends Controller
{
    /**
     * @Route("/ui/", name="app.ui", methods={"GET"})
     *
     * @param Request $request
     * @return Response
     */
    public function uiAction(Request $request): Response
    {
        /** @var AppManager $manager */
        $manager = $this->container->get('manager.app');
        $gameId = $request->query->get('gameId');

        return new JsonResponse($manager->getUI($gameId));
    }

    /**
     * @Route("/hosts/", name="app.hosts", methods={"GET"})
     *
     * @param Request $request
     * @return Response
     */
    public function hostsAction(Request $request): Response
    {
        /** @var AppManager $manager */
        $manager = $this->container->get('manager.app');
        $gameId = $request->query->get('gameId');

        return new JsonResponse($manager->getHosts($gameId));
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/grid/", name="app.grid", methods={"GET"})
     *
     * @return Response
     */
    public function gridAction(): Response
    {
        /** @var AppManager $manager */
        $manager = $this->container->get('manager.app');

        return new JsonResponse($manager->getGrid());
    }
}