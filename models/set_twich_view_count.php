<?php
include_once "conf/conf.php";

// Attempt insert query execution
$get = $pdo->prepare("SELECT count FROM liveViews ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();
$count = $data[0][0];

$get = $pdo->prepare("SELECT donationSum FROM liveDonation ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();
$donation = $data[0][0];

echo $count;
