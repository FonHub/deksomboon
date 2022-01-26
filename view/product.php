<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>สินค้า</title>
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
        <li class="uk-disabled"><a>ผลิตภัณฑ์ทั้งหมด</a></li>
      </ul>
      <!-- icon category -->
      <?php include('sec-category.php'); ?>
      <!-- /icon category -->


      <div class="uk-container-expand block-color pb-xl-40">
        <!-- product -->
        <div class="uk-grid uk-padding-large pb-xl-0" data-uk-grid>
          <div class="uk-width-1-6@m uk-visible@s __hidden">
            <!-- sidebar -->
            <?php include('sidebar-search.php'); ?>
          </div>
          <div class="uk-width-4-5@m uk-width-auto@s __maxwidth">
            <?php include('top-search.php'); ?>
            <?php include('sup-product-1.php'); ?>
            <?php include('sup-product-2.php'); ?>
            <?php include('sup-product-3.php'); ?>
          </div>
        </div>
        <!-- /product -->
        <!--uk-pagination-->
        <?php include('uk-pagination.php'); ?>
        <!-- pro banner -->
        <?php include('banner-service.php'); ?>
        <!-- /pro banner -->
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

    </main>
  </div>

</body>

</html>