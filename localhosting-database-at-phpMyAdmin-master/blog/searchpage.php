<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search-By-Attribute</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style media="screen">
    body{
      background-image:url("https://i.pinimg.com/originals/af/8d/63/af8d63a477078732b79ff9d9fc60873f.jpg");
      background-repeat: no-repeat;
       background-attachment: fixed;
      background-position: center;
      background-size: cover;

    }

    .text{
      color:cyan;
      text-align: center;
    }
    .form{
      width:50%;
      height:55px;
      padding:0px;
      margin:auto;
      top:200px;
      margin-top: 200px;
    }
    .input{

      border-radius: 10px;
    }
    .search{
      width: 60%;
    }
    .but{

       background-color: skyblue;


    }
    table, th, td {
      border: 5px solid purple;
      border-radius: 20px;
      margin:auto;
    }
    table{
      width: 70%;
    }
    td{
      width:30%;
      text-align: center;
      font-size: 20px;
      background-color: skyblue;
    }

    </style>
  </head>
  <body>
<a href="index.php">back to upload page</a>
    <div class="content">
      <form class="form" action="searchpage.php" method="post">
        <h1 class="text">ONEidentitySearch</h1>

        <div class="input-group mb-3">
      <input type="text" class="form-control input" name="attr" placeholder="Search here" aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary but input" name="upload" type="submit" id="button-addon2">Search</button>
      </div>
    </div>

      </form>

    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3 class="text">result for the search is here</h3>
<table>
  <tr><td>Image</td><td>Description</td><td>Attribute</td>
    <?php

    $db=mysqli_connect("localhost","root","","blog");
    $search=strtolower($_POST["attr"]);

    $sql="SELECT * FROM images";
    $result=mysqli_query($db,$sql);
    $i=0;
    if (isset($_POST["upload"])){
    print_r($search);



    while($row=mysqli_fetch_array($result)){
      if($search==$row["attr"]){
      $i=$i+1;

      echo "<tr>";

      echo "<td><img src='".$row['image']."' height ='200px' width='300px'></td>";
      echo "<td><p>".$row["text"]."</p></td>";
      echo "<td><p>".$row["attr"]."</p></td>";
      echo "</tr>";

    }
    }
    echo "<p class='text'>".$i." search result found</p>";

      }

   ?>
</table>



  </body>
</html>
