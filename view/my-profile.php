<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>โปรไฟล์ของฉัน</title>
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
        <li class="uk-disabled"><a>รายการสั่งซื้อทั้งหมด</a></li>
      </ul>
      <div class="page-content block-color">
        <div class="uk-section-large uk-container uk-container-large">
          <div class="uk-container-large">
            <ul class="filter-list nav nav-tabs nav-tabs-noborder tags-list" id="Tab" role="tablist" uk-tab>
              <li class="nav-item">
                <a class="uk-link link-icon-left" data-toggle="list" role="tab" aria-expanded="false" href="#tabs-1">
                  โปร์ไฟล์ของฉัน
                </a>
              </li>
              <li class="nav-item">
                <a class="uk-link link-icon-left" data-toggle="list" role="tab" aria-expanded="false" href="#tabs-2">
                  สินค้าที่ถูกใจ
                </a>
              </li>
              <li class="nav-item">
                <a class="uk-link link-icon-left" data-toggle="list" role="tab" aria-expanded="false" href="#tabs-3">
                  รายการสั่งซื้อทั้งหมด
                </a>
              </li>
            </ul>
          </div>
          <div class="uk-grid uk-padding-small" data-uk-grid>
            <div class="uk-width-1-1@m">
              <!-- Tab panes -->
              <div id="TabContent" class="uk-margin-small-top tab-content uk-section-large background-white uk-padding">
                <!-- Tab panes 1 -->
                <div role="tabpanel" id="tabs-1" data-toggle="tab" class="section-listing-slider tab-pane active">
                  <div class="uk-grid uk-padding-small" data-uk-grid>
                    <div class="uk-width-1-3@m">
                      <fieldset class="uk-fieldset text-modal">
                        <div class="uk-margin-small">
                          <h6 class="blog-card__title">ข้อมูลทั่วไป</h6>
                        </div>
                        <div class="uk-width-1-1 uk-margin-small">
                          <label class="uk-form-label" for="email">อีเมล์<span class="text-danger">*</span></label>
                          <input class="uk-input" type="email" id="inputEmai" placeholder="example@email.com">
                        </div>
                        <div class="uk-width-1-1 uk-margin-small">
                          <label class="uk-form-label" for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                          <input class="uk-input" type="text" id="inputpassword" placeholder="********">
                        </div>
                        <label class="uk-form-label" for="repassword"><a class="text-danger" href="#modal-center-resetpass" uk-toggle>เปลี่ยนรหัสผ่าน</a> </label>
                        <div class="uk-width-1-1 uk-margin-small">
                          <label class="uk-form-label" for="phone">เบอร์โทรศัพท์<span class="text-danger">*</span></label>
                          <input class="uk-input" type="text" id="phone" placeholder="เบอร์โทรศัพท์">
                        </div>

                        <div class="uk-card uk-card-default uk-card-body uk-margin-top uk-text-center">
                          <p class="uk-heading-line uk-text-center"> <span>แต้มสะสมของคุณ</span> </p>
                          <p>วันที่ 1/01/2564-31/12/2564</p>
                          <p class="uk-badge listing_badge">50</p>
                        </div>
                      </fieldset>
                    </div>
                    <div class="uk-width-2-3@m">
                      <div class="uk-margin">
                        <h6 class="blog-card__title">ข้อมูลที่อยู่</h6>
                        <div class="uk-margin">
                          <div class="uk-grid uk-grid-medium uk-child-width-1-2@xl" uk-grid>
                            <div>
                              <label class="uk-form-label" for="name">ชื่อ<span class="text-danger">*</span></label>
                              <input class="uk-input" type="text" id="name" placeholder="ชื่อ">
                            </div>
                            <div>
                              <label class="uk-form-label" for="name-2">นามสกุล<span class="text-danger">*</span></label>
                              <input class="uk-input" type="text" id="name-2" placeholder="นามสกุล">
                            </div>
                          </div>
                        </div>
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
                            <label for="inputAddressDetail" class="label">จุดสังเกตที่อยู่</label>
                            <textarea id="inputAddressDetail" type="text" name="inputAddressDetail" maxlength="200" placeholder="บอกเรา (เพิ่มเติม) เช่น ใกล้กับ ..." class="uk-textarea" rows="5">
                          </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="uk-margin text-align">
                    <a class="uk-button uk-button-primary uk-margin-right text-white" type="button">บันทึกข้อมูล</a>
                    <a class="uk-button uk-button-white " type="button">ล้างข้อมูล</a>
                  </div>
                </div>
                <!-- Tab panes 2 -->
                <div role="tabpane2" id="tabs-2" data-toggle="tab" class="section-listing-slider tab-pane">
                  <div class="uk-position-relative wishlist-box">
                    <div class="best-seller">
                      <ul class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-5@m">
                        <li class="pb-20">
                          <?php include('../view/item-card-color_red_wishlist.php'); ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Tab panes 3 -->
                <div role="tabpane3" id="tabs-3" data-toggle="tab" class="section-listing-slider tab-pane">
                  <h3 class="text-extra-large">รายการสั่งซื้อทั้งหมด</h3>
                  <div class="billing-footer">
                    <table class="uk-table uk-table-divider">
                      <thead>
                        <tr>
                          <td class="uk-width-small">ลำดับ</td>
                          <td>วันที่</td>
                          <td>เลขที่ใบสั่งซื้อ</td>
                          <td>ยอดรวม</td>
                          <td>สถานะ</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#1</td>
                          <td>15/07/2564</td>
                          <td><a href="#!">#ORD0215488</a></td>
                          <td>165.00 THB</td>
                          <td><span class="uk-badge status_badge -primary">รอยืนยันชำระเงิน</span></td>
                        </tr>
                        <tr>
                          <td>#2</td>
                          <td>15/07/2564</td>
                          <td><a href="#!">#ORD0215488</a></td>
                          <td>165.00 THB</td>
                          <td><span class="uk-badge status_badge -primary">รอยืนยันชำระเงิน</span></td>
                        </tr>
                        <tr>
                          <td>#3</td>
                          <td>15/07/2564</td>
                          <td><a href="#!">#ORD0215488</a></td>
                          <td>165.00 THB</td>
                          <td><span class="uk-badge status_badge -success">ชำระเงินแล้ว</span></td>
                        </tr>
                        <tr>
                          <td>#4</td>
                          <td>15/07/2564</td>
                          <td><a href="#!">#ORD0215488</a></td>
                          <td>165.00 THB</td>
                          <td><span class="uk-badge status_badge -warning">ดำเนินการจัดส่ง</span></td>
                        </tr>
                        <tr>
                          <td>#5</td>
                          <td>15/07/2564</td>
                          <td><a href="#!">#ORD0215488</a></td>
                          <td>165.00 THB</td>
                          <td><span class="uk-badge status_badge -danger">ยกเลิก</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /Tab panes -->
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