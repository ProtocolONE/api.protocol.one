<?php namespace Core\Document;

use Application\Sonata\MediaBundle\Document\Media;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Gallery extends BaseDocument
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
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $image;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $mp4;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $preview;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $youtubeUrl;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Gallery
     */
    public function setId(string $id): Gallery
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
     * @return Gallery
     */
    public function setGame(Game $game): Gallery
    {
        $this->game = $game;
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
     * @return Gallery
     */
    public function setImage($image): Gallery
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getMp4(): string
    {
        return (string)$this->mp4;
    }

    /**
     * @param string|null $mp4
     * @return Gallery
     */
    public function setMp4($mp4): Gallery
    {
        $this->mp4 = $mp4;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * @param mixed $preview
     * @return Gallery
     */
    public function setPreview($preview): Gallery
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @return string
     */
    public function getYoutubeUrl(): string
    {
        return (string)$this->youtubeUrl;
    }

    /**
     * @param mixed $youtubeUrl
     * @return Gallery
     */
    public function setYoutubeUrl($youtubeUrl): Gallery
    {
        $this->youtubeUrl = $youtubeUrl;
        return $this;
    }
}
