<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Function Tests - Consistent PHP</title>
    <style>
        html, body {font-family: "Trebuchet MS","Tahoma","arial","sans-serif";}
        i {color:green;}
        em{color:red;}
        h1,h2,h3 {font: 2.5em/0.8em;}
        h1 {font-weight:bold;font-size:4em;margin:0;}
        h2 {border-bottom: 2px solid #444;}
        table {border-collapse: separate;border-spacing: 0;border-right: 1px solid #ccc;}
        td {border-bottom: 1px solid #ccc;border-left: 1px solid #ccc;padding:2px 5px;}
        thead td {background: #ccc; font-weight: bold;}
        thead td.title {background: #fff;}
        tbody td {font-size: 13px;font-family: Courier, monospace;}
        tr.green td:first-child {border-left: 5px solid green;}
        tr.orange td:first-child {border-left: 5px solid orange;}
        tr.red td:first-child {border-left: 5px solid red;}
        tr.red td:last-child {border-bottom-color: red;}
        td.note {color:green;}
        td.warn {color:red;}
        small {color: #888;}
        span {color:#00b;}
        span.sep {color:#070;font-weight:bold;}
    </style>
</head>
<body>
    <h1>Consistent PHP <small>Function Tests</small></h1>
<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . DIRECTORY_SEPARATOR . 'examples'. DIRECTORY_SEPARATOR .'Demo.php';

$demo = new Demo();
?>
    <table>
<?php foreach($demo->functions as $functions): ?>
        <thead>
            <tr>
                <td colspan="4" class="title">
                    <h2>Testing <?php echo $functions->title ?> functions</h2>
                </td>
            </tr>
            <tr>
                <td>Original</td>
                <td>Command</td>
                <td>Result</td>
                <td>Note</td>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($functions->methods as $test)
    {
        $arguments = array();
        foreach($test['params'] as $argument)
        {
            $arguments[] = (!is_object($argument) AND ! is_array($argument)) ? $argument : gettype($argument);
        }

        $params = implode('\'</span><span class="sep">,</span> <span>\'', $arguments);
        $class  = ($functions->title == 'Neat String') ? 'none' : $demo->test($functions->class, $test);
?>
            <tr class="<?php echo $class ?>">
                <td><?php echo $test['original'] ?></td>
                <td>
                    <?php echo $functions->class. '::' .$test['method'] ?>
                    <span class="sep">(</span><span>'<?php echo $params ?>'</span><span class="sep">)</span>
                </td>
                <td>
<?php
        if(!function_exists($test['original']) AND $test['original'] !== '(new)')
        {
            echo '<span style="color:#f60">your PHP version is too old for this function: ' . $test['original'] . '()</span>';
        }
        else
        {
            $demo->result($functions->class, $test);
        }
?>
                </td>
<?php
    }
?>
<?php endforeach ?>
        </tbody>
    </table>
    <br>
    2014 &copy; Steef de Winter
</body>
</html>