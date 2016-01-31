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
 * The regular array functions made consistent
 *
 * @author Steef
 */

namespace Consistent;

class Basic_Arr {

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Changes the case of all keys in an array
     * @link http://php.net/manual/en/function.array-change-key-case.php
     * @param int $case [optional] <p>
     * Either <b>CASE_UPPER</b> or
     * <b>CASE_LOWER</b> (default)
     * </p>
     * @return array an array with its keys lower or uppercased, or <b>FALSE</b> if
     * <i>array</i> is not an array.
     */
    public function change_key_case($case = false)
    {
        if($case === false)
            $case = CASE_LOWER;

        return array_change_key_case($this->array, $case);
    }

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Split an array into chunks
     * @link http://php.net/manual/en/function.array-chunk.php
     * @param int $size <p>
     * The size of each chunk
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * When set to <b>TRUE</b> keys will be preserved.
     * Default is <b>FALSE</b> which will reindex the chunk numerically
     * </p>
     * @return array a multidimensional numerically indexed array, starting with zero,
     * with each dimension containing <i>size</i> elements.
     */
    public function chunk($size, $preserve_keys = false)
    {
        return array_chunk($this->array, $size, $preserve_keys);
    }

    /**
     * (PHP 5 &gt;= 5.5.0)<br/>
     * Return the values from a single column in the input array
     * @link http://php.net/manual/en/function.array-column.php
     * @param mixed $column_key <p>
     * The column of values to return. This value may be the integer key of the
     * column you wish to retrieve, or it may be the string key name for an
     * associative array. It may also be <b>NULL</b> to return complete arrays
     * (useful together with <i>index_key</i> to reindex the
     * array).
     * </p>
     * @param mixed $index_key [optional] <p>
     * The column to use as the index/keys for the returned array. This value
     * may be the integer key of the column, or it may be the string key name.
     * </p>
     * @return array an array of values representing a single column from the input array.
     */
    public function column($column_key, $index_key = null)
    {
        return array_column($this->array, $column_key, $index_key);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array by key
     * @link http://php.net/manual/en/function.ksort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * You may modify the behavior of the sort using the optional
     * parameter <i>sort_flags</i>, for details
     * see <b>sort</b>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function ksort(array &$array, $sort_flags = 'SORT_REGULAR')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array by key in reverse order
     * @link http://php.net/manual/en/function.krsort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * You may modify the behavior of the sort using the optional parameter
     * <i>sort_flags</i>, for details see
     * <b>sort</b>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function krsort(array &$array, $sort_flags = 'SORT_REGULAR')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array using a "natural order" algorithm
     * @link http://php.net/manual/en/function.natsort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function natsort(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array using a case insensitive "natural order" algorithm
     * @link http://php.net/manual/en/function.natcasesort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function natcasesort(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array and maintain index association
     * @link http://php.net/manual/en/function.asort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * You may modify the behavior of the sort using the optional
     * parameter <i>sort_flags</i>, for details
     * see <b>sort</b>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function asort(array &$array, $sort_flags = 'SORT_REGULAR')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array in reverse order and maintain index association
     * @link http://php.net/manual/en/function.arsort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * You may modify the behavior of the sort using the optional parameter
     * <i>sort_flags</i>, for details see
     * <b>sort</b>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function arsort(array &$array, $sort_flags = 'SORT_REGULAR')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array
     * @link http://php.net/manual/en/function.sort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * The optional second parameter <i>sort_flags</i>
     * may be used to modify the sorting behavior using these values:
     * </p>
     * <p>
     * Sorting type flags:
     * <b>SORT_REGULAR</b> - compare items normally
     * (don't change types)
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function sort(array &$array, $sort_flags = 'SORT_REGULAR')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array in reverse order
     * @link http://php.net/manual/en/function.rsort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * You may modify the behavior of the sort using the optional
     * parameter <i>sort_flags</i>, for details see
     * <b>sort</b>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function rsort(array &$array, $sort_flags = 'SORT_REGULAR')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array by values using a user-defined comparison function
     * @link http://php.net/manual/en/function.usort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param callable $value_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * <p>
     * Returning non-integer values from the comparison
     * function, such as float, will result in an internal cast to
     * integer of the callback's return value. So values such as
     * 0.99 and 0.1 will both be cast to an integer value of 0, which will
     * compare such values as equal.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function usort(array &$array, callable $value_compare_func)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array with a user-defined comparison function and maintain index association
     * @link http://php.net/manual/en/function.uasort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param callable $value_compare_func <p>
     * See <b>usort</b> and <b>uksort</b> for
     * examples of user-defined comparison functions.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function uasort(array &$array, callable $value_compare_func)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort an array by keys using a user-defined comparison function
     * @link http://php.net/manual/en/function.uksort.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param callable $key_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function uksort(array &$array, callable $key_compare_func)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Shuffle an array
     * @link http://php.net/manual/en/function.shuffle.php
     * @param array $array <p>
     * The array.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function shuffle(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Apply a user function to every member of an array
     * @link http://php.net/manual/en/function.array-walk.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param callable $callback <p>
     * Typically, <i>callback</i> takes on two parameters.
     * The <i>array</i> parameter's value being the first, and
     * the key/index second.
     * </p>
     * <p>
     * If <i>callback</i> needs to be working with the
     * actual values of the array, specify the first parameter of
     * <i>callback</i> as a
     * reference. Then,
     * any changes made to those elements will be made in the
     * original array itself.
     * </p>
     * <p>
     * Many internal functions (for example <b>strtolower</b>)
     * will throw a warning if more than the expected number of argument
     * are passed in and are not usable directly as a
     * <i>callback</i>.
     * </p>
     * <p>
     * Only the values of the <i>array</i> may potentially be
     * changed; its structure cannot be altered, i.e., the programmer cannot
     * add, unset or reorder elements. If the callback does not respect this
     * requirement, the behavior of this function is undefined, and
     * unpredictable.
     * </p>
     * @param mixed $userdata [optional] <p>
     * If the optional <i>userdata</i> parameter is supplied,
     * it will be passed as the third parameter to the
     * <i>callback</i>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function array_walk(array &$array, callable $callback, $userdata = null)
    {

    }

    /**
     * (PHP 5)<br/>
     * Apply a user function recursively to every member of an array
     * @link http://php.net/manual/en/function.array-walk-recursive.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param callable $callback <p>
     * Typically, <i>callback</i> takes on two parameters.
     * The <i>array</i> parameter's value being the first, and
     * the key/index second.
     * </p>
     * <p>
     * If <i>callback</i> needs to be working with the
     * actual values of the array, specify the first parameter of
     * <i>callback</i> as a
     * reference. Then,
     * any changes made to those elements will be made in the
     * original array itself.
     * </p>
     * @param mixed $userdata [optional] <p>
     * If the optional <i>userdata</i> parameter is supplied,
     * it will be passed as the third parameter to the
     * <i>callback</i>.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function array_walk_recursive(array &$array, callable $callback, $userdata = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Count all elements in an array, or something in an object
     * @link http://php.net/manual/en/function.count.php
     * @param mixed $array_or_countable <p>
     * An array or <b>Countable</b> object.
     * </p>
     * @param int $mode [optional] <p>
     * If the optional <i>mode</i> parameter is set to
     * <b>COUNT_RECURSIVE</b> (or 1), <b>count</b>
     * will recursively count the array. This is particularly useful for
     * counting all the elements of a multidimensional array.
     * </p>
     * <p>
     * <b>count</b> can detect recursion to avoid an infinite
     * loop, but will emit an <b>E_WARNING</b> every time it
     * does (in case the array contains itself more than once) and return a
     * count higher than may be expected.
     * </p>
     * @return int the number of elements in <i>array_or_countable</i>.
     * If the parameter is not an array or not an object with
     * implemented <b>Countable</b> interface,
     * 1 will be returned.
     * There is one exception, if <i>array_or_countable</i> is <b>NULL</b>,
     * 0 will be returned.
     * </p>
     * <p>
     * <b>count</b> may return 0 for a variable that isn't set,
     * but it may also return 0 for a variable that has been initialized with an
     * empty array. Use <b>isset</b> to test if a variable is set.
     */
    function count($array_or_countable, $mode = 'COUNT_NORMAL')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Set the internal pointer of an array to its last element
     * @link http://php.net/manual/en/function.end.php
     * @param array $array <p>
     * The array. This array is passed by reference because it is modified by
     * the function. This means you must pass it a real variable and not
     * a function returning an array because only actual variables may be
     * passed by reference.
     * </p>
     * @return mixed the value of the last element or <b>FALSE</b> for empty array.
     */
    function end(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Rewind the internal array pointer
     * @link http://php.net/manual/en/function.prev.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @return mixed the array value in the previous place that's pointed to by
     * the internal array pointer, or <b>FALSE</b> if there are no more
     * elements.
     */
    function prev(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Advance the internal array pointer of an array
     * @link http://php.net/manual/en/function.next.php
     * @param array $array <p>
     * The array being affected.
     * </p>
     * @return mixed the array value in the next place that's pointed to by the
     * internal array pointer, or <b>FALSE</b> if there are no more elements.
     */
    function next(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Set the internal pointer of an array to its first element
     * @link http://php.net/manual/en/function.reset.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @return mixed the value of the first array element, or <b>FALSE</b> if the array is
     * empty.
     */
    function reset(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return the current element in an array
     * @link http://php.net/manual/en/function.current.php
     * @param array $array <p>
     * The array.
     * </p>
     * @return mixed The <b>current</b> function simply returns the
     * value of the array element that's currently being pointed to by the
     * internal pointer. It does not move the pointer in any way. If the
     * internal pointer points beyond the end of the elements list or the array is
     * empty, <b>current</b> returns <b>FALSE</b>.
     */
    function current(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Fetch a key from an array
     * @link http://php.net/manual/en/function.key.php
     * @param array $array <p>
     * The array.
     * </p>
     * @return mixed The <b>key</b> function simply returns the
     * key of the array element that's currently being pointed to by the
     * internal pointer. It does not move the pointer in any way. If the
     * internal pointer points beyond the end of the elements list or the array is
     * empty, <b>key</b> returns <b>NULL</b>.
     */
    function key(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find lowest value
     * @link http://php.net/manual/en/function.min.php
     * @param array $values <p>
     * An array containing the values.
     * </p>
     * @return mixed <b>min</b> returns the numerically lowest of the
     * parameter values.
     */
    function min(array $values)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find highest value
     * @link http://php.net/manual/en/function.max.php
     * @param array $values <p>
     * An array containing the values.
     * </p>
     * @return mixed <b>max</b> returns the numerically highest of the
     * parameter values. If multiple values can be considered of the same size,
     * the one that is listed first will be returned.
     * </p>
     * <p>
     * When <b>max</b> is given multiple arrays, the
     * longest array is returned. If all the arrays have the same length,
     * <b>max</b> will use lexicographic ordering to find the return
     * value.
     * </p>
     * <p>
     * When given a string it will be cast as an integer
     * when comparing.
     */
    function max(array $values)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Checks if a value exists in an array
     * @link http://php.net/manual/en/function.in-array.php
     * @param mixed $needle <p>
     * The searched value.
     * </p>
     * <p>
     * If <i>needle</i> is a string, the comparison is done
     * in a case-sensitive manner.
     * </p>
     * @param array $haystack <p>
     * The array.
     * </p>
     * @param bool $strict [optional] <p>
     * If the third parameter <i>strict</i> is set to <b>TRUE</b>
     * then the <b>in_array</b> function will also check the
     * types of the
     * <i>needle</i> in the <i>haystack</i>.
     * </p>
     * @return bool <b>TRUE</b> if <i>needle</i> is found in the array,
     * <b>FALSE</b> otherwise.
     */
    function in_array($needle, array $haystack, $strict = '&false;')
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.5, PHP 5)<br/>
     * Searches the array for a given value and returns the corresponding key if successful
     * @link http://php.net/manual/en/function.array-search.php
     * @param mixed $needle <p>
     * The searched value.
     * </p>
     * <p>
     * If <i>needle</i> is a string, the comparison is done
     * in a case-sensitive manner.
     * </p>
     * @param array $haystack <p>
     * The array.
     * </p>
     * @param bool $strict [optional] <p>
     * If the third parameter <i>strict</i> is set to <b>TRUE</b>
     * then the <b>array_search</b> function will search for
     * identical elements in the
     * <i>haystack</i>. This means it will also check the
     * types of the
     * <i>needle</i> in the <i>haystack</i>,
     * and objects must be the same instance.
     * </p>
     * @return mixed the key for <i>needle</i> if it is found in the
     * array, <b>FALSE</b> otherwise.
     * </p>
     * <p>
     * If <i>needle</i> is found in <i>haystack</i>
     * more than once, the first matching key is returned. To return the keys for
     * all matching values, use <b>array_keys</b> with the optional
     * <i>search_value</i> parameter instead.
     */
    function array_search($needle, array $haystack, $strict = false)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Import variables into the current symbol table from an array
     * @link http://php.net/manual/en/function.extract.php
     * @param array $array <p>
     * Note that <i>prefix</i> is only required if
     * <i>flags</i> is <b>EXTR_PREFIX_SAME</b>,
     * <b>EXTR_PREFIX_ALL</b>, <b>EXTR_PREFIX_INVALID</b>
     * or <b>EXTR_PREFIX_IF_EXISTS</b>. If
     * the prefixed result is not a valid variable name, it is not
     * imported into the symbol table. Prefixes are automatically separated from
     * the array key by an underscore character.
     * </p>
     * @param int $flags [optional] <p>
     * The way invalid/numeric keys and collisions are treated is determined
     * by the extraction <i>flags</i>. It can be one of the
     * following values:
     * <b>EXTR_OVERWRITE</b>
     * If there is a collision, overwrite the existing variable.
     * @param string $prefix [optional] Only overwrite the variable if it already exists in the
     * current symbol table, otherwise do nothing. This is useful
     * for defining a list of valid variables and then extracting
     * only those variables you have defined out of
     * $_REQUEST, for example.
     * @return int the number of variables successfully imported into the symbol
     * table.
     */
    function extract(array &$array, $flags = 'EXTR_OVERWRITE', $prefix = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Create array containing variables and their values
     * @link http://php.net/manual/en/function.compact.php
     * @param mixed $varname1 <p>
     * <b>compact</b> takes a variable number of parameters.
     * Each parameter can be either a string containing the name of the
     * variable, or an array of variable names. The array can contain other
     * arrays of variable names inside it; <b>compact</b>
     * handles it recursively.
     * </p>
     * @param mixed $_ [optional]
     * @return array the output array with all the variables added to it.
     */
    function compact($varname1, $_ = null)
    {

    }

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Fill an array with values
     * @link http://php.net/manual/en/function.array-fill.php
     * @param int $start_index <p>
     * The first index of the returned array.
     * </p>
     * <p>
     * If <i>start_index</i> is negative,
     * the first index of the returned array will be
     * <i>start_index</i> and the following
     * indices will start from zero
     * (see example).
     * </p>
     * @param int $num <p>
     * Number of elements to insert.
     * Must be greater than zero.
     * </p>
     * @param mixed $value <p>
     * Value to use for filling
     * </p>
     * @return array the filled array
     */
    function array_fill($start_index, $num, $value)
    {

    }

    /**
     * (PHP 5 &gt;= 5.2.0)<br/>
     * Fill an array with values, specifying keys
     * @link http://php.net/manual/en/function.array-fill-keys.php
     * @param array $keys <p>
     * Array of values that will be used as keys. Illegal values
     * for key will be converted to string.
     * </p>
     * @param mixed $value <p>
     * Value to use for filling
     * </p>
     * @return array the filled array
     */
    function array_fill_keys(array $keys, $value)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Create an array containing a range of elements
     * @link http://php.net/manual/en/function.range.php
     * @param mixed $start <p>
     * First value of the sequence.
     * </p>
     * @param mixed $end <p>
     * The sequence is ended upon reaching the
     * <i>end</i> value.
     * </p>
     * @param number $step [optional] <p>
     * If a <i>step</i> value is given, it will be used as the
     * increment between elements in the sequence. <i>step</i>
     * should be given as a positive number. If not specified,
     * <i>step</i> will default to 1.
     * </p>
     * @return array an array of elements from <i>start</i> to
     * <i>end</i>, inclusive.
     */
    function range($start, $end, $step = 1)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Sort multiple or multi-dimensional arrays
     * @link http://php.net/manual/en/function.array-multisort.php
     * @param array $array1 <p>
     * An array being sorted.
     * </p>
     * @param mixed $array1_sort_order [optional] <p>
     * The order used to sort the previous array argument. Either
     * <b>SORT_ASC</b> to sort ascendingly or <b>SORT_DESC</b>
     * to sort descendingly.
     * </p>
     * <p>
     * This argument can be swapped with <i>array1_sort_flags</i>
     * or omitted entirely, in which case <b>SORT_ASC</b> is assumed.
     * </p>
     * @param mixed $array1_sort_flags [optional] <p>
     * Sort options for the previous array argument:
     * </p>
     * <p>
     * Sorting type flags:
     * <b>SORT_REGULAR</b> - compare items normally
     * (don't change types)
     * @param mixed $_ [optional] <p>
     * More arrays, optionally followed by sort order and flags.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function array_multisort(array &$array1, $array1_sort_order = 'SORT_ASC', $array1_sort_flags = 'SORT_REGULAR', $_ = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Push one or more elements onto the end of array
     * @link http://php.net/manual/en/function.array-push.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param mixed $value1 <p>
     * The first value to push onto the end of the <i>array</i>.
     * </p>
     * @param mixed $_ [optional]
     * @return int the new number of elements in the array.
     */
    function array_push(array &$array, $value1, $_ = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Pop the element off the end of array
     * @link http://php.net/manual/en/function.array-pop.php
     * @param array $array <p>
     * The array to get the value from.
     * </p>
     * @return mixed the last value of <i>array</i>.
     * If <i>array</i> is empty (or is not an array),
     * <b>NULL</b> will be returned.
     */
    function array_pop(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Shift an element off the beginning of array
     * @link http://php.net/manual/en/function.array-shift.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @return mixed the shifted value, or <b>NULL</b> if <i>array</i> is
     * empty or is not an array.
     */
    function array_shift(array &$array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Prepend one or more elements to the beginning of an array
     * @link http://php.net/manual/en/function.array-unshift.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param mixed $value1 <p>
     * First value to prepend.
     * </p>
     * @param mixed $_ [optional]
     * @return int the new number of elements in the <i>array</i>.
     */
    function array_unshift(array &$array, $value1, $_ = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Remove a portion of the array and replace it with something else
     * @link http://php.net/manual/en/function.array-splice.php
     * @param array $input <p>
     * The input array.
     * </p>
     * @param int $offset <p>
     * If <i>offset</i> is positive then the start of removed
     * portion is at that offset from the beginning of the
     * <i>input</i> array. If <i>offset</i>
     * is negative then it starts that far from the end of the
     * <i>input</i> array.
     * </p>
     * @param int $length [optional] <p>
     * If <i>length</i> is omitted, removes everything
     * from <i>offset</i> to the end of the array. If
     * <i>length</i> is specified and is positive, then
     * that many elements will be removed. If
     * <i>length</i> is specified and is negative then
     * the end of the removed portion will be that many elements from
     * the end of the array. Tip: to remove everything from
     * <i>offset</i> to the end of the array when
     * <i>replacement</i> is also specified, use
     * count($input) for
     * <i>length</i>.
     * </p>
     * @param mixed $replacement [optional] <p>
     * If <i>replacement</i> array is specified, then the
     * removed elements are replaced with elements from this array.
     * </p>
     * <p>
     * If <i>offset</i> and <i>length</i>
     * are such that nothing is removed, then the elements from the
     * <i>replacement</i> array are inserted in the place
     * specified by the <i>offset</i>. Note that keys in
     * replacement array are not preserved.
     * </p>
     * <p>
     * If <i>replacement</i> is just one element it is
     * not necessary to put array()
     * around it, unless the element is an array itself, an object or <b>NULL</b>.
     * </p>
     * @return array the array consisting of the extracted elements.
     */
    function array_splice(array &$input, $offset, $length = null, $replacement = 'array()')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Extract a slice of the array
     * @link http://php.net/manual/en/function.array-slice.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $offset <p>
     * If <i>offset</i> is non-negative, the sequence will
     * start at that offset in the <i>array</i>. If
     * <i>offset</i> is negative, the sequence will
     * start that far from the end of the <i>array</i>.
     * </p>
     * @param int $length [optional] <p>
     * If <i>length</i> is given and is positive, then
     * the sequence will have up to that many elements in it. If the array
     * is shorter than the <i>length</i>, then only the
     * available array elements will be present. If
     * <i>length</i> is given and is negative then the
     * sequence will stop that many elements from the end of the
     * array. If it is omitted, then the sequence will have everything
     * from <i>offset</i> up until the end of the
     * <i>array</i>.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * Note that <b>array_slice</b> will reorder and reset the
     * numeric array indices by default. You can change this behaviour by setting
     * <i>preserve_keys</i> to <b>TRUE</b>.
     * </p>
     * @return array the slice.
     */
    function array_slice(array $array, $offset, $length = null, $preserve_keys = false)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Merge one or more arrays
     * @link http://php.net/manual/en/function.array-merge.php
     * @param array $array1 <p>
     * Initial array to merge.
     * </p>
     * @param array $_ [optional] <p>
     * Variable list of arrays to merge.
     * </p>
     * @return array the resulting array.
     */
    function array_merge(array $array1, array $_ = null)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
     * Merge two or more arrays recursively
     * @link http://php.net/manual/en/function.array-merge-recursive.php
     * @param array $array1 <p>
     * Initial array to merge.
     * </p>
     * @param array $_ [optional] <p>
     * Variable list of arrays to recursively merge.
     * </p>
     * @return array An array of values resulted from merging the arguments together.
     */
    function array_merge_recursive(array $array1, array $_ = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.3.0)<br/>
     * Replaces elements from passed arrays into the first array
     * @link http://php.net/manual/en/function.array-replace.php
     * @param array $array1 <p>
     * The array in which elements are replaced.
     * </p>
     * @param array $array2 <p>
     * The array from which elements will be extracted.
     * </p>
     * @param array $_ [optional] <p>
     * More arrays from which elements will be extracted.
     * Values from later arrays overwrite the previous values.
     * </p>
     * @return array an array, or <b>NULL</b> if an error occurs.
     */
    function array_replace(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.3.0)<br/>
     * Replaces elements from passed arrays into the first array recursively
     * @link http://php.net/manual/en/function.array-replace-recursive.php
     * @param array $array1 <p>
     * The array in which elements are replaced.
     * </p>
     * @param array $array2 <p>
     * The array from which elements will be extracted.
     * </p>
     * @param array $_ [optional] <p>
     * Optional. More arrays from which elements will be extracted.
     * </p>
     * @return array an array, or <b>NULL</b> if an error occurs.
     */
    function array_replace_recursive(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return all the keys or a subset of the keys of an array
     * @link http://php.net/manual/en/function.array-keys.php
     * @param array $array <p>
     * An array containing keys to return.
     * </p>
     * @param mixed $search_value [optional] <p>
     * If specified, then only keys containing these values are returned.
     * </p>
     * @param bool $strict [optional] <p>
     * Determines if strict comparison (===) should be used during the search.
     * </p>
     * @return array an array of all the keys in <i>array</i>.
     */
    function array_keys(array $array, $search_value = null, $strict = false)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return all the values of an array
     * @link http://php.net/manual/en/function.array-values.php
     * @param array $array <p>
     * The array.
     * </p>
     * @return array an indexed array of values.
     */
    function array_values(array $array)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Counts all the values of an array
     * @link http://php.net/manual/en/function.array-count-values.php
     * @param array $array <p>
     * The array of values to count
     * </p>
     * @return array an associative array of values from <i>array</i> as
     * keys and their count as value.
     */
    function array_count_values(array $array)
    {

    }

    /**
     * (PHP 5 &gt;= 5.5.0)<br/>
     * Return the values from a single column in the input array
     * @link http://php.net/manual/en/function.array-column.php
     * @param array $array <p>
     * A multi-dimensional array (record set) from which to pull a column of
     * values.
     * </p>
     * @param mixed $column_key <p>
     * The column of values to return. This value may be the integer key of the
     * column you wish to retrieve, or it may be the string key name for an
     * associative array. It may also be <b>NULL</b> to return complete arrays
     * (useful together with <i>index_key</i> to reindex the
     * array).
     * </p>
     * @param mixed $index_key [optional] <p>
     * The column to use as the index/keys for the returned array. This value
     * may be the integer key of the column, or it may be the string key name.
     * </p>
     * @return array an array of values representing a single column from the input array.
     */
    function array_column(array $array, $column_key, $index_key = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return an array with elements in reverse order
     * @link http://php.net/manual/en/function.array-reverse.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * If set to <b>TRUE</b> numeric keys are preserved.
     * Non-numeric keys are not affected by this setting and will always be preserved.
     * </p>
     * @return array the reversed array.
     */
    function array_reverse(array $array, $preserve_keys = false)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.5, PHP 5)<br/>
     * Iteratively reduce the array to a single value using a callback function
     * @link http://php.net/manual/en/function.array-reduce.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param callable $callback mixed<b>callback</b>
     * <b>mixed<i>carry</i></b>
     * <b>mixed<i>item</i></b>
     * <i>carry</i>
     * <p>
     * Holds the return value of the previous iteration; in the case of the
     * first iteration it instead holds the value of
     * <i>initial</i>.
     * </p>
     * @param mixed $initial [optional] <p>
     * If the optional <i>initial</i> is available, it will
     * be used at the beginning of the process, or as a final result in case
     * the array is empty.
     * </p>
     * @return mixed the resulting value.
     * </p>
     * <p>
     * If the array is empty and <i>initial</i> is not passed,
     * <b>array_reduce</b> returns <b>NULL</b>.
     */
    function array_reduce(array $array, callable $callback, $initial = null)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Pad array to the specified length with a value
     * @link http://php.net/manual/en/function.array-pad.php
     * @param array $array <p>
     * Initial array of values to pad.
     * </p>
     * @param int $size <p>
     * New size of the array.
     * </p>
     * @param mixed $value <p>
     * Value to pad if <i>array</i> is less than
     * <i>size</i>.
     * </p>
     * @return array a copy of the <i>array</i> padded to size specified
     * by <i>size</i> with value
     * <i>value</i>. If <i>size</i> is
     * positive then the array is padded on the right, if it's negative then
     * on the left. If the absolute value of <i>size</i> is less
     * than or equal to the length of the <i>array</i> then no
     * padding takes place.
     */
    function array_pad(array $array, $size, $value)
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Exchanges all keys with their associated values in an array
     * @link http://php.net/manual/en/function.array-flip.php
     * @param array $array <p>
     * An array of key/value pairs to be flipped.
     * </p>
     * @return array the flipped array on success and <b>NULL</b> on failure.
     */
    function array_flip(array $array)
    {

    }

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Changes the case of all keys in an array
     * @link http://php.net/manual/en/function.array-change-key-case.php
     * @param array $array <p>
     * The array to work on
     * </p>
     * @param int $case [optional] <p>
     * Either <b>CASE_UPPER</b> or
     * <b>CASE_LOWER</b> (default)
     * </p>
     * @return array an array with its keys lower or uppercased, or <b>FALSE</b> if
     * <i>array</i> is not an array.
     */
    function array_change_key_case(array $array, $case = 'CASE_LOWER')
    {

    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Pick one or more random entries out of an array
     * @link http://php.net/manual/en/function.array-rand.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $num [optional] <p>
     * Specifies how many entries should be picked.
     * </p>
     * @return mixed When picking only one entry, <b>array_rand</b> returns
     * the key for a random entry. Otherwise, an array of keys for the random
     * entries is returned. This is done so that random keys can be picked
     * from the array as well as random values. Trying to pick more elements
     * than there are in the array will result in an
     * <b>E_WARNING</b> level error, and NULL will be returned.
     */
    function array_rand(array $array, $num = 1)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
     * Removes duplicate values from an array
     * @link http://php.net/manual/en/function.array-unique.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @param int $sort_flags [optional] <p>
     * The optional second parameter <i>sort_flags</i>
     * may be used to modify the sorting behavior using these values:
     * </p>
     * <p>
     * Sorting type flags:
     * <b>SORT_REGULAR</b> - compare items normally
     * (don't change types)
     * @return array the filtered array.
     */
    function array_unique(array $array, $sort_flags = 'SORT_STRING')
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
     * Computes the intersection of arrays
     * @link http://php.net/manual/en/function.array-intersect.php
     * @param array $array1 <p>
     * The array with master values to check.
     * </p>
     * @param array $array2 <p>
     * An array to compare values against.
     * </p>
     * @param array $_ [optional] <p>
     * A variable list of arrays to compare.
     * </p>
     * @return array an array containing all of the values in
     * <i>array1</i> whose values exist in all of the parameters.
     */
    function array_intersect(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Computes the intersection of arrays using keys for comparison
     * @link http://php.net/manual/en/function.array-intersect-key.php
     * @param array $array1 <p>
     * The array with master keys to check.
     * </p>
     * @param array $array2 <p>
     * An array to compare keys against.
     * </p>
     * @param array $_ [optional] <p>
     * A variable list of arrays to compare.
     * </p>
     * @return array an associative array containing all the entries of
     * <i>array1</i> which have keys that are present in all
     * arguments.
     */
    function array_intersect_key(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Computes the intersection of arrays using a callback function on the keys for comparison
     * @link http://php.net/manual/en/function.array-intersect-ukey.php
     * @param array $array1 <p>
     * Initial array for comparison of the arrays.
     * </p>
     * @param array $array2 <p>
     * First array to compare keys against.
     * </p>
     * @param array $_ [optional] <p>
     * Variable list of array arguments to compare keys against.
     * </p>
     * @param callable $key_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array the values of <i>array1</i> whose keys exist
     * in all the arguments.
     */
    function array_intersect_ukey(array $array1, array $array2, array $_ = null, callable $key_compare_func)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the intersection of arrays, compares data by a callback function
     * @link http://php.net/manual/en/function.array-uintersect.php
     * @param array $array1 <p>
     * The first array.
     * </p>
     * @param array $array2 <p>
     * The second array.
     * </p>
     * @param array $_ [optional]
     * @param callable $value_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array an array containing all the values of <i>array1</i>
     * that are present in all the arguments.
     */
    function array_uintersect(array $array1, array $array2, array $_ = null, callable $value_compare_func)
    {

    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Computes the intersection of arrays with additional index check
     * @link http://php.net/manual/en/function.array-intersect-assoc.php
     * @param array $array1 <p>
     * The array with master values to check.
     * </p>
     * @param array $array2 <p>
     * An array to compare values against.
     * </p>
     * @param array $_ [optional] <p>
     * A variable list of arrays to compare.
     * </p>
     * @return array an associative array containing all the values in
     * <i>array1</i> that are present in all of the arguments.
     */
    function array_intersect_assoc(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the intersection of arrays with additional index check, compares data by a callback function
     * @link http://php.net/manual/en/function.array-uintersect-assoc.php
     * @param array $array1 <p>
     * The first array.
     * </p>
     * @param array $array2 <p>
     * The second array.
     * </p>
     * @param array $_ [optional]
     * @param callable $value_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array an array containing all the values of
     * <i>array1</i> that are present in all the arguments.
     */
    function array_uintersect_assoc(array $array1, array $array2, array $_ = null, callable $value_compare_func)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the intersection of arrays with additional index check, compares indexes by a callback function
     * @link http://php.net/manual/en/function.array-intersect-uassoc.php
     * @param array $array1 <p>
     * Initial array for comparison of the arrays.
     * </p>
     * @param array $array2 <p>
     * First array to compare keys against.
     * </p>
     * @param array $_ [optional] <p>
     * Variable list of array arguments to compare values against.
     * </p>
     * @param callable $key_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array the values of <i>array1</i> whose values exist
     * in all of the arguments.
     */
    function array_intersect_uassoc(array $array1, array $array2, array $_ = null, callable $key_compare_func)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the intersection of arrays with additional index check, compares data and indexes by a callback functions
     * @link http://php.net/manual/en/function.array-uintersect-uassoc.php
     * @param array $array1 <p>
     * The first array.
     * </p>
     * @param array $array2 <p>
     * The second array.
     * </p>
     * @param array $_ [optional]
     * @param callable $value_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @param callable $key_compare_func <p>
     * Key comparison callback function.
     * </p>
     * @return array an array containing all the values of
     * <i>array1</i> that are present in all the arguments.
     */
    function array_uintersect_uassoc(array $array1, array $array2, array $_ = null, callable $value_compare_func, callable $key_compare_func)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
     * Computes the difference of arrays
     * @link http://php.net/manual/en/function.array-diff.php
     * @param array $array1 <p>
     * The array to compare from
     * </p>
     * @param array $array2 <p>
     * An array to compare against
     * </p>
     * @param array $_ [optional] <p>
     * More arrays to compare against
     * </p>
     * @return array an array containing all the entries from
     * <i>array1</i> that are not present in any of the other arrays.
     */
    function array_diff(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Computes the difference of arrays using keys for comparison
     * @link http://php.net/manual/en/function.array-diff-key.php
     * @param array $array1 <p>
     * The array to compare from
     * </p>
     * @param array $array2 <p>
     * An array to compare against
     * </p>
     * @param array $_ [optional] <p>
     * More arrays to compare against
     * </p>
     * @return array an array containing all the entries from
     * <i>array1</i> whose keys are not present in any of the
     * other arrays.
     */
    function array_diff_key(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Computes the difference of arrays using a callback function on the keys for comparison
     * @link http://php.net/manual/en/function.array-diff-ukey.php
     * @param array $array1 <p>
     * The array to compare from
     * </p>
     * @param array $array2 <p>
     * An array to compare against
     * </p>
     * @param array $_ [optional] <p>
     * More arrays to compare against
     * </p>
     * @param callable $key_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array an array containing all the entries from
     * <i>array1</i> that are not present in any of the other arrays.
     */
    function array_diff_ukey(array $array1, array $array2, array $_ = null, callable $key_compare_func)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the difference of arrays by using a callback function for data comparison
     * @link http://php.net/manual/en/function.array-udiff.php
     * @param array $array1 <p>
     * The first array.
     * </p>
     * @param array $array2 <p>
     * The second array.
     * </p>
     * @param array $_ [optional]
     * @param callable $value_compare_func <p>
     * The callback comparison function.
     * </p>
     * <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array an array containing all the values of <i>array1</i>
     * that are not present in any of the other arguments.
     */
    function array_udiff(array $array1, array $array2, array $_ = null, callable $value_compare_func)
    {

    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Computes the difference of arrays with additional index check
     * @link http://php.net/manual/en/function.array-diff-assoc.php
     * @param array $array1 <p>
     * The array to compare from
     * </p>
     * @param array $array2 <p>
     * An array to compare against
     * </p>
     * @param array $_ [optional] <p>
     * More arrays to compare against
     * </p>
     * @return array an array containing all the values from
     * <i>array1</i> that are not present in any of the other arrays.
     */
    function array_diff_assoc(array $array1, array $array2, array $_ = null)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the difference of arrays with additional index check, compares data by a callback function
     * @link http://php.net/manual/en/function.array-udiff-assoc.php
     * @param array $array1 <p>
     * The first array.
     * </p>
     * @param array $array2 <p>
     * The second array.
     * </p>
     * @param array $_ [optional]
     * @param callable $value_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array <b>array_udiff_assoc</b> returns an array
     * containing all the values from <i>array1</i>
     * that are not present in any of the other arguments.
     * Note that the keys are used in the comparison unlike
     * <b>array_diff</b> and <b>array_udiff</b>.
     * The comparison of arrays' data is performed by using an user-supplied
     * callback. In this aspect the behaviour is opposite to the behaviour of
     * <b>array_diff_assoc</b> which uses internal function for
     * comparison.
     */
    function array_udiff_assoc(array $array1, array $array2, array $_ = null, callable $value_compare_func)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the difference of arrays with additional index check which is performed by a user supplied callback function
     * @link http://php.net/manual/en/function.array-diff-uassoc.php
     * @param array $array1 <p>
     * The array to compare from
     * </p>
     * @param array $array2 <p>
     * An array to compare against
     * </p>
     * @param array $_ [optional] <p>
     * More arrays to compare against
     * </p>
     * @param callable $key_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @return array an array containing all the entries from
     * <i>array1</i> that are not present in any of the other arrays.
     */
    function array_diff_uassoc(array $array1, array $array2, array $_ = null, callable $key_compare_func)
    {

    }

    /**
     * (PHP 5)<br/>
     * Computes the difference of arrays with additional index check, compares data and indexes by a callback function
     * @link http://php.net/manual/en/function.array-udiff-uassoc.php
     * @param array $array1 <p>
     * The first array.
     * </p>
     * @param array $array2 <p>
     * The second array.
     * </p>
     * @param array $_ [optional]
     * @param callable $value_compare_func <p>
     * The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
     * </p>
     * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
     * @param callable $key_compare_func <p>
     * The comparison of keys (indices) is done also by the callback function
     * <i>key_compare_func</i>. This behaviour is unlike what
     * <b>array_udiff_assoc</b> does, since the latter compares
     * the indices by using an internal function.
     * </p>
     * @return array an array containing all the values from
     * <i>array1</i> that are not present in any of the other
     * arguments.
     */
    function array_udiff_uassoc(array $array1, array $array2, array $_ = null, callable $value_compare_func, callable $key_compare_func)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.4, PHP 5)<br/>
     * Calculate the sum of values in an array
     * @link http://php.net/manual/en/function.array-sum.php
     * @param array $array <p>
     * The input array.
     * </p>
     * @return number the sum of values as an integer or float.
     */
    function array_sum(array $array)
    {

    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Calculate the product of values in an array
     * @link http://php.net/manual/en/function.array-product.php
     * @param array $array <p>
     * The array.
     * </p>
     * @return number the product as an integer or float.
     */
    function array_product(array $array)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.6, PHP 5)<br/>
     * Filters elements of an array using a callback function
     * @link http://php.net/manual/en/function.array-filter.php
     * @param array $array <p>
     * The array to iterate over
     * </p>
     * @param callable $callback [optional] <p>
     * The callback function to use
     * </p>
     * <p>
     * If no <i>callback</i> is supplied, all entries of
     * <i>array</i> equal to <b>FALSE</b> (see
     * converting to
     * boolean) will be removed.
     * </p>
     * @return array the filtered array.
     */
    function array_filter(array $array, callable $callback = null)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.6, PHP 5)<br/>
     * Applies the callback to the elements of the given arrays
     * @link http://php.net/manual/en/function.array-map.php
     * @param callable $callback <p>
     * Callback function to run for each element in each array.
     * </p>
     * @param array $array1 <p>
     * An array to run through the <i>callback</i> function.
     * </p>
     * @param array $_ [optional] <p>
     * Variable list of array arguments to run through the
     * <i>callback</i> function.
     * </p>
     * @return array an array containing all the elements of <i>array1</i>
     * after applying the <i>callback</i> function to each one.
     */
    function array_map(callable $callback, array $array1, array $_ = null)
    {

    }

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Split an array into chunks
     * @link http://php.net/manual/en/function.array-chunk.php
     * @param array $array <p>
     * The array to work on
     * </p>
     * @param int $size <p>
     * The size of each chunk
     * </p>
     * @param bool $preserve_keys [optional] <p>
     * When set to <b>TRUE</b> keys will be preserved.
     * Default is <b>FALSE</b> which will reindex the chunk numerically
     * </p>
     * @return array a multidimensional numerically indexed array, starting with zero,
     * with each dimension containing <i>size</i> elements.
     */
    function array_chunk(array $array, $size, $preserve_keys = false)
    {

    }

    /**
     * (PHP 5)<br/>
     * Creates an array by using one array for keys and another for its values
     * @link http://php.net/manual/en/function.array-combine.php
     * @param array $keys <p>
     * Array of keys to be used. Illegal values for key will be
     * converted to string.
     * </p>
     * @param array $values <p>
     * Array of values to be used
     * </p>
     * @return array the combined array, <b>FALSE</b> if the number of elements
     * for each array isn't equal.
     */
    function array_combine(array $keys, array $values)
    {

    }

    /**
     * (PHP 4 &gt;= 4.0.7, PHP 5)<br/>
     * Checks if the given key or index exists in the array
     * @link http://php.net/manual/en/function.array-key-exists.php
     * @param mixed $key <p>
     * Value to check.
     * </p>
     * @param array $array <p>
     * An array with keys to check.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    function array_key_exists($key, array $array)
    {

    }

}
