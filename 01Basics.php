<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        echo"<br>";

<?php
define("PI",3.14);
echo "Hello world and this is printing from php ";
echo "<br>";

$variable1=15;
$variable2=6;


echo $variable1;
echo $variable2;
echo"<br>";
// echo $variable1+$variable2;

// operator in php
// Arithmetic operator
echo "The value of variable1 + variable2 =";
echo $variable1+$variable2;
echo "<br>";
echo "The value of variable1 - variable2 =";
echo $variable1 - $variable2;
echo "<br>";
echo "The value of variable1 * variable2 =";
echo $variable1 * $variable2;
echo "<br>";
echo "The value of variable1 / variable2 =";
echo $variable1 / $variable2;
echo "<br>";
// Assignment operator
$newVar =$variable1;
// $newVar +=2;
// $newVar -=2;
$newVar *=2;
// $newVar /=2;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";
// Comparison operator
echo "The value of 1==4 is";
echo  var_dump(1==4);
echo "<br>";
echo "The value of 1!=4 is";
echo  var_dump(1!=4);
echo "<br>";
echo "The value of 1>=4 is";
echo  var_dump(1>=4);
echo "<br>";
echo "The value of 1<=4 is";
echo  var_dump(1<=4);
echo "<br>";
// Increment/Decrement operator
echo $variable1++;
echo "<br>";
echo $variable1--;
echo "<br>";
echo ++$variable1;
echo "<br>";
echo --$variable1;
echo "<br>";
echo $variable1;

// Logical operator
/*And (&&)
Or (||)
Xor (^^)
Not (!)*/
$myVar = (true and true);
echo "<br>";
echo var_dump($myVar);
$myVar = (false and true);
echo "<br>";
echo var_dump($myVar);
$myVar = (true or true);
echo "<br>";
echo var_dump($myVar);
$myVar = (false or false);
echo "<br>";
echo var_dump($myVar);
$myVar = (true xor false);
echo "<br>";
echo var_dump($myVar);
$myVar = (true xor true);
echo "<br>";
echo var_dump($myVar);
$myVar = (false xor false);
echo "<br>";
echo var_dump($myVar);


?>
<?php
// " Data Types in php "
// 1.String
// 2.Integer
// 3.Float
// 4.Boolean
// 5.Array
// 6.Object

echo "<br> Data Types <br>";
$var = "This is a string";
echo var_dump($var);
echo "<br>";
// 2.Integer
$var = 10;
echo var_dump($var);
echo "<br>";
// 3.Float
$var = 10.5;
echo var_dump($var);
echo "<br>";
// 4.Boolean
$var = true;
echo var_dump($var);
echo "<br>";
// 5.Array
$var = array("a","b","c");
echo var_dump($var);
echo "<br>";
// 6.Object
$var = new stdClass();
echo var_dump($var);
echo "<br>";
echo PI;


?>



    </div>
</body>
</html>