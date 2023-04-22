<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="StyleWeb/pay.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="content">
      <div class="wrap">
        <div class="main">
          <div class="main-header">
            <a href="Home.html"><h1>BADLUCK</h1></a>
          </div>
          <div class="main-content">
            <div class="section">
              <div class="section-header">
                <h2 class="section-title">Thông tin giao hàng</h2>
              </div>
              <div class="section-content"> 
                <div class="field-required">
                  <div class="field-input-wrapper">
                      <label class="field-label" for="#">Email</label>
                      <input
                        placeholder="Email"
                        class="field-input"
                        type="text"
                        readonly
                      />
                    </div>
                    <div class="field-input-wrapper">
                      <label class="field-label" for="#">Họ và tên</label>
                      <input
                        placeholder="Họ và tên"
                        class="field-input"
                        type="text"
                        readonly
                      />
                    </div>
                    <div class="field-input-wrapper">
                      <label class="field-label" for="#">Số điện thoại</label>
                      <input
                        placeholder="Số điện thoại"
                        class="field-input"
                        type="text" 
                        readonly
                      />
                    </div>
                    <div class="field-input-wrapper">
                      <label class="field-label" for="#">Địa chỉ</label>
                      <input
                        placeholder="Địa chỉ"
                        class="field-input"
                        type="text"
                        readonly
                      />
                    </div>
                <div class="section-payment-method">
                  <div class="section-header-pay">
                    <h2>Phương thức thanh toán</h2>
                  </div>
                  <div class="section-content-pay">
                    <div class="content-box-row">
                      <input type="checkbox" class="checkbox-pay" />
                      <span>Thanh toán khi giao hàng (COD)</span>
                    </div>
                    <div class="content-box-row row-secondary">
                      <div class="footer">
                        BADLUCKSTUDIOVN cảm ơn bạn đã tin tưởng.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="step-footer">
              <a class="cart" href="cart.html">Giỏ hàng</a>
              <button type="submit">Thanh toán</button>
            </div>
          </form>
        </div>
          </div>
        </div>
        <div class="sidebar">
          <div class="sidebar-content">
            <div class="order-summary">
              <div class="list-product-order">
                <table class="product-table">
                  <tr>
                    <td class="product-image">
                      <img
                        src="Ao/1.png"
                        width="100px"
                        class="product-image-list"
                      />
                    </td>
                    <td class="product-desription">
                      <span class="name-product-order title"
                        >HEYYOU LNB GREEN TEE</span
                      >
                      <span class="name-product-order size"
                        >M | Số lượng: 1
                      </span>
                    </td>
                    <td></td>
                    <td class="product-price">
                      <span class="total-price-product">300 000 VND</span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="total-product-order">
                <span class="total total-title">Tổng cộng</span>
                <span class="total total-price">300 000 VND</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="kiemtra.js"></script>
  </body>
</html>
