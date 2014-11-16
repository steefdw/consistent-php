<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Consistent PHP</title>
    <style>
        i {color:green;}
        em{color:red;}
        h1,h2,h3 {font: 2.5em/0.8em "Trebuchet MS","Tahoma","arial","sans-serif";}
        h1 {font-weight:bold;font-size:4em;margin:0;}
        h2 {border-bottom: 2px solid #444;}
        table {border-collapse: separate;border-spacing: 0;border-right: 1px solid #ccc;}
        td {border-bottom: 1px solid #ccc;border-left: 1px solid #ccc;padding:2px 5px;}
        thead td {background: #ccc; font-weight: bold;}
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
    <h1>Consistent PHP <small>Functions</small></h1>
<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . DIRECTORY_SEPARATOR . 'examples'. DIRECTORY_SEPARATOR .'Demo.php';

$demo = new Demo();

foreach($demo->functions as $functions)
{
    echo '<h2>' . $functions->title . ' functions</h2>' . PHP_EOL;
    echo '<table><thead><tr><td>Original</td><td>Command</td><td>Note</td></tr></thead><tbody>' . PHP_EOL;
    foreach($functions->methods as $test)
    {
        $arguments = array();
        foreach($test['params'] as $argument)
        {
            $arguments[] = (!is_object($argument) AND ! is_array($argument)) ? $argument : gettype($argument);
        }

        $params = implode('\'</span><span class="sep">,</span> <span>\'', $arguments);

        echo '<tr class="' . (($functions->title == 'Neat String') ? 'none' : $demo->test($functions->class, $test)) . '">'
        . '<td>' . $test['original'] . '</td>'
        . '<td>' . $functions->class . '::' . $test['method']
        . '<span class="sep">(</span><span>\'' . $params . '\'</span><span class="sep">)</span></td>';

        echo isset($test['note']) ? '<td class="' . $test['note_type'] . '">' . $test['note'] . '</td>' : '<td></td>';
    }
    echo '</tbody></table>' . PHP_EOL;
}
?>
</body>
</html>