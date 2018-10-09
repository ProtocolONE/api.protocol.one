<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class GameHost extends BaseDocument
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
    protected $hasDownloadPath;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $downloadTorrentDirectUrl;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $folderName;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $gameSize;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $dependencyList;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $extractorType;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $executeUrl;

    /**
     * @var boolean
     * @MongoDB\Field(type="boolean")
     */
    protected $isThettaUnbind;

    /**
     * @MongoDB\ReferenceMany(targetDocument="DownloadHook")
     */
    protected $downloadHooks;

    /**
     * @MongoDB\ReferenceMany(targetDocument="ExecutorHook")
     */
    protected $executorHooks;

    public function __construct()
    {
        $this->hasDownloadPath = false;
        $this->isThettaUnbind = false;
        $this->executorHooks = [];
        $this->downloadHooks = [];
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
     * @return GameHost
     */
    public function setGame($game): GameHost
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasDownloadPath(): bool
    {
        return (bool)$this->hasDownloadPath;
    }

    /**
     * @param bool $hasDownloadPath
     * @return GameHost
     */
    public function setHasDownloadPath($hasDownloadPath): GameHost
    {
        $this->hasDownloadPath = $hasDownloadPath;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDownloadTorrentDirectUrl(): ?string
    {
        return $this->downloadTorrentDirectUrl;
    }

    /**
     * @param string $downloadTorrentDirectUrl
     * @return GameHost
     */
    public function setDownloadTorrentDirectUrl($downloadTorrentDirectUrl): GameHost
    {
        $this->downloadTorrentDirectUrl = $downloadTorrentDirectUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFolderName(): ?string
    {
        return $this->folderName;
    }

    /**
     * @param string $folderName
     * @return GameHost
     */
    public function setFolderName($folderName): GameHost
    {
        $this->folderName = $folderName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGameSize(): ?string
    {
        return $this->gameSize;
    }

    /**
     * @param string $gameSize
     * @return GameHost
     */
    public function setGameSize($gameSize): GameHost
    {
        $this->gameSize = $gameSize;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDependencyList(): ?string
    {
        return $this->dependencyList;
    }

    /**
     * @param string $dependencyList
     * @return GameHost
     */
    public function setDependencyList($dependencyList): GameHost
    {
        $this->dependencyList = $dependencyList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtractorType(): ?string
    {
        return $this->extractorType;
    }

    /**
     * @param string $extractorType
     * @return GameHost
     */
    public function setExtractorType($extractorType): GameHost
    {
        $this->extractorType = $extractorType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExecuteUrl(): ?string
    {
        return $this->executeUrl;
    }

    /**
     * @param string $executeUrl
     * @return GameHost
     */
    public function setExecuteUrl($executeUrl): GameHost
    {
        $this->executeUrl = $executeUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isThettaUnbind(): bool
    {
        return (bool)$this->isThettaUnbind;
    }

    /**
     * @param bool $isThettaUnbind
     * @return GameHost
     */
    public function setIsThettaUnbind($isThettaUnbind): GameHost
    {
        $this->isThettaUnbind = $isThettaUnbind;
        return $this;
    }

    /**
     * @return array
     */
    public function getDownloadHooks(): array
    {
        return $this->downloadHooks;
    }

    /**
     * @param DownloadHook[] $downloadHook
     * @return GameHost
     */
    public function setDownloadHooks($downloadHook): GameHost
    {
        $this->downloadHooks = $downloadHook;
        return $this;
    }

    /**
     * @return ExecutorHook[]|null
     */
    public function getExecutorHooks(): array
    {
        return $this->executorHooks;
    }

    /**
     * @param ExecutorHook[]|null $executorHooks
     * @return GameHost
     */
    public function setExecutorHooks(array $executorHooks): GameHost
    {
        $this->executorHooks = $executorHooks;
        return $this;
    }

    /**
     * Get hasDownloadPath
     *
     * @return boolean $hasDownloadPath
     */
    public function getHasDownloadPath(): bool
    {
        return (bool)$this->hasDownloadPath;
    }

    /**
     * Get isThettaUnbind
     *
     * @return boolean $isThettaUnbind
     */
    public function getIsThettaUnbind(): bool
    {
        return (bool)$this->isThettaUnbind;
    }
}
