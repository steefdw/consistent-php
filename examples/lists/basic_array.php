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

return array(
    array(
        'method'    => 'change_key_case',
        'original'  => 'array_change_key_case',
        'params'    => array($this->array, CASE_LOWER),
    ),
    array(
        'method'    => 'change_key_case',
        'original'  => 'array_change_key_case',
        'params'    => array($this->array, CASE_UPPER),
    ),
    array(
        'method'    => 'chunk',
        'original'  => 'array_chunk',
        'params'    => array($this->simple_array, 2),
    ),
    array(
        'method'    => 'column',
        'original'  => 'array_column',
        'params'    => array($this->array, 'two key'),
    ),

);
