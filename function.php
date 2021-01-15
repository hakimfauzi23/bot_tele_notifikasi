<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$mysqli = new mysqli("localhost","root","","api");
date_default_timezone_set('Asia/Jakarta');

$waktu = date("H:i:00");

$sql = "SELECT * FROM api1 WHERE time='".$waktu."'";
$result= $mysqli->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);


