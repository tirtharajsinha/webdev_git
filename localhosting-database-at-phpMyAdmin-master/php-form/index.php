<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $sql= "INSERT INTO `database1`.`tab1` (`name`, `age`, `gender`, `phone`, `email`, `dt`) VALUES ('$name', '$age', '$gender', '$phone', '$email',current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head><title>phpMYAdmin database form</title>
  <meta charset="utf-8">
  <link rel="stylesheet"href="style.css" type="text/css">
</head>
<body>
  <img class="bg"src="https://3er1viui9wo30pkxh1v2nh4w-wpengine.netdna-ssl.com/wp-content/uploads/prod/sites/66/2020/04/5e8b9ea32bdd0-5e8b9ea32bdd31280px-Main_Quadrangle_University_of_Sydney.jpg-1024x683.jpg" alt="University">
  <div class="container">
    <h1>Student Database</h1>

    <p>FILL your personal details</p>
    <p class="submsg">Thanks for filling up the form</p>
  </div>
  <div class=database>
  <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name:" required>
    <input type="text" name="age" id="age" placeholder="Enter your age:" required>
    <input type="text" name="gender" id="gender" placeholder="Enter your gender:">
    <input type="email" name="email" id="email" placeholder="Enter your email Id:" required>
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone:" required>
     <button class="btn">Submit</button>


  </form>
</div>
  <script src=index.js type="text/javascript">
</body>

</html>
