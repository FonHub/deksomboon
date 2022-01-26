<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>คาเฟ่</title>
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
        <li class="uk-disabled"><a>คาเฟ่</a></li>
      </ul>
      <!-- icon category -->
      <?php include('cafe-category.php'); ?>
      <!-- /icon category -->

      <!-- cafe -->
      <div class="block-color pb-30">
        <?php include('../view/cafe-food.php'); ?>
        <?php include('../view/cafe-drink.php'); ?>
        <?php include('../view/cafe-dessert.php'); ?>
      </div>
      <!-- /cafe -->

      <!-- footer -->
      <?php include('footer.php'); ?>
      <!-- /footer -->




      <!-- sing-in  -->
      <?php include('sing-in.php'); ?>
      <!-- script  -->
      <?php include('script.php'); ?>

    </main>
  </div>

</body>

</html>