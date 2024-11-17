<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        
    }
    .container{
        max-width:80%;
    background-color:gray;
    margin:auto;
    padding:34px;
    }
    
</style>
<body>
<div  class="container">
    <h1 >Lest Learn About PHP</h1>
    <p>Your age is compleat then you can vote </p>
<?php
$age=19;
if($age>18){
    echo "You are eligible to vote";
}
else{
    echo"You are not eligible to vote";
    
}
//Array in PHP
echo"<br>";
$language = array("Python","C++","PHP","Node.js");
echo $language[1];
echo count($language);

//Loop in PHP
$a=0;
while($a<=10){
    echo "<br> The value of a is:";
    echo $a;
    $a++;
}
// Iterating arrays in PHP using while loop
// $a = 0;
// while ($a < count($languages)) {
//     echo "<br> The value of languages is";
//     echo $languages[$a];
//     $a++;
// }
// for loop
for ($a=0; $a <=10 ; $a++) { 
    echo "<br> The value of a from the for loop is:";
    echo $a;
}
// foreach
foreach($language as $value){
    echo "<br> The value from foreach loop is";
    echo $value;
}

// function
function print5(){
    echo"<br>Your number is:";
    echo "five";
}
print5();
function print_number($number){
    echo "<br>Your number is:";
    echo $number;
}
print_number(5);
print_number(10);



?>
</div>
    
</body>
</html>