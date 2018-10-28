<?php

namespace Core\Controller;

use Core\Manager\GamesManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GamesController
 *
 * @category GSG
 * @package Core\Controller
 * @copyright Copyright (с) 2018, ProtocolOne and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@protocol.one>
 * @version 1.0
 *
 * @Route("/api/v1/games")
 */
class GamesController extends Controller
{
    /**
     * @Route("/maintenance/", name="games.maintenance", methods={"GET"})
     *
     * @return Response
     */
    public function maintenanceAction(): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');

        return new JsonResponse($manager->getMaintenance());
    }

    /**
     * @Route("/news/", name="games.news", methods={"GET"})
     *
     * @return Response
     */
    public function newsAction(): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');

        return new JsonResponse($manager->getNews());
    }

    /**
     * @Route("/gallery/{gameId}/", name="games.gallery", requirements={"gameId"="[A-z0-9]{24}"}, methods={"GET"})
     *
     * @param string $gameId
     * @return Response
     */
    public function galleryAction(string $gameId): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');

        return new JsonResponse($manager->getGallery($gameId));
    }

    /**
     * @Route("/banners/{gameId}/", name="games.banners", requirements={"gameId"="[A-z0-9]{24}"}, methods={"GET"})
     *
     * @param string $gameId
     * @return Response
     */
    public function bannersAction(string $gameId): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');

        return new JsonResponse($manager->getBanners($gameId));
    }

    /**
     * @Route("/announcement/", name="games.announcement", methods={"GET"})
     *
     * @return Response
     */
    public function announcementAction(): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');

        return new JsonResponse($manager->getAnnouncement());
    }
}