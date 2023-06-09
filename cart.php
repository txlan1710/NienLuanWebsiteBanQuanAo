<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="StyleWeb/cart.css" />
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
    <div id="main-body">
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
                    <a href="#">
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
        <!-- menu-navigation -->
        <div class="navigation">
            <ul class="menu-list">
                <li><a href="#">BEST SELLER</a></li>
                <li><a href="#">TẤT CẢ SẢN PHẨM</a></li>
                <li><a href="#">ÁO THUN</a></li>
                <li><a href="#">ÁO HOODIE</a></li>
                <li><a href="#" title="ÁO SƠMI">ÁO SƠMI</a></li>
                <li><a href="#" title="QUẦN">QUẦN</a></li>
                <li><a href="#" title="PHỤ KIỆN">PHỤ KIỆN</a></li>
            </ul>
        </div>

        <main class="product-main">
            <div class="container">
                <div class="header-page-cart">
                    <h1>Giỏ hàng</h1>
                    <p><a href="TrangChu.html" class="comeback">Tiếp tục mua hàng</a></p>
                </div>
                <div class="row-wrapbox-content-cart">
                    <div class="row-content-page">
                        <form class="cart-form-page">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="image-cart tb-title">Sản Phẩm</th>
                                        <th class="price tb-title">Giá</th>
                                        <th class="line-qty tb-title">Số lượng</th>
                                        <th class="remove tb-title">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th class=" image">
                                            <div class="line-item-infor">
                                                <div class="product-image">
                                                    <img class="product-image-cart" src="Ao/1.png">
                                                </div>
                                                <div class="product-detail">
                                                    <h2>AO THUN TRẮNG NAM</h2>
                                                    <p><span class="variant-title">while / L</span></p>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="price">
                                            <p><span class="pri">99 000 VND</span></p>
                                        </th>
                                        <th class="line-qty">
                                            <div class="quantity">
                                                <input type="text" size="4" name="update[]" min="1" value="1"
                                                    id="update-product">
                                            </div>
                                        </th>
                                        <th class="remove">
                                            <button type="button">X</button>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="sidebarCart-sticky">
                        <div class="sum-order">
                            <h4>Tổng hóa đơn</h4>
                            <div class="summary-total">
                                <span>430.000 VND</span>
                            </div>
                            <div class="summay-button">
                                <a class="btnCart-checkout" href="#">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer -->
        <footer>
            <div class="footer-item">
                <div class="img-footer">
                    <img class="logo" src="Ao/favicon.ico" alt="" />
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
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>