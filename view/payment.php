<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ชำระเงิน</title>
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
        <li class="uk-disabled"><a>ชำระเงิน</a></li>
      </ul>
      <div class="page cart block-color">
        <div class="uk-section-large uk-container uk-container-large">
          <div class="step-wrapper uk-padding">
            <div class="step-item -is-active">
              <div class="step-circle"></div>
              <div class="step-label">
                สรุปรายการสั่งซื้อ
              </div>
            </div>
            <div class="step-item -is-active">
              <div class="step-circle"></div>
              <div class="step-label">
                เลือกวิธีการชำระเงิน
              </div>
            </div>
            <div class="step-item">
              <div class="step-circle"></div>
              <div class="step-label">
                สั่งซื้อสำเร็จ
              </div>
            </div>
          </div>
          <h3 class="text-redh3">กรุณาเลือกวิธีการชำระเงิน</h3>
          <div class="uk-flex uk-flex-center">
            <div class="">
              <div class="payment-method-list">
                <div class="payment-method-icon-1">
                  <div class="mb-20">
                    <img src="../assets/img/icon/icon-payment-1.png" class="icon-payment">
                  </div>
                  <div>
                    <h3 class="text-extra-large">Direct bank transfer</h3>
                    <p class="text-grey-4 text-medium ">ชำระผ่านบัตรเครดิต / เดบิต</p>
                  </div>
                  <a class="uk-button uk-button-white" href="#!"><label><input class="uk-radio" type="radio" name="radio1"> เลือก </label></a>
                </div>
              </div>
            </div>
            <div>
              <div class="payment-method-list">
                <div class="payment-method-icon-2">
                  <div class="mb-20">
                    <img src="../assets/img/icon/icon-payment-2.png" class="icon-payment">
                  </div>
                  <div>
                    <h3 class="text-extra-large">QR Code payments</h3>
                    <p class="text-grey-4 text-medium ">ชำระผ่านระบบ QR Code </p>
                  </div>
                  <a class="uk-button uk-button-white" type="button" uk-toggle="target: #toggle-animation-multiple; animation:  uk-animation-slide-left, uk-animation-slide-bottom" aria-expanded="false">
                    <label><input class="uk-radio" type="radio" name="radio2"> เลือก </label></a>
                </div>
              </div>
            </div>
            <div>
              <div class="payment-method-list" style="display: none;">
                <div class="payment-method-icon-3">
                  <div class="mb-20">
                    <img src="../assets/img/icon/icon-payment-3.png" class="icon-payment">
                  </div>
                  <div>
                    <h3 class="text-extra-large">PayPal</h3>
                    <p class="text-grey-4 text-medium ">ชำระผ่านระบบ PayPal</p>
                  </div>
                  <a class="uk-button uk-button-white" href="#!"><label><input class="uk-radio" type="radio" name="radio3"> เลือก </label></a>
                </div>
              </div>
            </div>

          </div>
          <div class="uk-container">
            <div id="toggle-animation-multiple" class="uk-card uk-card-default uk-card-body uk-margin-small" hidden>
              <div class="mb-20 text-align">
                <img src="../assets/img/icon/qrcode-payment-2.png">
              </div>
              <div class="uk-width-1-1" uk-form-custom>
                <div class="uk-inline uk-width-1-1">
                  <input type="file">
                  <span class="uk-form-icon-resume">รูปสลิปโอนเงิน :</span>
                  <button class="uk-button uk-button-default uk-input" type="button" tabindex="-1">อัพโหลด </button>
                  <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: plus"></span>
                </div>
              </div>
              <div class="uk-alert-success mb-20 " uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>อัพโหลดเรียบร้อย</p>
              </div>
              <div class=" uk-flex uk-flex-center">
                <a class="uk-button uk-button-white ma-20 text-align" href="payment-success.php">ดำเนินการต่อ</a>
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
      <script>
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
      </script>
    </main>
  </div>

</body>

</html>