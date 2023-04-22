<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="StyleWeb/admin1.css" />
    <title>Adminthem</title>
</head>

<body>
    <header>
        <h1>Quản lý sản phẩm</h1>
    </header>
    <section class="admin-content">
        <div class="admin-left admin-content-left">
            <ul>
                <li>
                    <a href="#">User</a>
                    <ul>
                        <li class="li-item"><a href="">Thêm user</a></li>
                        <li class="li-item"><a href="">Danh sách user</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Sản phẩm</a>
                    <ul>
                        <li class="li-item"><a href="product_add.php">Thêm sản phẩm</a></li>
                        <li class="li-item"><a href="product_list.php">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-right admin-content-right">
            <div class="admin-content-right-product_add">
                <h2>Thêm sản phẩm</h2>
                <form action="connect/dmproduct_add.php" method="post" enctype="multipart/form-data">
                    <label for="">Nhập sản phẩm <span style="color: red">*</span></label>
                    <input type="text" name="Name" />
                    <label for="">Loại sản phẩm <span style="color: red">*</span></label>
                    <input type="number" min="1" max="4" name="Type" />
                    <label for="">Giá sản phẩm <span style="color: red">*</span></label>
                    <input type="text" name="price" />
                    <label for="">Mô tả sản phẩm <span style="color: red">*</span></label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                    <label for="">Chọn ảnh sản phẩm <span style="color: red">*</span></label>
                    <input type="file" name="image" id="" />
                    <button type="submit" enctype="multipart/form-data">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    <script src="select.js"></script>
</body>

</html>