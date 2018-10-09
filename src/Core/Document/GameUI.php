<?php namespace Core\Document;

use Application\Sonata\MediaBundle\Document\Media;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class GameUI extends BaseDocument
{
    /**
     * @var string
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @var Game
     * @MongoDB\ReferenceOne(targetDocument="Game")
     */
    protected $game;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    protected $secondAllowed;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    protected $hasOverlay;

    /**
     * @var integer
     * @MongoDB\Field(type="int")
     */
    protected $sortPriority;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $imageSmall;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $imageHorizontalSmall;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $imageLogoSmall;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $imagePopupArt;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $backgroundInApp;

    /**
     * @var Game|null
     * @MongoDB\ReferenceOne(targetDocument="Game", cascade={"all"})
     */
    protected $maintenanceProposal1;

    /**
     * @var Game|null
     * @MongoDB\ReferenceOne(targetDocument="Game", cascade={"all"})
     */
    protected $maintenanceProposal2;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $widgetList;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $logoText;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $miniToolTip;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $aboutGame;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $shortDescription;

    public function __construct()
    {
        $this->sortPriority = 0;
        $this->secondAllowed = false;
        $this->hasOverlay = false;
    }

    /**
     * Get id
     *
     * @return string $id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Game|null
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * @param Game $game
     * @return GameUI
     */
    public function setGame($game): GameUI
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSecondAllowed(): bool
    {
        return (bool)$this->secondAllowed;
    }

    /**
     * @param bool $secondAllowed
     * @return GameUI
     */
    public function setSecondAllowed($secondAllowed): GameUI
    {
        $this->secondAllowed = $secondAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasOverlay(): bool
    {
        return (bool)$this->hasOverlay;
    }

    /**
     * @param bool $hasOverlay
     * @return GameUI
     */
    public function setHasOverlay($hasOverlay): GameUI
    {
        $this->hasOverlay = $hasOverlay;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortPriority(): int
    {
        return (int)$this->sortPriority;
    }

    /**
     * @param int $sortPriority
     * @return GameUI
     */
    public function setSortPriority($sortPriority): GameUI
    {
        $this->sortPriority = $sortPriority;
        return $this;
    }

    /**
     * @return Media|null
     */
    public function getImageSmall(): ?Media
    {
        return $this->imageSmall;
    }

    /**
     * @param Media $imageSmall
     * @return GameUI
     */
    public function setImageSmall($imageSmall): GameUI
    {
        $this->imageSmall = $imageSmall;
        return $this;
    }

    /**
     * @return Media|null
     */
    public function getImageHorizontalSmall(): ?Media
    {
        return $this->imageHorizontalSmall;
    }

    /**
     * @param Media $imageHorizontalSmall
     * @return GameUI
     */
    public function setImageHorizontalSmall($imageHorizontalSmall): GameUI
    {
        $this->imageHorizontalSmall = $imageHorizontalSmall;
        return $this;
    }

    /**
     * @return Media|null
     */
    public function getImageLogoSmall(): ?Media
    {
        return $this->imageLogoSmall;
    }

    /**
     * @param Media $imageLogoSmall
     * @return GameUI
     */
    public function setImageLogoSmall($imageLogoSmall): GameUI
    {
        $this->imageLogoSmall = $imageLogoSmall;
        return $this;
    }

    /**
     * @return Media|null
     */
    public function getImagePopupArt(): ?Media
    {
        return $this->imagePopupArt;
    }

    /**
     * @param Media $imagePopupArt
     * @return GameUI
     */
    public function setImagePopupArt($imagePopupArt): GameUI
    {
        $this->imagePopupArt = $imagePopupArt;
        return $this;
    }

    /**
     * @return Media|null
     */
    public function getBackgroundInApp(): ?Media
    {
        return $this->backgroundInApp;
    }

    /**
     * @param Media $backgroundInApp
     * @return GameUI
     */
    public function setBackgroundInApp($backgroundInApp): GameUI
    {
        $this->backgroundInApp = $backgroundInApp;
        return $this;
    }

    /**
     * @return Game|null
     */
    public function getMaintenanceProposal1(): ?Game
    {
        return $this->maintenanceProposal1;
    }

    /**
     * @param Game|null $maintenanceProposal1
     * @return GameUI
     */
    public function setMaintenanceProposal1($maintenanceProposal1): GameUI
    {
        $this->maintenanceProposal1 = $maintenanceProposal1;
        return $this;
    }

    /**
     * @return Game|null
     */
    public function getMaintenanceProposal2(): ?Game
    {
        return $this->maintenanceProposal2;
    }

    /**
     * @param Game|null $maintenanceProposal2
     * @return GameUI
     */
    public function setMaintenanceProposal2($maintenanceProposal2): GameUI
    {
        $this->maintenanceProposal2 = $maintenanceProposal2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWidgetList(): ?string
    {
        return $this->widgetList;
    }

    /**
     * @param string $widgetList
     * @return GameUI
     */
    public function setWidgetList($widgetList): GameUI
    {
        $this->widgetList = $widgetList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLogoText(): ?string
    {
        return $this->logoText;
    }

    /**
     * @param string $logoText
     * @return GameUI
     */
    public function setLogoText($logoText): GameUI
    {
        $this->logoText = $logoText;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiniToolTip(): ?string
    {
        return $this->miniToolTip;
    }

    /**
     * @param string $miniToolTip
     * @return GameUI
     */
    public function setMiniToolTip($miniToolTip): GameUI
    {
        $this->miniToolTip = $miniToolTip;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAboutGame(): ?string
    {
        return $this->aboutGame;
    }

    /**
     * @param string $aboutGame
     * @return GameUI
     */
    public function setAboutGame($aboutGame): GameUI
    {
        $this->aboutGame = $aboutGame;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return GameUI
     */
    public function setShortDescription($shortDescription): GameUI
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Get secondAllowed
     *
     * @return boolean $secondAllowed
     */
    public function getSecondAllowed(): bool
    {
        return (bool)$this->secondAllowed;
    }

    /**
     * Get hasOverlay
     *
     * @return boolean $hasOverlay
     */
    public function getHasOverlay(): bool
    {
        return (bool)$this->hasOverlay;
    }
}
