<?php
require 'test1.php';
require 'test2.php';
echo test1::last_word("")."<br/>";
echo test1::extract_string("The quick [brown fox] [dark horse].")."<br/>";
$test2 = new test2();
//echo $test2->is_power(1.4884, 1.22);
echo $test2->is_power(2, 100)."<br/>";
echo $test2->format_number("o874.5pd&*2,")."<br/>";
echo $test2->sum_digits("o874.5pd&*2")."<br/>";
echo $test2->sum_digits("o");
?>
