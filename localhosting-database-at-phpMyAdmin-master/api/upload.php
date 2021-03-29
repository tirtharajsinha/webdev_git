<?php
$db = mysqli_connect("localhost", "root", "", "api");

if (isset($_POST["upload"])) {
    $image = $_FILES["image"];
    $name = $_POST["name"];
    $name = strtoupper($name);
    $des = $_POST["des"];
    $lang = $_POST["lang"];
    $source = $_POST["source"];
    $deploy = $_POST["deploy"];

    // image validator
    $imagename = $image["name"];
    $fileerror = $image["error"];
    $filetemp = $image["tmp_name"];
    $fileext = explode(".", $imagename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = 'image/' . $imagename;
        move_uploaded_file($filetemp, $destinationfile);
    }
    if ($deploy == null || $deploy == "") {
        $deploy = "#";
    }
    // query manager
    // $q = "INSERT INTO `api1` VALUES ('$name','$des','$lang','$destinationfile','$source','$deploy');";
    $q = "INSERT INTO `api1` (`ID`, `name`, `des`, `lang`, `image`, `source`, `deploy`) VALUES (NULL, '$name','$des','$lang','$destinationfile','$source','$deploy');";
    $quary = mysqli_query($db, $q);
}





?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->


    <title>project uploader</title>
</head>

<body>


    <div class="content">



        <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
            <h1 class="text">Project Uploader</h1>
            <input type="hidden" name="size" value="1000000">
            <div class="box">
                <label for="name">Project Title</label>
                <input class="input" type="text" name="name"><br>
            </div>
            <div class="box">
                <label for="image">Title Image</label>
                <input class="input" type="file" name="image"><br>
            </div>
            <div class="box">
                <label for="des">Description :</label>
                <textarea class="input" name="des" rows="4" cols="40" placeholder="provide a short description"></textarea><br>
            </div>
            <div class="box">
                <label for="lang">Language used :</label>
                <input class="input" type="text" name="lang"><br>
            </div>
            <div class="box">
                <label for="source">Source code Link</label>
                <input class="input" type="text" name="source"><br>
            </div>
            <div class="box">
                <label for="deploy">demo link</label>
                <input class="input" type="text" name="deploy"><br>
            </div>





            <button type="submit" name="upload" value="upload image">Submit Now</button>


        </form>

    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>
