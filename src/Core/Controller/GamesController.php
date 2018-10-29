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
     * @Route("/gallery/", name="games.gallery", methods={"GET"})
     *
     * @return Response
     */
    public function galleryAction(): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');
        $gameId = $this->container->get('gameId');

        return new JsonResponse($manager->getGallery($gameId));
    }

    /**
     * @Route("/banners/", name="games.banners", methods={"GET"})
     *
     * @return Response
     */
    public function bannersAction(): Response
    {
        /** @var GamesManager $manager */
        $manager = $this->container->get('manager.games');
        $gameId = $this->container->get('gameId');

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