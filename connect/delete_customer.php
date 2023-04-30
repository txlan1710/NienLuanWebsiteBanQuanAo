<?php
    //input databse to form
    $dbid = $_GET['id'];

    // connect database
    require_once("connect.php");

    
    $delCustomer = "DELETE FROM CUSTOMERS WHERE C_ID='$dbid'";
    
    if(mysqli_query($conn, $delCustomer)){
        
        header('location:http://localhost/nienluanwebsitebanquanao/customer_list.php');
    }
?>