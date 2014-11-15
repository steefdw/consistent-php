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

/**
 * The regular string functions made consistent
 *
 * @author Steef
 */

namespace Consistent;

class Basic_Str {

    /**
     * (PHP 4, PHP 5)<br/>
     * Alias of <b>strstr</b>
     * @link http://php.net/manual/en/function.strchr.php
     * @param $needle
     * @param $haystack
     * @param $part [optional]
     */
    static function chr($needle, $haystack, $part = false)
    {
        return strchr($haystack, $needle, $part);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find the last occurrence of a character in a string
     * @link http://php.net/manual/en/function.strrchr.php
     * @param mixed $needle <p>
     * If <i>needle</i> contains more than one character,
     * only the first is used. This behavior is different from that of
     * <b>strstr</b>.
     * </p>
     * @param string $haystack <p>
     * The string to search in
     * </p>
     * <p>
     * If <i>needle</i> is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @return string This function returns the portion of string, or <b>FALSE</b> if
     * <i>needle</i> is not found.
     */
    static function rchr($needle, $haystack)
    {
        return strrchr($haystack, $needle);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Binary safe string comparison
     * @link http://php.net/manual/en/function.strcmp.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @return int &lt; 0 if <i>string1</i> is less than
     * <i>string2</i>; &gt; 0 if <i>string1</i>
     * is greater than <i>string2</i>, and 0 if they are
     * equal.
     */
    static function cmp($string1, $string2)
    {
        return strcmp($string1, $string2);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Binary safe string comparison of the first n characters
     * @link http://php.net/manual/en/function.strncmp.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @param int $len <p>
     * Number of characters to use in the comparison.
     * </p>
     * @return int &lt; 0 if <i>string1</i> is less than
     * <i>string2</i>; &gt; 0 if <i>string1</i>
     * is greater than <i>string2</i>, and 0 if they are
     * equal.
     */
    static function ncmp($string1, $string2, $len)
    {
        return strncmp($string1, $string2, $len);
    }

    /**
     * (PHP 4, PHP 5)<br/>
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
    static function casecmp($string1, $string2)
    {
        return strcasecmp($string1, $string2);
    }

    /**
     * (PHP 4 &gt;= 4.0.5, PHP 5)<br/>
     * Locale based string comparison
     * @link http://php.net/manual/en/function.strcoll.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @return int &lt; 0 if <i>string1</i> is less than
     * <i>string2</i>; &gt; 0 if
     * <i>string1</i> is greater than
     * <i>string2</i>, and 0 if they are equal.
     */
    static function coll($string1, $string2)
    {
        return strcoll($string1, $string2);
    }

    /**
     * (PHP 5 &gt;= 5.3.0)<br/>
     * Parse a CSV string into an array
     * @link http://php.net/manual/en/function.str-getcsv.php
     * @param string $input <p>
     * The string to parse.
     * </p>
     * @param string $delimiter [optional] <p>
     * Set the field delimiter (one character only).
     * </p>
     * @param string $enclosure [optional] <p>
     * Set the field enclosure character (one character only).
     * </p>
     * @param string $escape [optional] <p>
     * Set the escape character (one character only). Defaults as a backslash
     * (\)
     * </p>
     * @return array an indexed array containing the fields read.
     */
    static function get_csv($input, $delimiter = ",", $enclosure = '"', $escape = "\\")
    {
        return str_getcsv($input, $delimiter = ",", $enclosure = '"', $escape    = "\\");
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Get string length
     * @link http://php.net/manual/en/function.strlen.php
     * @param string $string <p>
     * The string being measured for length.
     * </p>
     * @return int The length of the <i>string</i> on success,
     * and 0 if the <i>string</i> is empty.
     */
    static function len($string)
    {
        return strlen($string);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Case insensitive string comparisons using a "natural order" algorithm
     * @link http://php.net/manual/en/function.strnatcasecmp.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @return int Similar to other string comparison functions, this one returns &lt; 0 if
     * <i>string1</i> is less than <i>string2</i> &gt;
     * 0 if <i>string1</i> is greater than
     * <i>string2</i>, and 0 if they are equal.
     */
    static function natcasecmp($string1, $string2)
    {
        return strnatcasecmp($string1, $string2);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * String comparisons using a "natural order" algorithm
     * @link http://php.net/manual/en/function.strnatcmp.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @return int Similar to other string comparison functions, this one returns &lt; 0 if
     * <i>string1</i> is less than <i>string2</i>; &gt;
     * 0 if <i>string1</i> is greater than
     * <i>string2</i>, and 0 if they are equal.
     */
    static function natcmp($string1, $string2)
    {
        return strnatcmp($string1, $string2);
    }

    /**
     * (PHP 4 &gt;= 4.0.2, PHP 5)<br/>
     * Binary safe case-insensitive string comparison of the first n characters
     * @link http://php.net/manual/en/function.strncasecmp.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @param int $len <p>
     * The length of strings to be used in the comparison.
     * </p>
     * @return int &lt; 0 if <i>string1</i> is less than
     * <i>string2</i>; &gt; 0 if <i>string1</i> is
     * greater than <i>string2</i>, and 0 if they are equal.
     */
    static function ncasecmp($string1, $string2, $len)
    {
        return strncasecmp($string1, $string2, $len);
    }

    /**
     * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
     * Pad a string to a certain length with another string
     * @link http://php.net/manual/en/function.str-pad.php
     * @param string $input <p>
     * The input string.
     * </p>
     * @param int $pad_length <p>
     * If the value of <i>pad_length</i> is negative,
     * less than, or equal to the length of the input string, no padding
     * takes place.
     * </p>
     * @param string $pad_string [optional] <p>
     * The <i>pad_string</i> may be truncated if the
     * required number of padding characters can't be evenly divided by the
     * <i>pad_string</i>'s length.
     * </p>
     * @param int $pad_type [optional] <p>
     * Optional argument <i>pad_type</i> can be
     * <b>STR_PAD_RIGHT</b>, <b>STR_PAD_LEFT</b>,
     * or <b>STR_PAD_BOTH</b>. If
     * <i>pad_type</i> is not specified it is assumed to be
     * <b>STR_PAD_RIGHT</b>.
     * </p>
     * @return string the padded string.
     */
    static function pad($input, $pad_length, $pad_string = " ", $pad_type = STR_PAD_RIGHT)
    {
        return str_pad($input, $pad_length, $pad_string, $pad_type);
    }

    /**
     * (PHP 5)<br/>
     * Alias for pbrk()<br/>
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
    static function pbrk($char_list, $haystack)
    {
        return strpbrk($haystack, $char_list);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find the position of the first occurrence of a substring in a string
     * @link http://php.net/manual/en/function.strpos.php
     * @param mixed $needle <p>
     * If <i>needle</i> is not a string, it is converted
     * to an integer and applied as the ordinal value of a character.
     * </p>
     * @param string $haystack <p>
     * The string to search in.
     * </p>
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from
     * the beginning of the string. Unlike <b>strrpos</b> and
     * <b>strripos</b>, the offset cannot be negative.
     * </p>
     * @return mixed the position of where the needle exists relative to the beginning of
     * the <i>haystack</i> string (independent of offset).
     * Also note that string positions start at 0, and not 1.
     * </p>
     * <p>
     * Returns <b>FALSE</b> if the needle was not found.
     */
    static function pos($needle, $haystack, $offset = 0)
    {
        return strpos($haystack, $needle, $offset);
    }

    /**
     * (PHP 5)<br/>
     * Find the position of the first occurrence of a case-insensitive substring in a string
     * @link http://php.net/manual/en/function.stripos.php
     * @param string $needle <p>
     * Note that the <i>needle</i> may be a string of one or
     * more characters.
     * </p>
     * @param string $haystack <p>
     * The string to search in.
     * </p>
     * <p>
     * If <i>needle</i> is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from
     * the beginning of the string. Unlike <b>strrpos</b> and
     * <b>strripos</b>, the offset cannot be negative.
     * </p>
     * @return int the position of where the needle exists relative to the beginnning of
     * the <i>haystack</i> string (independent of offset).
     * Also note that string positions start at 0, and not 1.
     * </p>
     * <p>
     * Returns <b>FALSE</b> if the needle was not found.
     */
    static function ipos($needle, $haystack, $offset = 0)
    {
        return stripos($haystack, $needle, $offset);
    }

    /**
     * (PHP 5)<br/>
     * Find the position of the last occurrence of a case-insensitive substring in a string
     * @link http://php.net/manual/en/function.strripos.php
     * @param string $needle <p>
     * If <i>needle</i> is not a string, it is converted
     * to an integer and applied as the ordinal value of a character.
     * </p>
     * @param string $haystack <p>
     * The string to search in.
     * </p>
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from the
     * beginning of the string. If the value is negative, search will instead start
     * from that many characters from the end of the string, searching backwards.
     * </p>
     * @return int the position where the needle exists relative to the beginnning of
     * the <i>haystack</i> string (independent of search direction
     * or offset).
     * Also note that string positions start at 0, and not 1.
     * </p>
     * <p>
     * Returns <b>FALSE</b> if the needle was not found.
     */
    static function ripos($needle, $haystack, $offset = 0)
    {
        return strripos($haystack, $needle, $offset);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find the position of the last occurrence of a substring in a string
     * @link http://php.net/manual/en/function.strrpos.php
     * @param string $needle <p>
     * If <i>needle</i> is not a string, it is converted
     * to an integer and applied as the ordinal value of a character.
     * </p>
     * @param string $haystack <p>
     * The string to search in.
     * </p>
     * @param int $offset [optional] <p>
     * If specified, search will start this number of characters counted from the
     * beginning of the string. If the value is negative, search will instead start
     * from that many characters from the end of the string, searching backwards.
     * </p>
     * @return int the position where the needle exists relative to the beginnning of
     * the <i>haystack</i> string (independent of search direction
     * or offset).
     * Also note that string positions start at 0, and not 1.
     * </p>
     * <p>
     * Returns <b>FALSE</b> if the needle was not found.
     */
    static function rpos($needle, $haystack, $offset = 0)
    {
        return strrpos($haystack, $needle, $offset);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Repeat a string
     * @link http://php.net/manual/en/function.str-repeat.php
     * @param string $input <p>
     * The string to be repeated.
     * </p>
     * @param int $multiplier <p>
     * Number of time the <i>input</i> string should be
     * repeated.
     * </p>
     * <p>
     * <i>multiplier</i> has to be greater than or equal to 0.
     * If the <i>multiplier</i> is set to 0, the function
     * will return an empty string.
     * </p>
     * @return string the repeated string.
     */
    static function repeat($input, $multiplier)
    {
        return str_repeat($input, $multiplier);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Replace all occurrences of the search string with the replacement string
     * @link http://php.net/manual/en/function.str-replace.php
     * @param mixed $search <p>
     * The value being searched for, otherwise known as the needle.
     * An array may be used to designate multiple needles.
     * </p>
     * @param mixed $replace <p>
     * The replacement value that replaces found <i>search</i>
     * values. An array may be used to designate multiple replacements.
     * </p>
     * @param mixed $subject <p>
     * The string or array being searched and replaced on,
     * otherwise known as the haystack.
     * </p>
     * <p>
     * If <i>subject</i> is an array, then the search and
     * replace is performed with every entry of
     * <i>subject</i>, and the return value is an array as
     * well.
     * </p>
     * @param int $count [optional] <p>
     * If passed, this will be set to the number of replacements performed.
     * </p>
     * @return mixed This function returns a string or an array with the replaced values.
     */
    static function replace($search, $replace, $subject, &$count = null)
    {
        return str_replace($search, $replace, $subject, $count);
    }

    /**
     * (PHP 5)<br/>
     * Case-insensitive version of <b>str_replace</b>.
     * @link http://php.net/manual/en/function.str-ireplace.php
     * @param mixed $search <p>
     * The value being searched for, otherwise known as the
     * needle. An array may be used to designate
     * multiple needles.
     * </p>
     * @param mixed $replace <p>
     * The replacement value that replaces found <i>search</i>
     * values. An array may be used to designate multiple replacements.
     * </p>
     * @param mixed $subject <p>
     * The string or array being searched and replaced on,
     * otherwise known as the haystack.
     * </p>
     * <p>
     * If <i>subject</i> is an array, then the search and
     * replace is performed with every entry of
     * <i>subject</i>, and the return value is an array as
     * well.
     * </p>
     * @param int $count [optional] <p>
     * If passed, this will be set to the number of replacements performed.
     * </p>
     * @return mixed a string or an array of replacements.
     */
    static function ireplace($search, $replace, $subject, &$count = null)
    {
        return str_ireplace($search, $replace, $subject, $count);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Reverse a string
     * @link http://php.net/manual/en/function.strrev.php
     * @param string $string <p>
     * The string to be reversed.
     * </p>
     * @return string the reversed string.
     */
    static function rev($string)
    {
        return strrev($string);
    }

    /**
     * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
     * Perform the rot13 transform on a string
     * @link http://php.net/manual/en/function.str-rot13.php
     * @param string $string <p>
     * The input string.
     * </p>
     * @return string the ROT13 version of the given string.
     */
    static function rot13($string)
    {
        return str_rot13($string);
    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Randomly shuffles a string
     * @link http://php.net/manual/en/function.str-shuffle.php
     * @param string $string <p>
     * The input string.
     * </p>
     * @return string the shuffled string.
     */
    static function shuffle($string)
    {
        return str_shuffle($string);
    }

    /**
     * (PHP 5)<br/>
     * Convert a string to an array
     * @link http://php.net/manual/en/function.str-split.php
     * @param string $string <p>
     * The input string.
     * </p>
     * @param int $split_length [optional] <p>
     * Maximum length of the chunk.
     * </p>
     * @return array If the optional <i>split_length</i> parameter is
     * specified, the returned array will be broken down into chunks with each
     * being <i>split_length</i> in length, otherwise each chunk
     * will be one character in length.
     * </p>
     * <p>
     * <b>FALSE</b> is returned if <i>split_length</i> is less than 1.
     * If the <i>split_length</i> length exceeds the length of
     * <i>string</i>, the entire string is returned as the first
     * (and only) array element.
     */
    static function split($string, $split_length = 1)
    {
        return str_split($string, $split_length);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Finds the length of the initial segment of a string consisting
      entirely of characters contained within a given mask.
     * @link http://php.net/manual/en/function.strspn.php
     * @param string $subject <p>
     * The string to examine.
     * </p>
     * @param string $mask <p>
     * The list of allowable characters.
     * </p>
     * @param int $start [optional] <p>
     * The position in <i>subject</i> to
     * start searching.
     * </p>
     * <p>
     * If <i>start</i> is given and is non-negative,
     * then <b>strspn</b> will begin
     * examining <i>subject</i> at
     * the <i>start</i>'th position. For instance, in
     * the string 'abcdef', the character at
     * position 0 is 'a', the
     * character at position 2 is
     * 'c', and so forth.
     * </p>
     * <p>
     * If <i>start</i> is given and is negative,
     * then <b>strspn</b> will begin
     * examining <i>subject</i> at
     * the <i>start</i>'th position from the end
     * of <i>subject</i>.
     * </p>
     * @param int $length [optional] <p>
     * The length of the segment from <i>subject</i>
     * to examine.
     * </p>
     * <p>
     * If <i>length</i> is given and is non-negative,
     * then <i>subject</i> will be examined
     * for <i>length</i> characters after the starting
     * position.
     * </p>
     * <p>
     * If <i>length</i>is given and is negative,
     * then <i>subject</i> will be examined from the
     * starting position up to <i>length</i>
     * characters from the end of <i>subject</i>.
     * </p>
     * @return int the length of the initial segment of <i>subject</i>
     * which consists entirely of characters in <i>mask</i>.
     */
    static function spn($subject, $mask, $start = null, $length = false)
    {
        return ($length === false) ? strspn($subject, $mask, $start) : strspn($subject, $mask, $start, $length);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find length of initial segment not matching mask
     * Consistency TODO: sounds like needle/haystack params are reversed?
     *
     * @link http://php.net/manual/en/function.strcspn.php
     * @param string $string1 <p>
     * The first string.
     * </p>
     * @param string $string2 <p>
     * The second string.
     * </p>
     * @param int $start [optional] <p>
     * The start position of the string to examine.
     * </p>
     * @param int $length [optional] <p>
     * The length of the string to examine.
     * </p>
     * @return int the length of the segment as an integer.
     */
    static function cspn($string1, $string2, $start = null, $length = false)
    {
        // NOTE: you can't pass $length = null to strcspn().... how very consistent when it's
        // strcspn ($string1, $string2, $start = null, $length = null)
        return ($length === false) ? strcspn($string1, $string2, $start) : strcspn($string1, $string2, $start, $length);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find the first occurrence of a string
     * @link http://php.net/manual/en/function.strstr.php
     * @param mixed $needle <p>
     * If <i>needle</i> is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @param string $haystack <p>
     * The input string.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If <b>TRUE</b>, <b>strstr</b> returns
     * the part of the <i>haystack</i> before the first
     * occurrence of the <i>needle</i> (excluding the needle).
     * </p>
     * @return string the portion of string, or <b>FALSE</b> if <i>needle</i>
     * is not found.
     */
    static function string($needle, $haystack, $before_needle = false)
    {
        return strstr($haystack, $needle, $before_needle);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Case-insensitive <b>strstr</b>
     * @link http://php.net/manual/en/function.stristr.php
     * @param mixed $needle <p>
     * If <i>needle</i> is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @param string $haystack <p>
     * The string to search in
     * </p>
     * @param bool $before_needle [optional] <p>
     * If <b>TRUE</b>, <b>stristr</b>
     * returns the part of the <i>haystack</i> before the
     * first occurrence of the <i>needle</i> (excluding needle).
     * </p>
     * @return string the matched substring. If <i>needle</i> is not
     * found, returns <b>FALSE</b>.
     */
    static function istring($needle, $haystack, $before_needle = false)
    {
        return stristr($haystack, $needle, $before_needle);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Tokenize string
     * @link http://php.net/manual/en/function.strtok.php
     * @param string $string <p>
     * The string being split up into smaller strings (tokens).
     * </p>
     * @param string $token <p>
     * The delimiter used when splitting up <i>string</i>.
     * </p>
     * @return string A string token.
     */
    static function tok($string, $token)
    {
        return strtok($string, $token);
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
    static function to_lower($string)
    {
        return strtolower($string);
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
    static function to_upper($string)
    {
        return strtoupper($string);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Parse about any English textual datetime description into a Unix timestamp
     * @link http://php.net/manual/en/function.strtotime.php
     * @param string $time <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
     * @param int $now [optional] <p>
     * The timestamp which is used as a base for the calculation of relative
     * dates.
     * </p>
     * @return int a timestamp on success, <b>FALSE</b> otherwise. Previous to PHP 5.1.0,
     * this function would return -1 on failure.
     */
    static function to_time($time, $now = false)
    {
        if($now == false)
            $now = time();

        return strtotime($time, $now);
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
    static function tr($str, $from, $to)
    {
        return strtr($str, $from, $to);
    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Return information about words used in a string
     * @link http://php.net/manual/en/function.str-word-count.php
     * @param string $string <p>
     * The string
     * </p>
     * @param int $format [optional] <p>
     * Specify the return value of this function. The current supported values
     * are:
     * 0 - returns the number of words found
     * @param string $charlist [optional] <p>
     * A list of additional characters which will be considered as 'word'
     * </p>
     * @return mixed an array or an integer, depending on the
     * <i>format</i> chosen.
     */
    static function word_count($string, $format = 0, $charlist = null)
    {
        return str_word_count($string, $format, $charlist);
    }

}
