<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Grid extends BaseDocument
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
     * @var bool
     * @MongoDB\Field(type="boolean")
     */
    protected $isActive;

    /**
     * @var \DateTime
     * @MongoDB\Field(type="date")
     */
    protected $createdAt;

    /**
     * @var GridItem[]
     * @MongoDB\ReferenceMany(targetDocument="GridItem", cascade={"all"})
     */
    protected $gridItems;

    public function __construct()
    {
        $this->gridItems = [];
        $this->createdAt = new \DateTime();
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
     * @return Grid
     */
    public function setId($id): Grid
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return (bool)$this->isActive;
    }

    /**
     * @param bool $isActive
     * @return Grid
     */
    public function setIsActive($isActive): Grid
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Grid
     */
    public function setName($name): Grid
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Grid
     */
    public function setCreatedAt($createdAt): Grid
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return GridItem[]
     */
    public function getGridItems()
    {
        return $this->gridItems;
    }

    /**
     * @param GridItem[] $gridItems
     * @return Grid
     */
    public function setGridItems($gridItems): Grid
    {
        $this->gridItems = $gridItems;
        return $this;
    }
}
