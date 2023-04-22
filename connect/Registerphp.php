<?php
    //input databse to form
    $dbname = $_POST['Name'];
    $dbemail = $_POST['Email'];
    $dbphone = $_POST['phone'];
    $dbpass = $_POST['pass'];
    // connect database
    require_once 'connect.php';

    // add database
    $addsql = "INSERT INTO `CUSTOMERS` (`C_NAME`, `C_EMAIL`, `C_PASSWORD`, `C_PHONE`,`C_AVATAR`) VALUES
    ('$dbname', '$dbemail', '$dbpass', '$dbphone','IMG7.PNG')";
    // echo $addsql; exit;
    
    // $test_user_sql = "SELECT * FROM CUSTOMERS WHERE C_PHONE = '$dbphone'";

    // $result = mysqli_query($conn, $test_user_sql);
    // if( mysql_num_rows ($result)>0){
    //     echo "tên bị trùng lặp";
    // }

    if(mysqli_query($conn, $addsql)){
        echo 'xin chào';
    }
    ?>