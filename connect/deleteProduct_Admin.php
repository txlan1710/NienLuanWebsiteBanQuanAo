<?php
    //input databse to form
    $dbpid = $_POST['P_ID'];
    // connect database
    require_once("connect.php");

    
    $delproduct = "DELETE FROM `PRODUCT` WHERE P_ID=$dbpid;";

    
    if(mysqli_query($conn, $delproduct)){
        echo 'xin chào';
    }
?>