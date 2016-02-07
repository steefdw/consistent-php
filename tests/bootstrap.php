<?php
require_once dirname(__DIR__) . '/../../autoload.php';

if(function_exists('arr') === false)
{
    function Arr(&$array = [])
    {
        return new \Consistent\Arr($array);
    }
}