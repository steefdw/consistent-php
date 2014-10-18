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
 * Description of Demo
 *
 * @author Steef
 */

use Consistent\Str;
use Consistent\Arr;

class Demo {

    public $string = 'UP, low, oK';
    public $array  = array('one' => array('one key' => 'one value'), 'TWO' => array('two key' => 'two value'));
    public $csv    = "test,1,\"B,C,D\",\"with a escape\\\\\", \"with an enter\\n\", \"with an enclusure enclosure\\\"\"";

    public function __construct()
    {
        return $this;
    }

    public function show_functions()
    {
        $basic_array_functions       = include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'basic_array.php';
        $basic_string_functions      = include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'basic_string.php';
        $consistent_string_functions = include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'consistent_string.php';
        $neat_string_functions       = include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'neat_string.php';

        $this->results('Basic Array',       'Arr', $basic_array_functions);
        $this->results('Basic String',      'Str', $basic_string_functions);
        $this->results('Consistent String', 'Str', $consistent_string_functions);
        $this->results('Neat String',       'Str', $neat_string_functions);
    }

    function result($class, $test)
    {
        $class = 'Consistent\\'.$class;
        $result = call_user_func_array(array($class, $test['method']), $test['params']);

        if(is_array($result))
            print_r($result);
        else
            echo $result;
    }

    function test($class, $test)
    {
        $class = 'Consistent\\'.$class;
        $old = call_user_func_array($test['original'], $test['params']);
        $new = call_user_func_array(array($class, $test['method']), $test['params']);

        return ($old == $new) ? 'green' : 'red';
    }

    function results($type, $class, $methods)
    {
        echo '<h2>Testing ' .$type. ' functions</h2>'.PHP_EOL;
        echo '<table><thead><tr><td>Original</td><td>Command</td><td>Result</td><td>Note</td></tr></thead><tbody>'.PHP_EOL;
        foreach($methods as $test)
        {
            $params = implode('\'</span><span class="sep">,</span> <span>\'', $test['params']);
            
            echo '<tr class="' .(($type == 'Neat String') ? 'none' : $this->test($class, $test)). '">'
            . '<td>' .$test['original']. '</td>'
            . '<td>' .$class. '::' .$test['method']
                . '<span class="sep">(</span><span>\'' .$params. '\'</span><span class="sep">)</span></td>'
            . '<td>';
            $this->result($class, $test);

            echo '</td>';
            echo isset($test['note'])
                 ? '<td class="' .$test['note_type']. '">' .$test['note']. '</td>'
                 : '<td></td>';
        }
        echo '</tbody></table>'.PHP_EOL;
    }
}
