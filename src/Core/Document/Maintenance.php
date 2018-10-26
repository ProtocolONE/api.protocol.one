<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Maintenance extends BaseDocument
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
    protected $newsTitle;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $newsText;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $newsLink;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    protected $isSticky;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $startDate;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $endDate;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Maintenance
     */
    public function setId(string $id): Maintenance
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
     * @return Maintenance
     */
    public function setGame(Game $game): Maintenance
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
     * @return Maintenance
     */
    public function setTitle(string $title): Maintenance
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewsTitle(): string
    {
        return (string)$this->newsTitle;
    }

    /**
     * @param string $newsTitle
     * @return Maintenance
     */
    public function setNewsTitle($newsTitle): Maintenance
    {
        $this->newsTitle = $newsTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewsText(): string
    {
        return (string)$this->newsText;
    }

    /**
     * @param string $newsText
     * @return Maintenance
     */
    public function setNewsText($newsText): Maintenance
    {
        $this->newsText = $newsText;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewsLink(): string
    {
        return (string)$this->newsLink;
    }

    /**
     * @param string $newsLink
     * @return Maintenance
     */
    public function setNewsLink($newsLink): Maintenance
    {
        $this->newsLink = $newsLink;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSticky(): bool
    {
        return (bool)$this->isSticky;
    }

    /**
     * @param bool $isSticky
     * @return Maintenance
     */
    public function setIsSticky(bool $isSticky): Maintenance
    {
        $this->isSticky = $isSticky;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Maintenance
     */
    public function setStartDate(\DateTime $startDate): Maintenance
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Maintenance
     */
    public function setEndDate(\DateTime $endDate): Maintenance
    {
        $this->endDate = $endDate;
        return $this;
    }
}
