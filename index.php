<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina web com php</title>
</head>
<body>
    <h1>Olá</h1>
    
</body><?php
$t = date("d");

if ($t < "11") {
  echo "Have a good day!";
} elseif ($t < "19") {
  echo "Have a good night!";
}
?>

<?php
echo "<br>" . "Today is " . "<br>" . date("Y/m/d") . "<br>";
echo "Today is " . "<br>" . date("Y.m.d") . "<br>";
echo "Today is " . "<br>" . date("Y-m-d") . "<br>";
echo "Today is " . "<br>" .date("l");
?>

<?php
date_default_timezone_set("America/manaus");
echo "The time is " . date("H:i:sa");
?>
</html>