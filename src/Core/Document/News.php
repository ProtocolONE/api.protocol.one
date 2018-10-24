<?php namespace Core\Document;

use Application\Sonata\MediaBundle\Document\Media;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class News extends BaseDocument
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
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $title;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $announcement;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $appImage;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    protected $isSticky;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $createDate;

    public function __construct()
    {
        $this->createDate = new \DateTime();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return News
     */
    public function setId(string $id): News
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Game
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * @param Game $game
     * @return News
     */
    public function setGame(Game $game): News
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return (string)$this->title;
    }

    /**
     * @param string $title
     * @return News
     */
    public function setTitle(string $title): News
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnnouncement(): string
    {
        return (string)$this->announcement;
    }

    /**
     * @param string $announcement
     * @return News
     */
    public function setAnnouncement(string $announcement): News
    {
        $this->announcement = $announcement;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppImage()
    {
        return $this->appImage;
    }

    /**
     * @param Media|string $appImage
     * @return News
     */
    public function setAppImage($appImage): News
    {
        $this->appImage = $appImage;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSticky(): bool
    {
        return (bool)$this->isSticky;
    }

    /**
     * @param bool $isSticky
     * @return News
     */
    public function setIsSticky(bool $isSticky): News
    {
        $this->isSticky = $isSticky;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate(): ?\DateTime
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime $createDate
     * @return News
     */
    public function setCreateDate(\DateTime $createDate): News
    {
        $this->createDate = $createDate;
        return $this;
    }
}
