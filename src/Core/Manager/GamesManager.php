<?php namespace Core\Manager;

use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
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
}