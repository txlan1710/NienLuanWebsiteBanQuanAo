<?php
    //input databse to form
    $dbName = $_POST['Name'];
    $dbType = $_POST['Type'];
    $dbPrice = $_POST['price'];
    $dbDescription = $_POST['description'];
    // connect database
    require_once("connect.php");

    
    $addproduct = "INSERT INTO `PRODUCT` (`P_NAME`,`P_DESCRIPTION`,`P_PRICE`, `NAME_IMAGE`,`PT_ID`) VALUES
    ('$dbName','$dbDescription','$dbPrice','IMG7','$dbType')";
    
    if(mysqli_query($conn, $addproduct)){
        
        header('location:http://localhost/nienluanwebsitebanquanao/product_add.php');
    }
?>