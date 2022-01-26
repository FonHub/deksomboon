<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>หน้าหลัก</title>
  <meta content name="author">
  <meta content="Ecata - City Portal" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta pcontent="ซอสปรุงรส ออร์แกนิค ขนาด 300 มล. ตราเด็กสมบูรณ์">
  <meta property="og:description" content="ซอสปรุงรสคุณภาพชั้นเยี่ยมที่คัดสรรอย่างดี ผลิตจากถั่วเหลือง ข้าวสาลี และวัตถุดิบออแกร์นิค 100 % มั่นใจในคุณภาพและความปลอดภัย ได้รับมาตรฐานออร์แกนิคจากสหภาพยุโรป หมักบ่มด้วยวิธีธรรมชาติรสชาติ นานกว่า 8 เดือน คุณสมบัติ ใช้ส่วนผสมที่่เป็นออแกร์นิค 100% ผ่านการรับรองตามมาตรฐานยุโรป เป็นสูตร 3 no. คือ 1. No Preservative 2. No Artificial Colour 3. No MSG เมนูแนะนำ ใช้ปรุงอาหารได้รสชาติความอร่อยดั้งเดิม กลมกล่อม หอมอร่อย เหมาะสำหรับผู้รักสุขภาพ หรือเมนูอาหารเพื่อสุขภาพ ​​Shelf Life 18 เดือน หลังเปิดแล้วควรเก็บในตู้เย็น">
  <?php include('head-link.php'); ?>
  <!-- slider home -->
  <link rel="stylesheet" href="../vendors/slick/slick.css" />
  <link rel="stylesheet" href="../vendors/slick/slick-theme.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

  <style type="text/css">
    .slick-prev:before,
    .slick-next:before {
      color: black;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

    .slick-next {
      right: 25px !important;
    }

    .slick-prev {
      left: 25px !important;
      z-index: 1;
    }
  </style>


</head>

<body class="page-home">
  <div class="page-wrapper">
    <?php include('header.php'); ?>
    <main class="page-main">
      <?php include('modal-popup.php'); ?>
      <!-- slide banner home -->
      <?php include('home-slider.php'); ?>
      <!-- /slide banner home -->
      <!-- icon category -->
      <?php include('sec-category.php'); ?>
      <!-- /icon category -->
      <div class="block-color py-50">
        <!-- flash sale -->
        <?php include('flash-sale.php'); ?>
        <!-- SUPER SALE -->
        <?php include('super-sale.php'); ?>
        <!-- /SUPER SALE -->
        <!-- hot-hit-item -->
        <?php include('hot-hit.php'); ?>
        <!-- /hot-hit-item --->
      </div>
      <!-- pro banner -->
      <?php include('pro-banner.php'); ?>
      <!-- /pro banner -->
      <div class="block-color py-50">
        <!-- new product -->
        <?php include('new-product.php'); ?>
        <!-- /new product -->
        <!-- recommen product -->
        <?php include('recommen-product.php'); ?>
        <!-- /recommen product -->
        <!-- best-seller product -->
        <?php include('best-seller.php'); ?>
        <!-- /best-seller product -->
      </div>
      <!-- pro banner -->
      <?php include('banner-service.php'); ?>
      <!-- /pro banner -->
      <!-- Recipe list -->
      <?php include('recipe-list.php'); ?>
      <!-- /Recipe list -->
      <!-- Recipe ingredients list -->
      <?php include('recipe-ingre.php'); ?>
      <!-- /Recipe ingredients list -->
      <!-- video list -->
      <?php include('video-list.php'); ?>
      <!-- /video list -->
      <div class="block-color">
        <!-- activity list -->
        <?php include('activity-list.php'); ?>
        <!-- /activity list -->
      </div>

      <!-- footer -->
      <?php include('footer.php'); ?>
      <!-- /footer -->

      <!-- chat -->
      <?php include('chat.php'); ?>
      <!-- /chat -->








      <!-- sing-in  -->
      <?php include('sing-in.php'); ?>
      <!-- script  -->
      <?php include('script.php'); ?>



    </main>
  </div>
  <!-- slick slider home  -->
  <script type="text/javascript">
    jQuery("#slideshome").ready(function() {
      var images = jQuery('.imagessl');

      images.slick({
        slidesToShow: 1,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
      }).on("afterChange", function(e, slick) {
        var slideTime = jQuery('div[data-slick-index="' + slick.currentSlide + '"]').data("timer");
        images.slick("setOption", "autoplaySpeed", slideTime);
      });
    });
  </script>

</body>

</html>