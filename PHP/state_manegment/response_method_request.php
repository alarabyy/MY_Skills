<?php
session_start();

echo "==================================";
echo "<br>";

$name1 = $_REQUEST["name"];
$age1 = $_REQUEST["age"];


echo "welcome $name1 & your age = $age1";

echo "<br>==================================<br>";

echo "get: <br>";
var_dump($_GET);

echo "<br>==================================<br>";

echo "post: <br>";
var_dump($_POST);
echo "<br>==================================<br>";
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
///this is cookies 
echo "cookies:";
$name = $_REQUEST["name"];
$age = $_REQUEST["age"];

setcookie("name_cookies",$name , time()+1*60*60*24*365 );

////// setcookie("name",null);     //to remove cookies
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
///this is session
///////////////////// echo "_SESSION:";



$_SESSION["name"]=$name;
$_SESSION["age"]=$age;
echo "<br>==================================<br>";

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="response_cookies.php">page3</a>
</body>
</html>
<?php
echo "<br>==================================<br>";
echo "<br>==================================<br>";
echo "<br>==================================<br>";
echo "<br>==================================<br>";
echo "<br>==================================<br>";
echo "<br>==================================<br>";

echo $_SERVER['REQUEST_METHOD'];
echo "<br>==================================<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>==================================<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>==================================<br>";
var_dump($_SERVER);
?>