<?php

namespace Core\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MiscController
 *
 * @category GSG
 * @package Core\Controller
 * @copyright Copyright (с) 2018, ProtocolOne and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@protocol.one>
 * @version 1.0
 *
 * @Route("/api/v1/misc")
 */
class MiscController extends Controller
{
    /**
     * @Route("/time/", name="misc.time", methods={"GET"})
     *
     * @return Response
     */
    public function timeAction(): Response
    {
        $time = new \DateTime();

        return new JsonResponse([
            'timestamp' => $time->getTimestamp(),
            'atom' => $time->format(\DateTime::ATOM),
        ]);
    }

    /**
     * @Route("/ip/", name="misc.ip", methods={"GET"})
     *
     * @param Request $request
     * @return Response
     */
    public function ipAction(Request $request): Response
    {
        return new JsonResponse([
            'ip' => $request->getClientIp(),
        ]);
    }
}