<?php namespace Core\Document;

use Application\Sonata\MediaBundle\Document\Media;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Banner extends BaseDocument
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
    protected $description;

    /**
     * @var Media
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $imageApp;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $link;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Banner
     */
    public function setId(string $id): Banner
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
     * @return Banner
     */
    public function setGame(Game $game): Banner
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string|null $description
     * @return Banner
     */
    public function setDescription($description): Banner
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageApp()
    {
        return $this->imageApp;
    }

    /**
     * @param mixed $imageApp
     * @return Banner
     */
    public function setImageApp($imageApp): Banner
    {
        $this->imageApp = $imageApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return (string)$this->link;
    }

    /**
     * @param mixed $link
     * @return Banner
     */
    public function setLink($link): Banner
    {
        $this->link = $link;
        return $this;
    }
}
