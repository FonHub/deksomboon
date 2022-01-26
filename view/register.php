<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>สมัครสมาชิก</title>
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
                <li class="uk-disabled"><a>สมัครสมาชิก</a></li>
            </ul>
            <div class="page cart block-color">
                <div class="uk-section-large uk-container uk-container-large">
                    <div class="uk-flex uk-flex-center ">
                        <div class="uk-width-1-2@m">
                            <div class="uk-width-1-1@m">
                                <form>
                                    <fieldset class="uk-fieldset text-modal">
                                        <div class="uk-flex uk-flex-between uk-margin-small hr-soft-secondary ">
                                            <legend class="uk-legend login__title">สมัครสมาชิก</legend>
                                            <div class="button-singin">
                                                <a class="text-large" href="login.php"> มีบัญชีสมาชิกแล้ว, เข้าสู่ระบบ</span></a>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small">
                                            <label class="uk-form-label" for="email">อีเมล์<span class="text-danger">*</span></label>
                                            <input class="uk-input" type="email" id="inputEmai" placeholder="example@email.com">
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small">
                                            <label class="uk-form-label" for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                                            <input class="uk-input" type="text" id="inputpassword" placeholder="********">
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small">
                                            <label class="uk-form-label" for="inputpassword-2">ยืนยันรหัสผ่าน<span class="text-danger">*</span></label>
                                            <input class="uk-input" type="text" id="inputpassword-2" placeholder="********">
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small">
                                            <label class="uk-form-label" for="name">ชื่อ<span class="text-danger">*</span></label>
                                            <input class="uk-input" type="text" id="name" placeholder="ชื่อ">
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small">
                                            <label class="uk-form-label" for="name-2">นามสกุล<span class="text-danger">*</span></label>
                                            <input class="uk-input" type="text" id="name-2" placeholder="นามสกุล">
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small page-header__btn ">
                                            <a class="uk-button uk-button-danger uk-width-expand font-175rem" href="#"> ลงทะเบียน</span></a>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small option-sep">หรือ</div>
                                        <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                            <div class="uk-margin-small mt-md-10 ">
                                                <a class="uk-button uk-width-expand btn-fb" href="#">
                                                    <span class="icon-label" uk-icon="facebook" style="color: #fff;"></span>เข้าสู่ระบบผ่านบัญชี facebook
                                                </a>
                                            </div>
                                            <div class="uk-margin-small">
                                                <a class="uk-button uk-width-expand btn-gl" href="#">
                                                    <span class="icon-label" uk-icon="google" style="color: #fff;"></span>เข้าสู่ระบบผ่านบัญชี gmail</span>
                                                </a>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- footer -->
            <?php include('footer.php'); ?>
            <!-- /footer -->

            <!--reset-password -->
            <?php include('resetpass.php'); ?>



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