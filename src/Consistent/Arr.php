<?php

/*
 * Copyright (C) 2014-2016 Steef de Winter
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * These are added array functions for extra consistency
 * For the regular array functions made consistent, see the Basic_Array class
 *
 * @author steef
 */

namespace Consistent;

class Arr extends Logic_Arr {

    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * Build a new array using a callback.
     *
     * @param  array     $this->array
     * @param  \Closure  $callback
     * @return array
     */
    public function build(Closure $callback)
    {
        $results = array();

        foreach($this->array as $key => $value)
        {
            list($innerKey, $innerValue) = call_user_func($callback, $key, $value);

            $results[$innerKey] = $innerValue;
        }

        return $results;
    }

    /**
     * Divide an array into two arrays. One with keys and the other with values.
     *
     * @return array
     */
    function divide()
    {
        return array(array_keys($this->array), array_values($this->array));
    }

    /**
     * Flatten a multi-dimensional associative array with dots.
     *
     * @param  array   $this->array
     * @param  string  $prepend
     * @return array
     */
    public function dot($prepend = '')
    {
        $results = array();

        foreach($this->array as $key => $value)
        {
            if(is_array($value))
            {
                $results = array_merge($results, $this->dot($value, $prepend . $key . '.'));
            }
            else
            {
                $results[$prepend . $key] = $value;
            }
        }

        return $results;
    }

    /**
     * Get all of the given array except for a specified array of items.
     *
     * @param  array|string  $keys
     * @return array
     */
    public function except($keys)
    {
        return array_diff_key($this->array, array_flip((array) $keys));
    }

    /**
     * Fetch a flattened array of a nested array element.
     *
     * @param  array   $this->array
     * @param  string  $key
     * @return array
     */
    public function fetch($key)
    {
        foreach(explode('.', $key) as $segment)
        {
            $results = array();

            foreach($this->array as $value)
            {
                $value = (array) $value;

                $results[] = $value[$segment];
            }

            $this->array = array_values($results);
        }

        return array_values($results);
    }

    /**
     * Return the first element in an array passing a given truth test.
     *
     * @param  array     $this->array
     * @param  \Closure  $callback
     * @param  mixed     $default
     * @return mixed
     */
    public function first($callback, $default = null)
    {
        foreach($this->array as $key => $value)
        {
            if(call_user_func($callback, $key, $value))
            {
                return $value;
            }
        }

        return $default;
    }

    /**
     * Return the last element in an array passing a given truth test.
     *
     * @param  array     $this->array
     * @param  \Closure  $callback
     * @param  mixed     $default
     * @return mixed
     */
    public function last($callback, $default = null)
    {
        return $this->first(array_reverse($this->array), $callback, $default);
    }

    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @return array
     */
    public function flatten()
    {
        $return = array();

        array_walk_recursive($this->array, function($x) use (&$return)
        {
            $return[] = $x;
        });

        return $return;
    }

    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @param  array|string  $keys
     * @return void
     */
    public function forget($keys)
    {
        foreach((array) $keys as $key)
        {
            $parts = explode('.', $key);

            while(count($parts) > 1)
            {
                $part = array_shift($parts);

                if(isset($this->array[$part]) && is_array($this->array[$part]))
                {
                    $this->array = & $this->array[$part];
                }
            }

            unset($this->array[array_shift($parts)]);
        }
    }

    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if(is_null($key))
            return $this->array;

        if(isset($this->array[$key]))
            return $this->array[$key];

        $array = $this->array;
        foreach(explode('.', $key) as $segment)
        {
            if(!is_array($array) || !array_key_exists($segment, $array))
            {
                return $default;
            }

            $array = $array[$segment];
        }

        return $array;
    }

    /**
     * Get a subset of the items from the given array.
     *
     * @param  array|string  $keys
     * @return array
     */
    public function only($keys)
    {
        return array_intersect_key($this->array, array_flip((array) $keys));
    }

    /**
     * Pluck an array of values from an array.
     *
     * @param  array   $this->array
     * @param  string  $value
     * @param  string  $key
     * @return array
     */
    public function pluck($value, $key = null)
    {
        $results = array();

        foreach($this->array as $item)
        {
            $itemValue = is_object($item) ? $item->{$value} : $item[$value];

            // If the key is "null", we will just append the value to the array and keep
            // looping. Otherwise we will key the array using the value of the key we
            // received from the developer. Then we'll return the final array form.
            if(is_null($key))
            {
                $results[] = $itemValue;
            }
            else
            {
                $itemKey = is_object($item) ? $item->{$key} : $item[$key];

                $results[$itemKey] = $itemValue;
            }
        }

        return $results;
    }

    /**
     * Get a value from the array, and remove it.
     *
     * @param  array   $this->array
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function pull($key, $default = null)
    {
        $value = $this->get($key, $this->array, $default);

        $this->forget($this->array, $key);

        return $value;
    }

    /**
     * Filter the array using the given Closure.
     *
     * @param  array     $this->array
     * @param  \Closure  $callback
     * @return array
     */
    public function where(Closure $callback)
    {
        $filtered = array();

        foreach($this->array as $key => $value)
        {
            if(call_user_func($callback, $key, $value))
                $filtered[$key] = $value;
        }

        return $filtered;
    }

}
