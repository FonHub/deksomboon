<div class="uk-position-relative background-white pa-10 __flewrow">
    <div class="__showoff ">
        <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip">ค้นหาแบบละเอียด</button>
    </div>
    <div class="uk-flex uk-flex-right ">
        <label class="uk-form-label" for="form-horizontal-select">เรียงตาม :</label>
        <div class="uk-form-controls">
            <select class="uk-select listing_select" id="form-horizontal-select">
                <option>ใหม่-เก่า</option>
                <option>เก่า-ใหม่</option>
            </select>
        </div>
    </div>
</div>

<!-- offcanvas right -->
<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <!-- sidebar -->
        <?php include('sidebar-search.php'); ?>

    </div>
</div>