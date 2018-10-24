<?php namespace Core\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\PersistentCollection;

/**
 * @MongoDB\MappedSuperclass
 */
abstract class BaseDocument implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        $getters = \get_class_methods(\get_class($this));
        $attributes = [];
        foreach ($getters as $key => $funcName) {
            if (0 !== strpos($funcName, 'get')) {
                continue;
            }

            $propName = \lcfirst(substr($funcName, 3));
            $value = $this->$funcName();

            if ($value instanceof PersistentCollection) {
                $values = [];
                $collection = $value;
                foreach ($collection as $obj) {
                    $values[] = $obj->toArray();
                }
                $attributes[$propName] = $values;
            } else {
                if ($value instanceof \DateTime) {
                    $value = $value->format(\DATE_ATOM);
                }

                $attributes[$propName] = $value;
            }
        }

        return $attributes;
    }
}