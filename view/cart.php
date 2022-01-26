<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ตะกร้าสินค้า</title>
  <meta content name="author">
  <meta content="Ecata - City Portal" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta pcontent="ซอสปรุงรส ออร์แกนิค ขนาด 300 มล. ตราเด็กสมบูรณ์">
  <meta property="og:description" content="ซอสปรุงรสคุณภาพชั้นเยี่ยมที่คัดสรรอย่างดี ผลิตจากถั่วเหลือง ข้าวสาลี และวัตถุดิบออแกร์นิค 100 % มั่นใจในคุณภาพและความปลอดภัย ได้รับมาตรฐานออร์แกนิคจากสหภาพยุโรป หมักบ่มด้วยวิธีธรรมชาติรสชาติ นานกว่า 8 เดือน คุณสมบัติ ใช้ส่วนผสมที่่เป็นออแกร์นิค 100% ผ่านการรับรองตามมาตรฐานยุโรป เป็นสูตร 3 no. คือ 1. No Preservative 2. No Artificial Colour 3. No MSG เมนูแนะนำ ใช้ปรุงอาหารได้รสชาติความอร่อยดั้งเดิม กลมกล่อม หอมอร่อย เหมาะสำหรับผู้รักสุขภาพ หรือเมนูอาหารเพื่อสุขภาพ ​​Shelf Life 18 เดือน หลังเปิดแล้วควรเก็บในตู้เย็น">
  <?php include('head-link.php'); ?>
  <!-- ION CSS -->
  <link href="../vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css">
  <link href="../vendors/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" type="text/css">

</head>

<body class="page-blog-grid">
  <div class="page-wrapper">
    <?php include('header.php'); ?>
    <main class="page-main">
      <ul class="uk-breadcrumb listing-breadcrumb">
        <li><a href="#">หน้าแรก</a></li>
        <li class="uk-disabled"><a>ตะกร้าสินค้า</a></li>
      </ul>
      <div class="page cart block-color">
        <div class="uk-section-large uk-container uk-container-large">
          <div class="uk-grid uk-grid-medium" data-uk-grid>
            <div class="uk-width-3-4@m">
              <div class="uk-flex uk-flex-between uk-width-1-1@m mb-20">
                <div class="title-block">
                  <h1 class="text-title-large">ตะกร้า <span class="count">(3)</span></h1>
                </div>
                <div>
                  <h3><a class="text-extra-large" href="#!">ซื้อสินค้าเพิ่ม</a></h3>
                </div>
              </div>
              <div class="cart-block uk-width-1-1@m">
                <div class="cart-block-left uk-child-width-1-2@s uk-child-width-1-5@m" uk-grid>
                  <div class="uk-width-1-1@s uk-width-auto@m">
                    <div class="text_th"></div>
                    <div class="listing-card__img">
                      <a href="product-detail.php">
                        <img class="w-100p" src="../assets/img/product/thinsoysauce/01_thumb.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s uk-width-2-5@m">
                    <div class="text_th">รายละเอียดสินค้า/ราคา</div>
                    <div class=" detail__box">
                      <div class="cat_title">
                        <h3>ซีอิ๊วขาวสูตร1 700มล (12ขวดส่งฟรีคละสินค้าที่ร่วมรายการได้)</h3>
                      </div>
                      <div class="detail_old-cost">
                        <div class="text-grey-2"><b>44.00</b>THB/ <small>ขวด</small></div>
                        <span class="uk-badge uk-padding-small">ประหยัด 10% </span>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s uk-width-1-5@m">
                    <div class="text_th">จำนวน</div>
                    <div class="plusminus horiz detail__box">
                      <div class="detail_quantity input-group ">
                        <button class="btnquantity btn btn-decrement btn-outline-light" style="min-width: 1.5em" id="qty-minus-<?php echo $product['cart_id']; ?>"><strong>-</strong></button>
                        <input style="background-color: #fff;border: none; padding:0; text-align: center; min-width: 4em;" type="number" id="quantity-<?php echo $product['cart_id']; ?>" name="quantity[<?php echo $product['cart_id']; ?>]" value="<?php echo $product['quantity']; ?>" class="numQty" min="1" max="10">
                        <button class="btnquantity sp-plus btn btn-increment btn-outline-light" style="min-width: 1.5em" id="qty-plus-<?php echo $product['cart_id']; ?>"><strong>+</strong></button>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s uk-width-1-5@m">
                    <div class="text_th">ยอดสุทธิ</div>
                    <div class="detail__box">
                      <div class="detail_new-cost">
                        <div><b style="font-size: 28px;">40.00</b>THB/ <small>ขวด</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s uk-width-auto@m">
                    <div class="text_th"></div>
                    <div class=" ma-15">
                      <a href="#" class="uk-icon-button" uk-icon="trash"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="shipping-block uk-width-1-1@m background-white uk-padding-small">
                <div class="shipping-address-create">
                  <h3 class="blog-card__title">จัดการที่อยู่จัดส่ง</h3>
                  <form class="form">
                    <div class="uk-margin">
                      <div class="uk-flex uk-flex-between">
                        <div class="address_title">ข้อมูลผู้ติดต่อ</div>
                        <label><input class="uk-radio" type="radio" name="radio2" checked> ใช้ที่อยู่นี้ในการจัดส่ง</label>
                      </div>
                    </div>
                    <div class="uk-margin">
                      <div class="uk-grid uk-grid-medium uk-child-width-1-2@xl" uk-grid>
                        <div>
                          <label for="inputFirstname" class="label">ชื่อผู้รับ</label>
                          <input id="inputFirstname" type="text" name="inputFirstname" placeholder="กรอกชื่อผู้รับ" class="uk-input input-firstname ">
                        </div>
                        <div>
                          <label for="inputLastname" class="label">นามสกุลผู้รับ</label>
                          <input id="inputLastname" type="text" name="inputLastname" placeholder="กรอกนามสกุลผู้รับ" class="uk-input input-lastname ">
                        </div>
                        <div>
                          <label for="inputPhoneNumber" class="label">เบอร์โทรศัพท์</label>
                          <input id="inputPhoneNumber" type="text" maxlength="10" name="inputPhoneNumber" placeholder="กรอกเบอร์โทรศัพท์" class="uk-input input-phone-number">
                        </div>
                      </div>
                    </div>
                    <div class="uk-margin">
                      <h6 class="blog-card__title">ข้อมูลที่อยู่</h6>
                      <div class="uk-child-width-1-1@xl">
                        <label for="inputAddressOne" class="label">ที่อยู่ 1</label>
                        <input id="inputAddressOne" type="text" name="inputAddressOne" maxlength="200" placeholder="กรอกข้อมูลที่อยู่จัดส่ง 1" class="uk-input input-address-one">
                      </div>
                      <div class="uk-child-width-1-1@xl">
                        <label for="inputAddressTwo" class="label">ที่อยู่ 2</label>
                        <input id="inputAddressTwo" type="text" name="inputAddressTwo" maxlength="200" placeholder="กรอกข้อมูลที่อยู่จัดส่ง 2" class="uk-input input-address-one">
                      </div>
                      <div class="uk-margin">
                        <div class="uk-grid uk-grid-medium uk-child-width-1-2@xl" uk-grid>
                          <div>
                            <label for="inputPostcode" class="label">รหัสไปรษณีย์</label>
                            <input id="inputPostcode" type="text" name="inputPostcode" maxlength="5" placeholder="กรอกรหัสไปรษณีย์ 5 หลัก" class="uk-input input-postcode">
                          </div>
                          <div>
                            <label class="uk-form-label" for="form-stacked-select">จังหวัด</label>
                            <div class="uk-form-controls">
                              <select class="uk-select" id="form-stacked-select">
                                <option>กรุงเทพฯ</option>
                                <option>ปทุมธานี</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-margin">
                        <div class="uk-grid uk-grid-medium uk-child-width-1-2@xl" uk-grid>
                          <div>
                            <label class="uk-form-label" for="form-stacked-select">อำเภอ/เขต</label>
                            <div class="uk-form-controls">
                              <select class="uk-select" id="form-stacked-select">
                                <option>ดอนเมือง</option>
                                <option>คลองกุ่ม</option>
                              </select>
                            </div>
                          </div>
                          <div>
                            <label class="uk-form-label" for="form-stacked-select">ตำบล/แขวง</label>
                            <div class="uk-form-controls">
                              <select class="uk-select" id="form-stacked-select">
                                <option>สีกัน</option>
                                <option>บึงกุ่ม</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-margin">
                        <div class="uk-child-width-1-1@xl">
                          <label for="inputAddressDetail" class="label">จุดสังเกตที่</label>
                          <textarea id="inputAddressDetail" type="text" name="inputAddressDetail" maxlength="200" placeholder="บอกเรา (เพิ่มเติม) เช่น ใกล้กับ ..." class="uk-textarea" rows="5">
                          </textarea>
                        </div>
                      </div>
                      <div class="uk-margin uk-flex uk-flex-between">
                        <label><input class="uk-checkbox" type="checkbox"> จัดส่งโดย <span class="text-orange text-large">kerry</span></label>
                        <label><input class="w-90p" type="number" placeholder="55" value="55" disabled></label>
                      </div>
                      <div class="uk-margin uk-flex uk-flex-between">
                        <label><input class="uk-checkbox" type="checkbox"> จัดส่งโดย <span class="text-red text-large">ขนส่งบริษัท</span></label>
                        <label><input class="w-90p" type="number" placeholder="55" value="55" disabled></label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="uk-width-1-4@m">
              <div class="cart-block-right background-white uk-padding-small">
                <div class="order-info">
                  <div class="title-block">
                    <h3 class="text-large">สรุปยอดชำระสินค้า</h3>
                  </div>
                  <div class="list-item total">
                    <div class="uk-margin-small uk-flex uk-flex-between background-grey-1 uk-border-y pa-lg-5">
                      <p class="total_title">ยอดรวมสุทธิ</p>
                      <div class="total_cost">30</div>
                    </div>
                    <div class="uk-margin-small uk-border-y uk-flex uk-flex-between">
                      <p>จำนวนรายการซื้อทั้งหมด</p>
                      <div>3</div>
                    </div>
                    <div class="uk-margin-small uk-border-y uk-flex uk-flex-between">
                      <p>ยอดรวมทั้งหมด</p>
                      <div>30</div>
                    </div>
                    <div class="uk-margin-small uk-border-y uk-flex uk-flex-between">
                      <p>ยอดส่วนลดทั้งหมด</p>
                      <div class="text-red">-30</div>
                    </div>
                    <div class="uk-margin-small uk-border-y uk-flex uk-flex-between">
                      <p>ค่าจัดส่ง</p>
                      <div>30</div>
                    </div>
                  </div>
                  <div class="info-list uk-margin">
                    <div class="coupon-block uk-margin-small">
                      <div class="coupon_title">รหัสส่วนลด</div>
                      <form class="form uk-flex uk-flex-between">
                        <input type="text" class="input uk-width-expand" placeholder="Coupon code">
                        <button class="submit uk-button-secondary">ใช้โค้ด</button>
                      </form>
                    </div>
                    <div class="uk-margin-small uk-flex uk-flex-between">
                      <p>จำนวนแต้ม</p>
                      <div>250</div>
                    </div>
                  </div>
                </div>
                <div class="uk-margin">
                  <button class="uk-button uk-button-danger uk-button-large text-white uk-margin-auto uk-width-1-1 " type="submit">
                    <a href="payment.php">ดำเนินการสั่งซื้อ</a>
                  </button>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- footer -->
      <?php include('footer.php'); ?>
      <!-- /footer -->




      <!-- sing-in  -->
      <?php include('sing-in.php'); ?>
      <!-- script  -->
      <?php include('script.php'); ?>

      <!-- Ion JavaScript -->
      <script src="../vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
      <script src="../dist/js/rangeslider-data.js"></script>
      <script src="../vendors/bootstrap-input-spinner/src/bootstrap-input-spinner.js"></script>
      <script src="../dist/js/inputspinner-data.js"></script>

    </main>
  </div>

</body>

</html>