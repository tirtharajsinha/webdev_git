<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>image loader</title>
    <style>
table, th, td {
  border: 1px solid purple;
  border-radius: 10px;
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
  <body bgcolor="cyan">
    <h1> Database image viewer</h1>
    <a href="index.php">move to image uploader page</a>
    <a href="searchpage.php">move to image search page</a>
    <table>
      <tr><td>Sl.</td><td>Image</td><td>Description</td><td>Attribute</td>
      <?php

        $db=mysqli_connect("localhost","root","","blog");
        echo "<h3> you are connected</h3>";
        $sql="SELECT * FROM images";
        $result=mysqli_query($db,$sql);
        $i=0;


        while($row=mysqli_fetch_array($result)){
          $i=$i+1;
          echo "<tr>";
          echo "<td><p>".$i.".</p></td>";
          echo "<td><img src='".$row['image']."' height ='200px' width='300px'></td>";
          echo "<td><p>".$row["text"]."</p></td>";
          echo "<td><p>".$row["attr"]."</p></td>";
          echo "</tr>";
        }



       ?>
    </table>
  </body>
</html>
