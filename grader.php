<?php

/***************************************************
 * This file is where the logic actually goes
 ***************************************************/
 

/**
 * 
 * 1.	Preg – Replace
a.	Punctuation
b.	Special characters
c.	XSS filter
d.	Move to LC
2.	Explode ()
a.	Spaces
3.	Release_array ()
4.	Array Intersect ()
a.	With Top 100 Static Array
5.	Cornt State array match
a.	Total array – array intersect
6.	Return: 
a.	$top100;
b.	$total = array cont
c.	$words
7.	Web Page:
a.	X% overused words


**/

$rawrelease = $_POST["textarea"];

?>
