<?php namespace Core\Manager;

use Core\Document\BaseDocument;
use Core\Document\Maintenance;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Core\Helper\ImageReplacer;

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

        return $maintenance->findAll();
    }
}