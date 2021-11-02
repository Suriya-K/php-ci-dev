<section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                <h3 class="text-center">ข้อมูลการสมัครสมาชิกใหม่</h3>
                <form role="form" id="register-form" method="post" autocomplete="off">
                    <div class="card-body">
                        <div class="row">
                            <h4>ข้อมูลส่วนตัว</h4>
                            <div class="col-md-6">
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">ชื่อ</label>
                                    <input class="form-control" aria-label="First Name..." placeholder="<?= $first_name ?>" type="text" name="first_name" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">นามสกุล</label>
                                    <input type="text" class="form-control" placeholder="<?= $last_name ?>" aria-label="Last Name..." name="last_name" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ps-2">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">อายุ</label>
                                <input type="text" class="form-control" placeholder="<?= $age ?>" aria-label="Last Name..." name="age" disabled>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" placeholder="<?= $address ?>" name="address" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">เบอร์โทรศัพท์</label>
                                    <input class="form-control" aria-label="First Name..." type="text" placeholder="<?= $mobilephone ?>" name="mobilephone" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">อีเมล</label>
                                    <input type="text" class="form-control" placeholder="<?= $email ?>" aria-label="Last Name..." name="email" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4>ข้อมูลรหัส</h4>
                            <div>
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">Username</label>
                                    <input class="form-control" aria-label="First Name..." type="text" placeholder="<?= $u_id ?>" name="u_id" disabled>
                                </div>
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" aria-label="First Name..." type="text" placeholder="<?= $u_password ?>" name="u_password" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
</section>