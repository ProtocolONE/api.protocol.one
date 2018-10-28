<?php namespace Core\Document;

use Application\Sonata\MediaBundle\Document\Media;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Announcement extends BaseDocument
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
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $startTime;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $endTime;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $image;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $url;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $text;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $textOnButton;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $size;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $buttonColor;

    public function __construct()
    {
        $this->startTime = new \DateTime();
        $this->endTime = new \DateTime();
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
     * @return Announcement
     */
    public function setId(string $id): Announcement
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
     * @return Announcement
     */
    public function setGame(Game $game): Announcement
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): ?\DateTime
    {
        return $this->startTime;
    }

    /**
     * @param \DateTime $startTime
     * @return Announcement
     */
    public function setStartTime(\DateTime $startTime): Announcement
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime(): ?\DateTime
    {
        return $this->endTime;
    }

    /**
     * @param \DateTime $endTime
     * @return Announcement
     */
    public function setEndTime(\DateTime $endTime): Announcement
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Announcement
     */
    public function setImage($image): Announcement
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return (string)$this->url;
    }

    /**
     * @param string|null $url
     * @return Announcement
     */
    public function setUrl($url): Announcement
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return (string)$this->text;
    }

    /**
     * @param string|null $text
     * @return Announcement
     */
    public function setText($text): Announcement
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextOnButton(): string
    {
        return (string)$this->textOnButton;
    }

    /**
     * @param string|null $textOnButton
     * @return Announcement
     */
    public function setTextOnButton($textOnButton): Announcement
    {
        $this->textOnButton = $textOnButton;
        return $this;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return (string)$this->size;
    }

    /**
     * @param string|null $size
     * @return Announcement
     */
    public function setSize($size): Announcement
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getButtonColor(): string
    {
        return (string)$this->buttonColor;
    }

    /**
     * @param string|null $buttonColor
     * @return Announcement
     */
    public function setButtonColor($buttonColor): Announcement
    {
        $this->buttonColor = $buttonColor;
        return $this;
    }
}
