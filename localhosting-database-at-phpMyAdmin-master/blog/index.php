<?php
$db=mysqli_connect("localhost","root","","blog");

if (isset($_POST["upload"])){
  $image=$_FILES["image"];
  $text=$_POST["text"];
  $attr=strtolower($_POST["attr"]);
  $imagename=$image["name"];
  $fileerror=$image["error"];
  $filetemp=$image["tmp_name"];
  $fileext=explode(".",$imagename);
  $filecheck=strtolower(end($fileext));
  $fileextstored=array('png','jpg','jpeg');
  if(in_array($filecheck,$fileextstored)){
    $destinationfile='upload/'.$imagename;
    move_uploaded_file($filetemp,$destinationfile);
    $q="INSERT INTO `images`(`image`, `text`, `attr`) VALUES ('$destinationfile','$text','$attr')";
    $quary=mysqli_query($db,$q);




  }
  print_r($attr);

}

  // $sql="INSERT INTO images (image,text,attr) VALUES ('$image', '$text', '$attr')";
  // mysqli_query($db,$sql);
  // if(move_uploaded_file($_FILES["image"]["name"],$target)){
  //   $msg="image Uploaded Successfully";
  // }
  // else{
  //   $msg="problem occured";
  //
  // }



 ?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->


    <title>image loader</title>
  </head>
  <body>
    <h1 class="text">Image Bag</h1>
<a href="show.php">move to your database image viewer</a>
    <div class="content">



      <form class="form" action="index.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="size" value="1000000">

          <input class="input" type="file" name="image">


            <textarea class="input" name="text" rows="4" cols="40" placeholder="provide a short description"></textarea>



            <input class="input" type="text" name="attr">



          <button class="input" type="submit" name="upload" value="upload image">Submit Now</button>


      </form>

    </div>


  </body>
</html>
