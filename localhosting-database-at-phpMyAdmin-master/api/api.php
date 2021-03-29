<?php
$server = "localhost";
$username = "root";
$passward = "";
$port = 3306;
$dbname = "api";
$con = mysqli_connect($server, $username, $passward, $dbname);
header("Content-Type:application/json");

header('Access-Control-Allow-Origin: *');

if (isset($_GET["q"])) {
    $query = $_GET["q"];
} else {
    $query = "notadmin";
}

if (!$con) {
    echo json_encode(["status_code" => 404, "data" => "api is down"]);
} else {
    if ($query == "admin") {
        $sql = "select * from api1";
        $res = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        echo json_encode(["status_code" => 200, "data" => $arr]);
    } else {
        echo json_encode(["status_code" => 400, "data" => "wrong credential"]);
    }
}
