<?php namespace Core\Manager;

use Core\Document\Theme;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Core\Helper\ImageReplacer;

class ThemeManager
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

    public function getAll(): array
    {
        $theme = $this->mongoManager->getRepository(Theme::class);

        return $this->imageReplacer->prepareList($theme->findAll());
    }
}