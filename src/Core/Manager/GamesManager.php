<?php namespace Core\Manager;

use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\ODM\MongoDB\Query\Builder;
use Doctrine\ODM\MongoDB\Cursor;
use Core\Document\Announcement;
use Core\Document\Banner;
use Core\Document\Gallery;
use Core\Helper\ImageReplacer;
use Core\Document\Maintenance;
use Core\Document\News;

class GamesManager
{
    /**
     * @var ManagerRegistry
     */
    private $mongoManager;
    /**
     * @var ImageReplacer
     */
    private $imageReplacer;

    public function __construct(ManagerRegistry $mongoManager, ImageReplacer $imageReplacer)
    {
        $this->mongoManager = $mongoManager;
        $this->imageReplacer = $imageReplacer;
    }

    public function getMaintenance(): array
    {
        $maintenance = $this->mongoManager->getRepository(Maintenance::class);

        return $this->imageReplacer->prepareList($maintenance->findAll());
    }

    public function getNews(): array
    {
        $news = $this->mongoManager->getRepository(News::class);

        return $this->imageReplacer->prepareList($news->findAll());
    }

    public function getGallery(string $gameId): array
    {
        if (false === $this->validateGameId($gameId)) {
            return [];
        }

        $news = $this->mongoManager->getRepository(Gallery::class);

        return $this->imageReplacer->prepareList($news->findBy(['game.id' => $gameId]));
    }

    public function getBanners(string $gameId): array
    {
        if (false === $this->validateGameId($gameId)) {
            return [];
        }

        $news = $this->mongoManager->getRepository(Banner::class);

        return $this->imageReplacer->prepareList($news->findBy(['game.id' => $gameId]));
    }

    public function getAnnouncement(): array
    {
        /**
         * @var Builder $qb
         * @var Cursor $cursor
         */
        $qb = $this->mongoManager
            ->getManager()
            ->createQueryBuilder(Announcement::class)
            ->field('endTime')
            ->gte(new \DateTime());
        $cursor = $qb->getQuery()->execute();

        return $this->imageReplacer->prepareList($cursor->toArray());
    }

    private function validateGameId($gameId)
    {
        return (boolean) preg_match('/([A-z0-9]{24})/i', $gameId);
    }
}