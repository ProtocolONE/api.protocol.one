<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class DownloadHook extends BaseDocument
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
    protected $priorityBefore;

    /**
     * @var int
     * @MongoDB\Field(type="int")
     */
    protected $priorityAfter;

    /**
     * @var DownloadHookType
     * @MongoDB\ReferenceOne(targetDocument="DownloadHookType")
     */
    protected $downloadHooksRef;

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
    public function getPriorityBefore(): int
    {
        return (int)$this->priorityBefore;
    }

    /**
     * @param int $priorityBefore
     * @return DownloadHook
     */
    public function setPriorityBefore($priorityBefore): DownloadHook
    {
        $this->priorityBefore = $priorityBefore;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriorityAfter(): int
    {
        return (int)$this->priorityAfter;
    }

    /**
     * @param int $priorityAfter
     * @return DownloadHook
     */
    public function setPriorityAfter($priorityAfter): DownloadHook
    {
        $this->priorityAfter = $priorityAfter;
        return $this;
    }

    /**
     * @return DownloadHookType|null
     */
    public function getDownloadHooksRef(): ?DownloadHookType
    {
        return $this->downloadHooksRef;
    }

    /**
     * @param DownloadHookType $downloadHooksRef
     * @return DownloadHook
     */
    public function setDownloadHooksRef($downloadHooksRef): DownloadHook
    {
        $this->downloadHooksRef = $downloadHooksRef;
        return $this;
    }

    public function __toString()
    {
        return sprintf('%s (%d > %d)', $this->getDownloadHooksRef()->getName(), $this->getPriorityBefore(), $this->getPriorityAfter());
    }
}
