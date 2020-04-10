<?php
include_once "../models/conf/conf.php";

// Attempt insert query execution
$get = $pdo->prepare("SELECT id, type, service FROM content ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();

$id = $data[0][0];
$type = $data[0][1];
$service = $data[0][2];


// Attempt insert query execution
$get = $pdo->prepare("SELECT text, name FROM donationInfo ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();

$don_text = $data[0][0];
$don_name = $data[0][1];

$get = $pdo->prepare("SELECT artistApple, artistSpotify, artistBandcampUrl, artistYt, artistHomePage  FROM Artist ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();


$artistname_apple = $data[0][0];
$artistid_spotify = $data[0][1];
$artisturl_bandcamp = $data[0][2];
$artistname_yt = $data[0][3];
$artisturl_homepage = $data[0][4];

?>