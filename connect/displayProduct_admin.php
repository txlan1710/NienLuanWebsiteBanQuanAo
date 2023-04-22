<?php
    require_once("connect.php");    

    $sql = "select * from `PRODUCT`";
    $result = mysqli_query($conn, $sql);

    $data = [];
    $rowNum = 1;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            'row' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
            'P_NAME' => $row['NAME'],
            'P_DESCRIPTION' => $row['DESCRIPTION'],
            'P_PRICE' => $row['PRICE'],
            'NAME_IMAGE' => $row['NAME_IMAGE'],
            'PT_ID' => $row['PT_ID'],
        );
        $rowNum++;
}
?>



if(mysqli_query($conn, $addproduct)){
echo 'xin chào';
}
?>