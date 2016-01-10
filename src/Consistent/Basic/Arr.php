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

}
