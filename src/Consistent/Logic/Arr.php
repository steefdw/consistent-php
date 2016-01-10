<?php

/*
 * Copyright (C) 2014 steef
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

class Logic_Arr extends Basic_Arr {

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Changes the case of all keys in an array to uppercase
     * @link http://php.net/manual/en/function.array-change-key-case.php
     * @return array an array with its keys uppercased, or <b>FALSE</b> if
     * <i>array</i> is not an array.
     */
    public function upper()
    {
        return array_change_key_case($this->array, CASE_UPPER);
    }

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Changes the case of all keys in an array to lowercase
     * @link http://php.net/manual/en/function.array-change-key-case.php
     * @return array an array with its keys lowercased, or <b>FALSE</b> if
     * <i>array</i> is not an array.
     */
    public function lower()
    {
        return array_change_key_case($this->array, CASE_LOWER);
    }

}
