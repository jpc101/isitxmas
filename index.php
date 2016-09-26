<!DOCTYPE html>
<html lang="en"> 
<head> 
<meta charset="utf-8">
<title>Is it Christmas Today?</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="whychristmas?com / James Cooper">
<meta name="description" content="Find out if it's Christmas somewhere in the world today!">
<link rel="apple-touch-icon" href="i152.png">
<meta name="msapplication-TileImage" content="i144.png">
<meta name="msapplication-TileColor" content="#3F51B5">
<link rel="manifest" href="manifest.json">
<link rel="stylesheet" href="s.css">
</head>
<body>
<h1>Is it Christmas Today?</h1>
<?php
$today = gmdate("md");

if ($today == "0106") {
echo "<h2 class='big'>Yes!</h2>
<p class='where'>In the Armenian Apostolic Church.</p>";
} 
elseif ($today == "0107") {
echo "<h2 class='big'>Yes!</h2>
<p class='where'>In many Orthodox Churches (Russia, Serbia, Jerusalem, Ukraine, Ethiopia), <br>in some Greek Orthodox Churches and for some Greek Catholics.</p>";
}
elseif ($today == "1225") {
echo "<h2 class='big'>Yes!</h2>
<p class='where'>For most of the world!<br>(which uses the Gregorian Calendar)</p>";
}
else {
echo "<h2 class='big'>No!</h2>";
}
?>
<h3><a href="//www.whychristmas.com/customs/whenchristmasiscelebrated.shtml">Find out when, where and why Christmas is celebrated on www.whychristmas.com!</a></h3>
<p id="foot">* the date detector on this site uses GMT to get the date!<br><br>
&copy;2016 <a href="//thechristmas.expert/">James Cooper</a></p>
</body>
</html>