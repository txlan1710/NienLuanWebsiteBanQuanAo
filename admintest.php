<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="StyleWeb/admin.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="main-body">
      <div class="sidebar">
        <div class="header-sidebar">
          <a href="Home.html"><h1>BADLUCKSTUDIOVN</h1></a>
        </div>
        <div class="menu-sidebar">
          <ul>
            <li class="sidebar-item"><a href="#">Quản lí sản phẩm</a></li>
            <li class="sidebar-item"><a href="#">Quản lí khách hàng</a></li>
            <li class="sidebar-item"><a href="#">Quản lí đơn hàng</a></li>
          </ul>
        </div>
      </div>
      <div class="main">
        <nav class="navigation">
          <form clas="search-navigation-admin">
            <input
              class="form-control"
              type="text"
              placeholder="Nhập nội dung cần tìm kiếm"
            />
            <button class="btn-search-admin" type="button">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </form>
          <a href="#" class="account-admin"
            ><img
              src="https://file.hstatic.net/1000351433/file/user_bfb942d5edb24fc895104e6524135e07.png"
              weight="30"
              height="30"
          /></a>
        </nav>
        <div class="main-container">
          <h2>Quản lý sản phẩm</h2>
          <div class="table-product-admin">
            <table>
              <thead>
                <tr>
                  <th class="thead stt">STT</th>
                  <th class="thead name">Tên sản phẩm</th>
                  <th class="thead price">Giá</th>
                  <th class="thead mage">Ảnh</th>
                  <th class="thead category-product">Danh mục sản phâm</th>
                  <th class="thead btn-add-del">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="tbody stt"><p>1</p></th>
                  <th class="tbody name"><p>Áo heyyou đen nam</p></th>
                  <th class="tbody price"><p>100 000 VND</p></th>
                  <th class="tbody mage">
                    <img src="Ao/1.png" width="100px" />
                  </th>
                  <th class="tbody category-product">
                    <p>Danh mục sản phẩm</p>
                  </th>
                  <th class="tbody btn-add-del">
                    <button type="button" class="sua">Y</button>
                    <button type="button" class="xoa">X</button>
                  </th>
                </tr>
              </tbody>
            </table>
            <div class="btn-admin">
              <button class="btn-add-product" type="button">
                Thêm sản phẩm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
