<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>สอนทำอาหาร</title>
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
      <div class="section-banner">
        <div class="section-banner__bg" style="background-image: url(../assets/img/banner-breadcrumb/breadcrumb-2.png)">
          <div class="uk-container">
            <div class="section-banner__content">
              <div class="uk-grid uk-child-width-auto@m uk-flex-bottom" data-uk-grid>
                <div class="uk-width-expand@m">
                  <div class="section-banner__breadcrumb">
                    <ul class="uk-breadcrumb">
                      <li><a href="#">หน้าแรก</a></li>
                    </ul>
                  </div>
                  <div class="section-banner__title">สอนทำอาหาร</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Recipe cat -->
      <?php include('recipe-listall.php'); ?>
      <!-- /Recipe cat -->

      <!-- Recipe  list-->
      <div class="uk-container-expand">
        <div class="uk-grid " data-uk-grid>
          <div class="uk-width-1-1@m">
            <!-- Recipe ingredients list -->
            <?php include('recipe-ingre.php'); ?>
            <!-- /Recipe ingredients list -->
          </div>
          <!-- product info list -->
          <div class="uk-width-1-1@m block-color pb-xl-40">
            <!-- pro banner -->
            <?php include('pro-banner.php'); ?>
            <!-- /pro banner -->
            <!-- video list -->
            <?php include('video-list.php'); ?>
            <!-- /video list -->
            <?php include('infoproduct-list.php'); ?>
            <!-- pro banner -->
            <?php include('banner-service.php'); ?>
            <!-- /pro banner -->
          </div>
        </div>
      </div>
      <!-- /product -->

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

    </main>
  </div>

</body>

</html>