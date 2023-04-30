<?php
    //input databse to form
    $dbpid = $_POST['P_ID'];
    // connect database
    require_once("connect.php");

    
    $delproduct = "DELETE FROM `PRODUCT` WHERE P_ID=$dbpid;";

    echo 'P_ID';
    if(mysqli_query($conn, $delproduct)){
        // header('location: ../nienluanwebsitebanquanao/product_list.php');
    }
?>