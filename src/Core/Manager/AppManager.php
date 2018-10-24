<?php namespace Core\Manager;

use Core\Document\BaseDocument;
use Core\Document\GameHost;
use Core\Document\GameUI;
use Core\Document\Grid;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Core\Helper\ImageReplacer;

class AppManager
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

    public function getUI(string $gameId = null): array
    {
        $ui = $this->mongoManager->getRepository(GameUI::class);
        $list = empty($gameId) ? $ui->findAll() : $ui->findBy(['game.id' => $gameId]);
        $list = $this->imageReplacer->prepareList($list);

        return $list;
    }

    public function getHosts(string $gameId = null): array
    {
        $ui = $this->mongoManager->getRepository(GameHost::class);
        $list = empty($gameId) ? $ui->findAll() : $ui->findBy(['game.id' => $gameId]);
        $list = $this->imageReplacer->prepareList($list);

        return $list;
    }

    public function getGrid(): BaseDocument
    {
        $ui = $this->mongoManager->getRepository(Grid::class);
        $list = $ui->findBy(['isActive' => true], ['createdAt' => 'desc'], 1);

        return $this->imageReplacer->prepareObject($list[0]);
    }
}