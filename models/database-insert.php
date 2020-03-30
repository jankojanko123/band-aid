<?php
include_once '../models/getInfo.php';
include_once "../models/conf/conf.php";

// Attempt insert query execution
if (isset($_REQUEST['stream_id'], $_REQUEST['type'])){
    try{
        // Create prepared statement
        $sql = "INSERT INTO content (id, type) VALUES (:id, :type)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to statement
        $stmt->bindParam(':id', $_REQUEST['stream_id']);
        $stmt->bindParam(':type', $_REQUEST['type']);

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


// Close connection
unset($pdo);
header("location: ../public/index-admin.php");
?>