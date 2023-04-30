<?php
    require_once 'connect.php';
    $nameErr = $emailErr = $phoneErr = $passErr ="";
    if (isset($_POST['btn-register'])) {

    //input databse to form
        $dbname = $_POST['Name'];
        $dbemail = $_POST['Email'];
        $dbphone = $_POST['phone'];
        $dbpass = $_POST['pass'];
        // connect database
        if(empty($dbname)){
            $nameErr = "Vui lòng nhập tên đi bà ơi";
        }
        if (empty($dbemail)) {
            $emailErr = "Vui lòng nhập email";
        }

        if (empty($dbphone)) {
            $phoneErr = "Vui lòng nhập số điện thoại";
        }

        if (empty($dbpass) ) {
            $passErr = "Vui lòng nhập mật khẩu";
        }
        
        if( empty($nameErr)  && empty($emailErr) && empty($phoneErr)  && empty($passErr) ) {
            $addsql = "INSERT INTO `CUSTOMERS` (`C_NAME`, `C_EMAIL`, `C_PASSWORD`, `C_PHONE`,`C_AVATAR`) VALUES
        ('$dbname', '$dbemail', '$dbpass', '$dbphone','IMG10.PNG')";
            $query = mysqli_query($conn, $addsql);
            if($query) {
                header('location:home.php');
            }
    }
    }
    ?>