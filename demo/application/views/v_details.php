<section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                <h3 class="text-center">สมัครสมาชิกใหม่</h3>
                <form action="<?= base_url() ?>Main/get_form" role="form" id="register-form" method="post" autocomplete="off">
                    <div class="card-body">
                        <div class="row">
                            <h4>ข้อมูลส่วนตัว</h4>
                            <div class="col-md-6">
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">ชื่อ</label>
                                    <input class="form-control" aria-label="First Name..." type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">นามสกุล</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Last Name..." name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a>เพศ</a>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="male">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        ชาย
                                    </label>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="female">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        หญิง
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">อายุ</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Last Name..." name="age">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">เบอร์โทรศัพท์</label>
                                    <input class="form-control" aria-label="First Name..." type="text" name="mobilephone">
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">อีเมล</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Last Name..." name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4>ข้อมูลรหัส</h4>
                            <div>
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">Username</label>
                                    <input class="form-control" aria-label="First Name..." type="text" name="u_id">
                                </div>
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" aria-label="First Name..." type="text" name="u_password">
                                </div>
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">Confirm Password</label>
                                    <input class="form-control" aria-label="First Name..." type="text" name="u_cpassword">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check form-switch mb-4 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                                    <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">ยอมรับเงื่อนไข <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn bg-gradient-dark w-100">สมัคร</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>