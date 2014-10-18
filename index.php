<?php 

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use Consistent\Str;
use Consistent\Arr;

$string = 'hello world!';

echo '<h2>Some string functions...</h2><pre>';
echo $string . ' = ' . Str::length($string) . '<br>';
echo Str::to_upper($string);

$array  = array('first' => array('one key' => 'one value'), 'SECOND' => array('two key' => 'two value'));

echo '</pre><h2>Some array functions...</h2><pre>';

echo PHP_EOL . 'Arr::chunk:           ';print_r(Arr::chunk($array, 1));
echo PHP_EOL . 'Arr::change_key_case: ';print_r(Arr::change_key_case($array, CASE_UPPER));
$array_column = (function_exists('array_column'))
              ? Arr::column($array, 'one key')
              : '<em>Not supported! This is a PHP 5.5+ function</em>';
echo PHP_EOL . 'Arr::column:          ';print_r($array_column);

// neat laravel functions
echo PHP_EOL . 'Arr::get:             ';print_r(Arr::get('first', $array));
echo PHP_EOL . 'Arr::dot:             ';print_r(Arr::dot($array));
// note: only arr::get is made needle-haystack of these functions