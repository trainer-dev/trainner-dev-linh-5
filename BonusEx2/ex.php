<?php
/**
 * Created by PhpStorm.
 * User: linhngoc
 * Date: 29/03/2019
 * Time: 14:15
 */

$string = " A paragraph is a unit of writing in a larger body of work. A paragraph expresses a particular topic or theme.";
$substr = "a";

echo substr_count($string,$substr);
echo "<br>";
echo strlen($string);