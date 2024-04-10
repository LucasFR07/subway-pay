<?php 

include 'conectarbanco.php';

$conn = new mysqli('localhost', $config['db_user'], $config['db_pass'], $config['db_name']);



$sql = "SELECT * FROM app";

$result2 = $conn->query($sql);

$result = $result2->fetch_assoc();



$google_ads_tag = $result['google_ads_tag'];

$facebook_ads_tag = $result['facebook_ads_tag'];

$conn->close();

?>