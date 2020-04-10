<?php
include_once '../models/getInfo.php';
include_once "../models/conf/conf.php";

// Attempt insert query execution
if (isset($_REQUEST['stream_id'], $_REQUEST['type'], $_REQUEST['service'] )){
    try{
        // Create prepared statement
        $sql = "INSERT INTO content (id, type, service) VALUES (:id, :type, :service)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to statement
        $stmt->bindParam(':id', $_REQUEST['stream_id']);
        $stmt->bindParam(':type', $_REQUEST['type']);
        $stmt->bindParam(':service', $_REQUEST['service']);

        // Execute the prepared statement
        $stmt->execute();
        echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

}elseif (isset($_REQUEST['getter'], $_REQUEST['donation-text'])){

    try{
        // Create prepared statement
        $sql = "INSERT INTO donationInfo (name, text) VALUES (:name, :text)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to statement
        $stmt->bindParam(':name', $_REQUEST['getter']);
        $stmt->bindParam(':text', $_REQUEST['donation-text']);

        // Execute the prepared statement
        $stmt->execute();
        echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

}
elseif (isset($_REQUEST['artistname_yt'])){

    try{
        // Create prepared statement
        $sql = "INSERT INTO Artist (artistYt, artistApple, artistSpotify, artistBandcampUrl, artistHomePage) VALUES (:artistname_yt, :artistname_apple, :artistid_spotify, :artisturl_bandcamp, :artisturl_homepage)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to statement
        $stmt->bindParam(':artistname_yt', $_REQUEST['artistname_yt']);
        $stmt->bindParam(':artistname_apple', $_REQUEST['artistname_apple']);
        $stmt->bindParam(':artistid_spotify', $_REQUEST['artistid_spotify']);
        $stmt->bindParam(':artisturl_bandcamp', $_REQUEST['artisturl_bandcamp']);
        $stmt->bindParam(':artisturl_homepage', $_REQUEST['artisturl_homepage']);

        // Execute the prepared statement
        $stmt->execute();
        echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

}


// Close connection
unset($pdo);
header("location: ../public/index-admin.php");
?>