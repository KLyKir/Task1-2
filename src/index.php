<?php
require 'test1.php';
require 'test2.php';
echo "Task 1". "<br/>";
echo "Number of last word: " . test1::last_word("Hello world")."<br/>";
echo "Extract string: " . test1::extract_string("The quick [brown fox] [dark horse].")."<br/>";
echo "Task 2" . "<br/>";
$test2 = new test2();
echo "Is power: " . $test2->is_power(2, 100)."<br/>";
echo "Format number: " . $test2->format_number("o874.5pd&*2,")."<br/>";
echo "Sum of digits: " . $test2->sum_digits("o874.5pd&*2")."<br/>";
?>

