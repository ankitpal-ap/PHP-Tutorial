<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con=mysqli_connect($server,$username,$password);
// Check for connection success
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
// echo "Success connecting to the db";
// Collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

// execute the query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// close the database connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="https://media.istockphoto.com/id/1526986072/photo/airplane-flying-over-tropical-sea-at-sunset.jpg?s=612x612&w=0&k=20&c=Ccvg3BqlqsWTT0Mt0CvHlbwCuRjPAIWaCLMKSl3PCks=" alt="">
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p>Please fill out the form below and submit it if you want to travel.</p>\
        <?php if($insert == true){
       echo"<p class='submitMsg'>Thanks for submitting your form.we are happy to see you!</p>";
    }
        ?>
        <form action="index.php" method="POST">
<input type="text" name="name" id="name" placeholder="Enter your name">
<input type="text" name="age" id="age" placeholder="Enter your age">
<input type="text" name="gender" id="gender" placeholder="Enter your gender">
<input type="email" name="email" id="email" placeholder="Enter your email">
<input type="text" name="phone" id="phone" placeholder="Enter your phone number">
<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
<button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>

</body>
</html>