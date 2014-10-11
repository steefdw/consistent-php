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

return array(
    array(
        'method'    => 'lower',
        'original'  => 'strtolower',
        'params'    => array('ABC DEF'),
        'note'      => 'note: alias for Str::to_lower(). The meaning of "Str::lower(ABC)" is clear enough. No need for prefixing it with "to_"',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'lower',
        'original'  => 'lcfirst',
        'params'    => array('ABC DEF', 'first'),
        'note'      => 'note: extended Str::lower() with the option "first".',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'lower',
        'original'  => '(new)',
        'params'    => array('ABC DEF', 'words'),
        'note'      => 'note: extended Str::lower() with the option "words". Now we can Str::lower(ABC DEF, \'words\') to get "aBC dEF"',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'upper',
        'original'  => 'strtoupper',
        'params'    => array('abc def'),
        'note'      => 'note: alias for Str::to_upper(). The meaning of "Str::upper(abc)" is clear enough. No need for prefixing it with "to_"',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'upper',
        'original'  => 'ucfirst',
        'params'    => array('abc def', 'first'),
        'note'      => 'note: extended Str::lower() with the option "first".',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'upper',
        'original'  => 'ucwords',
        'params'    => array('abc def', 'words'),
        'note'      => 'note: extended Str::lower() with the option "words".',
        'note_type' => 'note'
    ),
);
