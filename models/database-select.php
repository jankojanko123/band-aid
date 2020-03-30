<?php
include_once '../models/getInfo.php';
include_once "../models/conf/conf.php";

// Attempt insert query execution
$get = $pdo->prepare("SELECT id, type FROM content ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();

$id = $data[0][0];
$type = $data[0][1];


// Attempt insert query execution
$get = $pdo->prepare("SELECT text, name FROM donationInfo ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();

$don_text = $data[0][0];
$don_name = $data[0][1];

?>