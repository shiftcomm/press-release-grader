<?php

/***************************************************
Input form, HTML and PHP goes here, POST target to grader.php
****************************************************/

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="grader.php" method="post" name="form1" id="form1">
  <p>
    <label for="textarea">Text Area:</label>
    <textarea name="textarea" cols="60" rows="20" id="textarea"></textarea>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Here's my press release, bring the pain">
  </p>
</form>
</body>
</html>
