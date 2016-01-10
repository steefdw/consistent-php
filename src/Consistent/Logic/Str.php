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
 * Added string functions for extra consistency
 * For the regular string functions made consistent, see the Basic_String class
 *
 * @author steef
 */

namespace Consistent;

class Logic_Str extends Basic_Str {

    /**
     * (PHP 4, PHP 5)<br/>
     * Added for consistency, alias for Str::casecmp()
     * Binary safe case-insensitive string comparison
     * @link http://php.net/manual/en/function.strcasecmp.php
     * @param string $string1 <p>
     * The first string
     * </p>
     * @param string $string2 <p>
     * The second string
     * </p>
     * @return int &lt; 0 if <i>string1</i> is less than
     * <i>string2</i>; &gt; 0 if <i>string1</i>
     * is greater than <i>string2</i>, and 0 if they are
     * equal.
     */
    static function icmp($string1, $string2)
    {
        return strcasecmp($string1, $string2);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Get string length
     * Added for predictable names, alias for Str::len()
     *
     * @link http://php.net/manual/en/function.strlen.php
     * @param string $string <p>
     * The string being measured for length.
     * </p>
     * @return int The length of the <i>string</i> on success,
     * and 0 if the <i>string</i> is empty.
     */
    static function length($string)
    {
        return strlen($string);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Tokenize string
     * Added for consistency, alias for Str::tok()
     * @link http://php.net/manual/en/function.strtok.php
     * @param string $string <p>
     * The string being split up into smaller strings (tokens).
     * </p>
     * @param string $token <p>
     * The delimiter used when splitting up <i>string</i>.
     * </p>
     * @return string A string token.
     */
    static function token($string, $token)
    {
        return strtok($string, $token);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Reverse a string
     * Added for predictable names, alias for Str::rev()
     *
     * @link http://php.net/manual/en/function.strrev.php
     * @param string $string <p>
     * The string to be reversed.
     * </p>
     * @return string the reversed string.
     */
    static function reverse($string)
    {
        return strrev($string);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Split a string into smaller chunks
     * @link http://php.net/manual/en/function.chunk-split.php
     * @param string $body <p>
     * The string to be chunked.
     * </p>
     * @param int $chunklen [optional] <p>
     * The chunk length.
     * </p>
     * @param string $end [optional] <p>
     * The line ending sequence.
     * </p>
     * @return string the chunked string.
     */
    static function chunk_split($body, $chunklen = 76, $end = "\r\n")
    {
        return chunk_split($body, $chunklen, $end);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Translate characters or replace substrings
     * @link http://php.net/manual/en/function.strtr.php
     * @param string $str <p>
     * The string being translated.
     * </p>
     * @param string $from <p>
     * The string being translated to <i>to</i>.
     * </p>
     * @param string $to <p>
     * The string replacing <i>from</i>.
     * </p>
     * @return string the translated string.
     * </p>
     * <p>
     * If <i>replace_pairs</i> contains a key which
     * is an empty string (""),
     * <b>FALSE</b> will be returned. If the <i>str</i> is not a scalar
     * then it is not typecasted into a string, instead a warning is raised and
     * <b>NULL</b> is returned.
     */
    static function translate($str, $from, $to)
    {
        return strtr($str, $from, $to);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return information about characters used in a string
     * @link http://php.net/manual/en/function.count-chars.php
     * @param string $string <p>
     * The examined string.
     * </p>
     * @param int $mode [optional] <p>
     * See return values.
     * </p>
     * @return mixed Depending on <i>mode</i>
     * <b>count_chars</b> returns one of the following:
     * 0 - an array with the byte-value as key and the frequency of
     * every byte as value.
     * 1 - same as 0 but only byte-values with a frequency greater
     * than zero are listed.
     * 2 - same as 0 but only byte-values with a frequency equal to
     * zero are listed.
     * 3 - a string containing all unique characters is returned.
     * 4 - a string containing all not used characters is returned.
     */
    static function chars_count($string, $mode = 0)
    {
        return count_chars($string, $mode);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string lowercase
     * @link http://php.net/manual/en/function.strtolower.php
     * @param string $string <p>
     * The input string.
     * </p>
     * @return string the lowercased string.
     */
    static function lower($string, $position = false)
    {
        if($position == 'first')
            return lcfirst($string);

        if($position == 'words')
        {
            $words      = explode(' ', $string);
            $new_string = array();

            foreach($words AS $word)
            {
                $new_string[] = lcfirst($word);
            }

            return implode(' ', $new_string);
        }

        return strtolower($string);
    }

    /**
     * (PHP 5)<br/>
     * Alias for pbrk() AND Str::strpbrk()<br/>
     * Search a string for any of a set of characters
     * @link http://php.net/manual/en/function.strpbrk.php
     * @param string $char_list <p>
     * This parameter is case sensitive.
     * </p>
     * @param string $haystack <p>
     * The string where <i>char_list</i> is looked for.
     * </p>
     * @return string a string starting from the character found, or <b>FALSE</b> if it is
     * not found.
     */
    static function position_break($char_list, $haystack)
    {
        return pbrk($haystack, $char_list);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string uppercase
     * @link http://php.net/manual/en/function.strtoupper.php
     * @param string $string <p>
     * The input string.
     * </p>
     * @return string the uppercased string.
     */
    static function upper($string, $position = false)
    {
        if($position == 'first')
            return ucfirst($string);

        if($position == 'words')
            return ucwords($string);

        return strtoupper($string);
    }

}
