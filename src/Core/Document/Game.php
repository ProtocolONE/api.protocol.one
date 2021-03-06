<?php namespace Core\Document;

use Application\Sonata\MediaBundle\Document\Media;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Game extends BaseDocument
{
    /**
     * @var string
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $alias;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $developer;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $publisher;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $releaseDate;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $obtStartDate;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $officialSite;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $forumUrl;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $wikiUrl;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $supportUrl;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $description;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $textForCatalog;

    /**
     * @MongoDB\ReferenceMany(targetDocument="SocialGroup")
     */
    protected $socialGroups;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $clientDownloadUrl;

    /**
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $icon48x48;

    /**
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $avatar100x100;

    /**
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $avatar300x200;

    /**
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $avatar180x200;

    /**
     * @MongoDB\ReferenceOne(targetDocument="\Application\Sonata\MediaBundle\Document\Media", cascade={"all"})
     */
    protected $iconInApp;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Genre")
     */
    public $genre;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Shortcut")
     */
    public $shortcut;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    public $isPublishedInApp;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    public $isRunnable;

    public function __construct()
    {
        $this->isPublishedInApp = false;
        $this->isRunnable = false;
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
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name): Game
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string|null $name
     */
    public function getName(): ?string
    {
        return $this->name;
    }


    /**
     * Get shortcut
     *
     * @return Shortcut|null $shortcut
     */
    public function getShortcut(): ?Shortcut
    {
        return $this->shortcut;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return $this
     */
    public function setAlias($alias): Game
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Get alias
     *
     * @return string|null $alias
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * Set developer
     *
     * @param string $developer
     * @return $this
     */
    public function setDeveloper($developer): Game
    {
        $this->developer = $developer;
        return $this;
    }

    /**
     * Get developer
     *
     * @return string|null $developer
     */
    public function getDeveloper(): ?string
    {
        return $this->developer;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return $this
     */
    public function setPublisher($publisher): Game
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Get publisher
     *
     * @return string|null $publisher
     */
    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     * @return $this
     */
    public function setReleaseDate($releaseDate): Game
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime|null $releaseDate
     */
    public function getReleaseDate(): ?\DateTime
    {
        return $this->releaseDate;
    }

    /**
     * Set obtStartDate
     *
     * @param \DateTime $obtStartDate
     * @return $this
     */
    public function setObtStartDate($obtStartDate): Game
    {
        $this->obtStartDate = $obtStartDate;
        return $this;
    }

    /**
     * Get obtStartDate
     *
     * @return \DateTime|null $obtStartDate
     */
    public function getObtStartDate(): ?\DateTime
    {
        return $this->obtStartDate;
    }

    /**
     * Set officialSite
     *
     * @param string $officialSite
     * @return $this
     */
    public function setOfficialSite($officialSite): Game
    {
        $this->officialSite = $officialSite;
        return $this;
    }

    /**
     * Get officialSite
     *
     * @return string|null $officialSite
     */
    public function getOfficialSite(): ?string
    {
        return $this->officialSite;
    }

    /**
     * Set forumUrl
     *
     * @param string $forumUrl
     * @return $this
     */
    public function setForumUrl($forumUrl): Game
    {
        $this->forumUrl = $forumUrl;
        return $this;
    }

    /**
     * Get forumUrl
     *
     * @return string|null $forumUrl
     */
    public function getForumUrl(): ?string
    {
        return $this->forumUrl;
    }

    /**
     * Set wikiUrl
     *
     * @param string $wikiUrl
     * @return $this
     */
    public function setWikiUrl($wikiUrl): Game
    {
        $this->wikiUrl = $wikiUrl;
        return $this;
    }

    /**
     * Get wikiUrl
     *
     * @return string|null $wikiUrl
     */
    public function getWikiUrl(): ?string
    {
        return $this->wikiUrl;
    }

    /**
     * Set supportUrl
     *
     * @param string $supportUrl
     * @return $this
     */
    public function setSupportUrl($supportUrl): Game
    {
        $this->supportUrl = $supportUrl;
        return $this;
    }

    /**
     * Get supportUrl
     *
     * @return string|null $supportUrl
     */
    public function getSupportUrl(): ?string
    {
        return $this->supportUrl;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description): Game
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string|null $description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set textForCatalog
     *
     * @param string $textForCatalog
     * @return $this
     */
    public function setTextForCatalog($textForCatalog): Game
    {
        $this->textForCatalog = $textForCatalog;
        return $this;
    }

    /**
     * Get textForCatalog
     *
     * @return string|null $textForCatalog
     */
    public function getTextForCatalog(): ?string
    {
        return $this->textForCatalog;
    }

    /**
     * @return mixed
     */
    public function getSocialGroups()
    {
        return $this->socialGroups;
    }

    /**
     * @param mixed $socialGroups
     * @return Game
     */
    public function setSocialGroups($socialGroups): Game
    {
        $this->socialGroups = $socialGroups;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientDownloadUrl(): ?string
    {
        return $this->clientDownloadUrl;
    }

    /**
     * @param string $clientDownloadUrl
     * @return Game
     */
    public function setClientDownloadUrl($clientDownloadUrl): Game
    {
        $this->clientDownloadUrl = $clientDownloadUrl;
        return $this;
    }

    /**
     * @return Media|string|null
     */
    public function getIcon48x48()
    {
        return $this->icon48x48;
    }

    /**
     * @param Media $icon48x48
     * @return Game
     */
    public function setIcon48x48($icon48x48): Game
    {
        $this->icon48x48 = $icon48x48;
        return $this;
    }

    /**
     * @return Media|string|null
     */
    public function getAvatar100x100()
    {
        return $this->avatar100x100;
    }

    /**
     * @param Media $avatar100x100
     * @return Game
     */
    public function setAvatar100x100($avatar100x100): Game
    {
        $this->avatar100x100 = $avatar100x100;
        return $this;
    }

    /**
     * @return Media|string|null
     */
    public function getAvatar300x200()
    {
        return $this->avatar300x200;
    }

    /**
     * @param Media $avatar300x200
     * @return Game
     */
    public function setAvatar300x200($avatar300x200): Game
    {
        $this->avatar300x200 = $avatar300x200;
        return $this;
    }

    /**
     * @return Media|string|null
     */
    public function getAvatar180x200()
    {
        return $this->avatar180x200;
    }

    /**
     * @param Media $avatar180x200
     * @return Game
     */
    public function setAvatar180x200($avatar180x200): Game
    {
        $this->avatar180x200 = $avatar180x200;
        return $this;
    }

    /**
     * @return Media|string|null
     */
    public function getIconInApp()
    {
        return $this->iconInApp;
    }

    /**
     * @param Media $iconInApp
     * @return Game
     */
    public function setIconInApp($iconInApp): Game
    {
        $this->iconInApp = $iconInApp;
        return $this;
    }

    /**
     * Set category
     *
     * @param Genre $genre
     * @return $this
     */
    public function setGenre(Genre $genre): Game
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Set shortcut
     *
     * @param Shortcut $shortcut
     * @return $this
     */
    public function setShortcut(Shortcut $shortcut): Game
    {
        $this->shortcut = $shortcut;
        return $this;
    }

    /**
     * Get genre
     *
     * @return Genre|null $genre
     */
    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    /**
     * @return bool
     */
    public function isPublishedInApp(): bool
    {
        return $this->isPublishedInApp;
    }

    /**
     * @param bool $isPublishedInApp
     * @return Game
     */
    public function setIsPublishedInApp(bool $isPublishedInApp): Game
    {
        $this->isPublishedInApp = $isPublishedInApp;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRunnable(): bool
    {
        return $this->isRunnable;
    }

    /**
     * @param bool $isRunnable
     * @return Game
     */
    public function setIsRunnable(bool $isRunnable): Game
    {
        $this->isRunnable = $isRunnable;
        return $this;
    }

    public function __toString()
    {
        return (string)$this->getName();
    }
}
