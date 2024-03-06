<?php

namespace Slowlyo\AmisRenderers;

class BaseRenderer implements \JsonSerializable
{
    public string $type;

    public array $amisSchema = [];

    public static function make()
    {
        return new static();
    }

    public function __call($method, $parameters)
    {
        return $this->set($method, array_shift($parameters));
    }

    public function set($name, $value)
    {
        if ($name == 'map' && is_array($value) && array_keys($value) == array_keys(array_keys($value))) {
            $value = (object)$value;
        }

        $this->amisSchema[$name] = $value;

        return $this;
    }

    public function jsonSerialize()
    {
        return $this->amisSchema;
    }

    public function toJson()
    {
        return json_encode($this->amisSchema);
    }

    public function toArray()
    {
        return $this->amisSchema;
    }
}
