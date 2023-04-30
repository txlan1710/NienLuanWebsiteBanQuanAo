<?php
    require_once("connect.php");
    if(isset($_POST['btn-addCart'])){
        $dbid = $_GET['id'];
        $soluong = 1;
        $sql_addCart = "SELECT * FROM PRODUCT WHERE P_ID = $dbid";

        $query = mysqli_query($conn, $sql_addCart);
        $row = mysqli_fetch_array($query);
        
    }
?>