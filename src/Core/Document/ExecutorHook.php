<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class ExecutorHook extends BaseDocument
{
    /**
     * @var string
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @var int
     * @MongoDB\Field(type="int")
     */
    protected $priority;

    /**
     * @var ExecutorHookType
     * @MongoDB\ReferenceOne(targetDocument="ExecutorHookType")
     */
    protected $executorHooksRef;

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
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return ExecutorHook
     */
    public function setPriority($priority): ExecutorHook
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecutorHooksRef()
    {
        return $this->executorHooksRef;
    }

    /**
     * @param ExecutorHookType $executorHooksRef
     * @return ExecutorHook
     */
    public function setExecutorHooksRef($executorHooksRef): ExecutorHook
    {
        $this->executorHooksRef = $executorHooksRef;
        return $this;
    }

    public function __toString()
    {
        return sprintf('%s (%d)', $this->getExecutorHooksRef()->getName(), $this->getPriority());
    }
}
