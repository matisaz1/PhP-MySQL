<?php
$the_string = 'Shkolla Tefik';
$programming = 'Programming is not cool';
$another_string = 'Programming';

//echo strlen($the_string);
echo str_word_count($the_string);
echo str_replace ("not", "very", $programming);
echo strrev($another_string)
?>