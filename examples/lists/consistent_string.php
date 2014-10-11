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
        'method'    => 'icmp',
        'original'  => 'strcasecmp',
        'params'    => array('a', 'A'),
        'note'      => 'note: alias for Str::casecmp(). Everywhere prefixing a function with an "i" makes it case-insensitive, so why is this one prefixed with "case"?',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'length',
        'original'  => 'strlen',
        'params'    => array($this->string),
        'note'      => 'note: alias for Str::len(). Why use "len" instead of "length"? 3 characters less typing, but 10 times less readable.',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'reverse',
        'original'  => 'strrev',
        'params'    => array($this->string),
        'note'      => 'note: alias for Str::rev(). Why use "rev" instead of "reverse"? 4 characters less typing, but 10 times less readable.',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'token',
        'original'  => 'strtok',
        'params'    => array($this->string, ',.'),
        'note'      => 'note: alias for Str::tok(). Why use "tok" instead of "token"? 2 characters less typing, but 10 times less readable.',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'translate',
        'original'  => 'strtr',
        'params'    => array($this->string, ' ', 'X'),
        'note'      => 'note: alias for Str::tr(). Why use "tr" instead of "token"? 7 characters less typing, but 10 times less readable.',
        'note_type' => 'note'
    ),
    // maybe too far-fetched? -------------
    array(
        'method'    => 'chunk_split',
        'original'  => 'chunk_split',
        'params'    => array($this->string, 3),
        'note'      => 'note: alias for chunk_split(). There is a function str_split(). So why not a str_chunk_split()?',
        'note_type' => 'note'
    ),
    array(
        'method'    => 'chars_count',
        'original'  => 'count_chars',
        'params'    => array($this->string, 3),
        'note'      => 'note: alias for count_chars(). There is a function str_word_count(). So why not a str_chars_count()?',
        'note_type' => 'note'
    ),
);
