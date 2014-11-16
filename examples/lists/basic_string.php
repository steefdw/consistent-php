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

use Consistent\Str;

return array(
    array(
        'method'    => 'chr',
        'original'  => 'strchr',
        'params'    => array(',', $this->string),
        'old_params' => array($this->string, ','),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'chr',
        'original'  => 'strchr',
        'params'    => array(',', $this->string, true),
        'old-params' => array($this->string, ',', true),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'rchr',
        'original'  => 'strrchr',
        'params'    => array(',', $this->string),
        'old_params' => array($this->string, ','),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'   => 'cmp',
        'original' => 'strcmp',
        'params'   => array('a', 'A'),
    ),
    array(
        'method'   => 'ncmp',
        'original' => 'strncmp',
        'params'   => array($this->string, 'p', 3),
    ),
    array(
        'method'   => 'casecmp',
        'original' => 'strcasecmp',
        'params'   => array('a', 'A'),
    ),
    array(
        'method'   => 'coll',
        'original' => 'strcoll',
        'params'   => array('a', 'A'),
    ),
    array(
        'method'   => 'get_csv',
        'original' => 'str_getcsv',
        'params'   => array($this->csv),
    ),
    array(
        'method'   => 'len',
        'original' => 'strlen',
        'params'   => array($this->string),
    ),
    array(
        'method'   => 'natcasecmp',
        'original' => 'strnatcasecmp',
        'params'   => array(Str::to_lower($this->string), $this->string),
    ),
    array(
        'method'   => 'natcmp',
        'original' => 'strnatcmp',
        'params'   => array(Str::to_lower($this->string), $this->string),
    ),
    array(
        'method'   => 'ncasecmp',
        'original' => 'strncasecmp',
        'params'   => array(Str::to_lower($this->string), $this->string, 6),
    ),
    array(
        'method'   => 'pad',
        'original' => 'str_pad',
        'params'   => array($this->string, 20, '-'),
    ),
    array(
        'method'    => 'pbrk',
        'original'  => 'strpbrk',
        'params'    => array(',', $this->string),
        'old_params' => array($this->string, ','),
        'note'      => 'note: reversed needle-haystack (has the alias Str::position_break()',
        'note_type' => 'warn'
    ),
    array(
        'method'    => 'pos',
        'original'  => 'strpos',
        'params'    => array('low', $this->string),
        'old_params' => array($this->string, 'low'),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'ipos',
        'original'  => 'stripos',
        'params'    => array('LOW', $this->string),
        'old_params' => array($this->string, 'LOW'),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'rpos',
        'original'  => 'strrpos',
        'params'    => array(',', $this->string),
        'old_params' => array($this->string, ','),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'ripos',
        'original'  => 'strripos',
        'params'    => array('O', $this->string),
        'old_params' => array($this->string, 'O'),
        'note'      => 'note: reversed needle-haystack',
        'note_type' => 'note'
    ),
    array(
        'method'   => 'repeat',
        'original' => 'str_repeat',
        'params'   => array($this->string, 2),
    ),
    array(
        'method'   => 'replace',
        'original' => 'str_replace',
        'params'   => array('low', 'LOW', $this->string),
    ),
    array(
        'method'   => 'ireplace',
        'original' => 'str_ireplace',
        'params'   => array('LOW', 'LOW', $this->string),
    ),
    array(
        'method'   => 'rev',
        'original' => 'strrev',
        'params'   => array($this->string),
    ),
    array(
        'method'   => 'rot13',
        'original' => 'str_rot13',
        'params'   => array($this->string),
    ),
    array(
        'method'    => 'shuffle',
        'original'  => 'str_shuffle',
        'params'    => array($this->string),
        'note'      => 'not the same, because it is shuffling the characters randomly',
        'note_type' => 'note'
    ),
    array(
        'method'   => 'split',
        'original' => 'str_split',
        'params'   => array($this->string, 5),
    ),
    array(
        'method'   => 'spn',
        'original' => 'strspn',
        'params'   => array($this->string, 'UP'),
    ),
    array(
        'method'   => 'cspn',
        'original' => 'strcspn',
        'params'   => array($this->string, 'l'),
    ),
    array(
        'method'    => 'string',
        'original'  => 'strstr',
        'params'    => array('low', $this->string),
        'old_params' => array($this->string, 'low'),
        'note'      => 'we can\'t call Str::str() :(<br><span style="color:green">note: reversed needle-haystack</span>',
        'note_type' => 'warn'
    ),
    array(
        'method'    => 'istring',
        'original'  => 'stristr',
        'params'    => array('LOW', $this->string),
        'old_params' => array($this->string, 'LOW'),
        'note'      => 'we can\'t call Str::str() :(<br><span style="color:green">note: reversed needle-haystack</span>',
        'note_type' => 'warn'
    ),
    array(
        'method'   => 'tok',
        'original' => 'strtok',
        'params'   => array($this->string, ',.'),
    ),
    array(
        'method'   => 'to_lower',
        'original' => 'strtolower',
        'params'   => array($this->string),
    ),
    array(
        'method'   => 'to_upper',
        'original' => 'strtoupper',
        'params'   => array($this->string),
    ),
    array(
        'method'   => 'to_time',
        'original' => 'strtotime',
        'params'   => array("now"),
    ),
    array(
        'method'   => 'tr',
        'original' => 'strtr',
        'params'   => array($this->string, ' ', 'X'),
    ),
    array(
        'method'   => 'word_count',
        'original' => 'str_word_count',
        'params'   => array($this->string),
    ),
);
