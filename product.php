<?php 
  $dbid = $_GET['id'];
  
  require_once("connect/connect.php");

  $sqlDetail = "SELECT * FROM PRODUCT WHERE P_ID = $dbid";

  $query = mysqli_query($conn, $sqlDetail);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="StyleWeb/product.css" />
    <title>Document</title>
    <script>
    function show() {
        let image = document.getElementById(image);
        image.src = "http://hanoiriot.com/wp-content/uploads/2023/03/T0187-t%C3%A1i-scaled.jpg";
        document.getElementById("btnID")
            .style.display = "none";
    }
    </script>
</head>

<body>
    <header>
        <div class="header-main-left">
            <img class="logo" src="Ao/favicon.ico" alt="img-log" />
        </div>
        <div class="header-main-right">
            <li class="search">
                <input type="text" class="input-search" placeholder="Bạn muốn tìm kiếm gì?" />
                <a href="#">
                    <ion-icon name="search-outline"></ion-icon>
                </a>
            </li>
            <li class="cart">
                <a href="cart.html">
                    <ion-icon name="cart-outline"></ion-icon>
                </a>
            </li>
            <li class="acc">
                <a>
                    <img src="https://file.hstatic.net/1000351433/file/user_bfb942d5edb24fc895104e6524135e07.png"
                        weight="30" height="30" />
                </a>
            </li>
        </div>
    </header>
    <?php 
        $sql_menu = "SELECT * FROM PRODUCT_TYPE";

        require_once("connect/connect.php");
        
        $quyery = mysqli_query($conn, $sql_menu);

    ?>
    <div class="navigation">
        <ul class="menu-list">
            <?php 
            while($row = mysqli_fetch_array($quyery)){
            ?>
            <li><a
                    href="http://localhost/nienluanwebsitebanquanao/trangchu.php?id=<?php echo $row['PT_ID']; ?>"><?php echo $row['PT_NAME']; ?></a>
            </li>
            <?php 
            }
            ?>
        </ul>
    </div>
    <?php 
      while($row = mysqli_fetch_array($query)){
      ?>
    <main class="product-main">
        <div class="product-detail">
            <div class="product-image">
                <img src="upload/<?php echo $row['NAME_IMAGE']?>" />
            </div>
            <div class="product-contenter">
                <div class="detail-image">
                    <form>
                        <h2><?php echo $row['P_NAME']; ?></h2>
                        <div class="divider"></div>
                        <span class="information-product" data-for="usage"><b>Thông tin sản phẩm</b></span>
                        <span class="information-product">
                            <p><?php echo $row['P_DESCRIPTION']; ?></p>
                        </span>
                        <div class="divider"></div>
                        <h4 class="money"><?php echo $row['P_PRICE']; ?> 000 VND</h4>
                        <div class="option-size">
                            <h3>SIZE</h3>
                            <span class="x_attribute_item active">M</span>
                            <span class="x_attribute_item active">L</span>
                            <span class="x_attribute_item active">X</span>
                        </div>
                        <div class="number">
                            <h3>Số lượng</h3>
                            <input type="number" class="input-text" value="1" step="1" min="1">
                            </di>
                        </div>
                        <a href="http://localhost/nienluanwebsitebanquanao/cart.php?id=<?php echo $row['PT_ID']; ?>"
                            class="button" name="btn-addCart">Thêm vào giỏ hàng</a>
                        <!-- <a type="submit" class="button">Thêm vào giỏ hàng</a> -->
                    </form>
                </div>
            </div>
            <div class="huongdanchonsize">
                <img id="image" width="400px">
            </div>
            < </div>
                <?php 
      }
      ?>
    </main>
    <!-- footer -->
    <footer>
        <div class="footer-item">
            <div class="img-footer">
                <img class="logo" src="Hinhanh/favicon.ico" alt="" />
            </div>
            <div class="social-footer">
                <div class="footer-content">
                    <ul>
                        <li>© 2023 <b>BADLUCKY</b> sofficial Store all right reserved.</li>
                        <li><b>HOTLINE:</b> 0941027800</li>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>