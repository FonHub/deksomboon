<div class="uk-width-1-1@m">
    <form>
        <fieldset class="uk-fieldset text-modal">
            <div class="uk-flex uk-flex-between uk-margin-small hr-soft-secondary ">
                <legend class="uk-legend login__title">เข้าสู่ระบบ</legend>
                <div class="button-singin">
                    <a class="" href="register.php"> สมัครสมาชิก</span></a>
                </div>
            </div>
            <div class="uk-width-1-1 uk-margin-small">
                <label class="uk-form-label">อีเมล์<span class="text-danger">*</span></label>
                <input class="uk-input" type="text" placeholder="example@email.com">
            </div>
            <div class="uk-width-1-1 uk-margin-small">
                <label class="uk-form-label" for="password">รหัสผ่าน<span class="text-danger">*</span></label>
                <div class="uk-margin-small">
                    <label class="sr-only" for="password">Password</label>
                    <div class="uk-input">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-eye-slash" id="eye"></i>
                                <input type="password" class="putpassword" id="password" placeholder="Type Your Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-flex-between uk-grid">
                <label class="uk-form-label" for="remember"><input class="uk-radio" type="radio" name="radio2" checked> จดจำบัญชีนี้</label>
                <label class="uk-form-label" for="repassword"><a class="text-danger" href="#modal-center-resetpass" uk-toggle>ลืมรหัสผ่าน</a> </label>
            </div>
            <div class="uk-width-1-1 uk-margin-small page-header__btn ">
                <a class="uk-button uk-button-danger uk-width-expand font-175rem" href="#"> เข้าสู่ระบบ</span></a>
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