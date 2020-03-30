<?php
require_once 'conf/conf.php';
require_once ('getInfo.php');

$get = $pdo->prepare("SELECT id, type FROM content ORDER BY date DESC");
$get->execute();
$data = $get->fetchAll();

$id = $data[0][0];

getTwichStreamViewerCount($id);

//$doately_id = 'act_b19dd0fd8f0a';

//getDonatelyInfo($doately_id);