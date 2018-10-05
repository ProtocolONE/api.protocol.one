<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Genre extends BaseDocument
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

    public function __construct()
    {
        $this->name = '';
        $this->alias = '';
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
    public function setName($name): Genre
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return Genre
     */
    public function setAlias($alias): Genre
    {
        $this->alias = $alias;
        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
