<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class SocialGroup extends BaseDocument
{
    /**
     * @var string
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="SocialNetwork")
     */
    protected $socialNetwork;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     */
    protected $url;

    public function __construct()
    {
        $this->url = '';
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
     * @return SocialGroup
     */
    public function setId(string $id): SocialGroup
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocialNetwork()
    {
        return $this->socialNetwork;
    }

    /**
     * @param mixed $socialNetwork
     * @return SocialGroup
     */
    public function setSocialNetwork($socialNetwork): SocialGroup
    {
        $this->socialNetwork = $socialNetwork;
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
     * @param string $url
     * @return SocialGroup
     */
    public function setUrl(string $url): SocialGroup
    {
        $this->url = $url;
        return $this;
    }
}
