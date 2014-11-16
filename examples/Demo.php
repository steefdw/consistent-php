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

class Demo {

    public $string        = 'UP, low, oK';
    public $array         = array('one' => array('one key' => 'one value'), 'TWO' => array('two key' => 'two value'));
    public $simple_array  = array('One', 'Two', 'Three', 'Four');
    public $csv           = "test,1,\"B,C,D\",\"with a escape\\\\\", \"with an enter\\n\", \"with an enclusure enclosure\\\"\"";
    public $functions;

    public function __construct()
    {
        $this->functions = array(
            'basic_array_functions'       => (object) array(
                'title'   => 'Basic Array',
                'class'   => 'Arr',
                'methods' => include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'basic_array.php'
            ),
            'basic_string_functions'      => (object) array(
                'title'   => 'Basic String',
                'class'   => 'Str',
                'methods' => include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'basic_string.php'
            ),
            'consistent_string_functions' => (object) array(
                'title'   => 'Consistent String',
                'class'   => 'Str',
                'methods' => include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'consistent_string.php'
            ),
            'neat_string_functions'       => (object) array(
                'title'   => 'Neat String',
                'class'   => 'Str',
                'methods' => include_once __DIR__ . DIRECTORY_SEPARATOR . 'lists' . DIRECTORY_SEPARATOR . 'neat_string.php'
            ),
        );

        return $this;
    }

    /**
     * Call the function and print out the results
     *
     * @param string $class
     * @param array $test
     */
    function result($class, $test)
    {
        $class = 'Consistent\\'.$class;
        $result = call_user_func_array(array($class, $test['method']), $test['params']);

        if(is_array($result))
            print_r($result);
        else
            echo $result;
    }

    /**
     * Show green on pass, red on fail, orange on 'function does not exist'
     * @param string $class
     * @param array $test
     * @return string 'green', 'red' or 'orange'
     */
    function test($class, $test)
    {
        if(!function_exists($test['original']))
            return 'orange';

        $class_name = 'Consistent\\'.$class;
        $old_params = (isset($test['old_params'])) ? $test['old_params'] : $test['params'];

        $old = call_user_func_array($test['original'], $old_params);
        $new = call_user_func_array(array($class_name, $test['method']), $test['params']);

        return ($old == $new) ? 'green' : 'red';
    }

    /**
     * Get the docblock from a class' method
     *
     * @param string $class
     * @param string $method
     * @param bool $clean
     * @return string
     */
    public function docblock($class, $method, $clean = true)
    {
        $reflection = new ReflectionMethod($class, $method);
        $docblock   = $reflection->getDocComment();

        if($clean)
            return $this->clean_block($docblock);

        return $docblock;
    }

    /**
     * Cleans the docblock from asterixes and creates a link from the URL in @link
     *
     * @param string $docblock
     * @return string
     */
    private function clean_block($docblock)
    {
        $doc = Str::replace(array('* ','/**','*/', '     '), '', $docblock);

        $clean = '<span class="summary">';
        foreach(explode("\n", $doc) as $line)
        {
            if(Str::pos('@link ', $line) === 0)
            {
                $link = Str::replace('@link ', '', $line);
                $line = '<br>@link <a href="' .$link. '">' .$link. '</a></span><span class="parameters">';
            }

            $clean .= trim($line);
        }

        $clean = Str::replace(array("\r\n", "\r"), '', $clean);

        return $clean;
    }

}
