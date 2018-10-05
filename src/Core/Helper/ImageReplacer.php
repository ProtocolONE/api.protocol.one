<?php namespace Core\Helper;

use Core\Document\BaseDocument;
use Application\Sonata\MediaBundle\Document\Media;
use Sonata\MediaBundle\Twig\Extension\MediaExtension;
use Doctrine\ODM\MongoDB\PersistentCollection;

/**
 * Class ImageReplacer
 *
 * @category GSG
 * @package Core\Helper
 * @copyright Copyright (с) 2018, ProtocolOne and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@protocol.one>
 * @version 1.0
 */
class ImageReplacer
{
    public const SIZE_SMALL = 'small';
    public const SIZE_BIG = 'big';

    private $size;

    /**
     * @var MediaExtension
     */
    private $mediaExtension;

    public function __construct(MediaExtension $mediaExtension)
    {
        $this->mediaExtension = $mediaExtension;
        $this->size = self::SIZE_BIG;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     * @return ImageReplacer
     */
    public function setSize(string $size): ImageReplacer
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param $list BaseDocument[]
     * @return BaseDocument[]
     */
    public function prepareList(array $list): array
    {
        foreach ($list as &$entry) {
            $entry = $this->prepareObject($entry);
        }

        return $list;
    }

    /**
     * @param BaseDocument $object
     * @return BaseDocument
     */
    public function prepareObject(BaseDocument $object): BaseDocument
    {
        $getters = \get_class_methods(\get_class($object));
        foreach ($getters as $key => $funcName) {
            if (0 !== strpos($funcName, 'get')) {
                continue;
            }

            $value = $object->$funcName();
            if (!\is_object($value) && !$value instanceof PersistentCollection) {
                continue;
            }

            $setter = \str_replace('get', 'set', $funcName);

            if ($value instanceof Media) {
                $value = $this->mediaExtension->path($object->$funcName(), $this->size);
            } else if ($value instanceof PersistentCollection) {
                /** @var PersistentCollection $value */
                $value = $this->prepareList($this->prepareList($value->toArray()));
            }

            $object->$setter($value);
        }

        return $object;
    }
}