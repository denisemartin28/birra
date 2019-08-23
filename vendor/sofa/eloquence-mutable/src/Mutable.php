<?php

namespace Sofa\Eloquence;

use Sofa\Eloquence\Mutable\Hooks;
use Sofa\Eloquence\Mutator\Mutator;
use Sofa\Eloquence\Contracts\Mutator as MutatorContract;

/**
 * @property array $setterMutators
 * @property array $getterMutators
 */
trait Mutable
{
    /**
     * Attribute mutator instance.
     *
     * @var \Sofa\Eloquence\Contracts\Mutator
     */
    protected static $attributeMutator;

    /**
     * Register hooks for the trait.
     *
     * @codeCoverageIgnore
     *
     * @return void
     */
    public static function bootMutable()
    {
        if (!isset(static::$attributeMutator)) {
            if (function_exists('app') && app()->bound('eloquence.mutator')) {
                static::setAttributeMutator(app('eloquence.mutator'));
            } else {
                static::setAttributeMutator(new Mutator);
            }
        }
        
        $hooks = new Hooks;

        foreach (['setAttribute', 'getAttribute', 'toArray'] as $method) {
            static::hook($method, $hooks->{$method}());
        }
    }

    /**
     * Mutate mutable attributes for array conversion.
     *
     * @param  array $attributes
     * @return array
     */
    protected function mutableAttributesToArray(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if ($this->hasGetterMutator($key)) {
                $attributes[$key] = $this->mutableMutate($key, $value, 'getter');
            }
        }

        return $attributes;
    }

    /**
     * Determine whether an attribute has getter mutators defined.
     *
     * @param  string  $key
     * @return boolean
     */
    public function hasGetterMutator($key)
    {
        return array_key_exists($key, $this->getMutators('getter'));
    }

    /**
     * Determine whether an attribute has setter mutators defined.
     *
     * @param  string  $key
     * @return boolean
     */
    public function hasSetterMutator($key)
    {
        return array_key_exists($key, $this->getMutators('setter'));
    }

    /**
     * Mutate the attribute.
     *
     * @param  string $key
     * @param  string $value
     * @param  string $dir
     * @return mixed
     */
    protected function mutableMutate($key, $value, $dir)
    {
        $mutators = $this->getMutatorsForAttribute($key, $dir);

        return static::$attributeMutator->mutate($value, $mutators);
    }

    /**
     * Get the mutators for an attribute.
     *
     * @param  string $key
     * @return string
     */
    protected function getMutatorsForAttribute($key, $dir)
    {
        return $this->getMutators($dir)[$key];
    }

    /**
     * Get the array of attribute mutators.
     *
     * @param  string $dir
     * @return array
     */
    public function getMutators($dir)
    {
        $property = ($dir === 'setter') ? 'setterMutators' : 'getterMutators';

        return (property_exists($this, $property)) ? $this->{$property} : [];
    }

    /**
     * Set attribute mutator instance.
     *
     * @codeCoverageIgnore
     *
     * @param  \Sofa\Eloquence\Contracts\Mutator $mutator
     * @return void
     */
    public static function setAttributeMutator(MutatorContract $mutator)
    {
        static::$attributeMutator = $mutator;
    }

    /**
     * Get attribute mutator instance.
     *
     * @codeCoverageIgnore
     *
     * @return \Sofa\Eloquence\Contracts\Mutator
     */
    public static function getAttributeMutator()
    {
        return static::$attributeMutator;
    }
}
