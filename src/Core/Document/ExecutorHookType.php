<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class ExecutorHookType extends BaseDocument
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
    protected $value;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ExecutorHookType
     */
    public function setName($name): ExecutorHookType
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ExecutorHookType
     */
    public function setValue($value): ExecutorHookType
    {
        $this->value = $value;
        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
