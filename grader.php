<?php

/***************************************************
 * This file is where the logic actually goes
 ***************************************************/

// import our words

require('static-words-array.php');

/**


a.	$top100;
b.	$total = array cont
c.	$words
7.	Web Page:
a.	X% overused words


**/

// pull in the release

$rawrelease = $_POST['textarea'];

// sanitize against obvious hacks

$roughrelease= htmlspecialchars($rawrelease);

// kill off punctuation and such

$patterns = array();
$patterns[0] = "\'";
$patterns[1] = "\!";
$patterns[2] = "\(";
$patterns[3] = "\)";
$replacements = array();
$replacements[3] = ' ';
$replacements[2] = ' ';
$replacements[1] = ' ';
$replacements[0] = ' ';

$cleanrelease= preg_replace($patterns, $replacements, $roughrelease);

// explode to an array

$releasearray = array explode ( string " " , string $cleanrelease );

// write intersect between two arrays

$result = array_intersect($releasearray, $top50);

// count the arrays

$usedwords = count($result);
$totalwords = count($releasearray);

$wordusage = ( $usedwords / $totalwords ) * 100;

$wordsused = natcasesort ($result);

// iterate through array and turn into nice list

foreach($usedwords as $value) {
  $wordslist .= "<li>".$value."</li>";
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<p>Top Overused Words</p>
<p>In your press release, you achieved a score of <?=$wordusage; ?>%</p>
<p>Out of <?=$totalwords; ?> words total, you used <?=$usedwords; ?> 'overused' words.</p>
<p>The words you used include:</p>
<ul>
<?=$wordslist; ?>
</ul>
<p>For more information, please click here.</p>
</body>
</html>
