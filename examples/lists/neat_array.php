<?php

/*
 * Copyright (C) 2014 Steef
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

use Consistent\Arr;
use Consistent\Str;

return array(
    array(
        'method'    => 'add',
        'original'  => '(new)',
        'params'    => array($this->array, 'new key', 'new value'),
    ),
    array(
        'method'    => 'divide',
        'original'  => '(new)',
        'params'    => array($this->array),
    ),
    array(
        'method'    => 'dot',
        'original'  => '(new)',
        'params'    => array($this->array),
    ),
    array(
        'method'    => 'except',
        'original'  => '(new)',
        'params'    => array($this->array, array('TWO', 'keys to remove')),
    ),
    /*
    array(
        'method'    => 'fetch',
        'original'  => '(new)',
        'params'    => array($this->array, 'one.one key'),
    ),*/
    array(
        'method'    => 'first',
        'original'  => '(new)',
        'params'    => array($this->simple_array, function($key, $value)
        {
            return Str::pos('o', $value) !== false;
        }),
    ),
    array(
        'method'    => 'last',
        'original'  => '(new)',
        'params'    => array($this->simple_array, function($key, $value)
        {
            return Str::pos('o', $value) !== false;
        }),
    ),
);
