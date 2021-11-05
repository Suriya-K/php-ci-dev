<!--- CSS --->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<!--- Jquery --->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--- plug in data table --->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<section class="pt-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="py-3 align-items-center row">
                    <small class="text-uppercase text-center font-weight-bold">ตารางรายชื่อผู้ใช้งานในระบบ</small>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                            เพิ่ม
                        </button>
                    </div>
                </div>
                <div class="container">
                    <!---
                    <div class="row justify-space-between py-2">
                        <div class="col-lg-6 mx-auto">
                            <form action="<?= base_url() ?>Users/search_data_table" method="post" role="form text-start">
                                <div class="input-group input-group-dynamic mb-4">
                                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input class="form-control" placeholder="Search" type="text" name="search">
                                </div>
                            </form>
                        </div>
                    </div>
                    --->
                </div>
                <div class="card">
                    <div class="table-responsive">
                        <table id="table_id" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ลำดับ</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ชื่อ-นามสกุล</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ตำแหน่ง</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">เงินเดือน</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">สถานะ</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1;
                                foreach ($users_data as $user) { ?>
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <h6 class="mb-0 text-xs"><?= $index++ ?></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs"><?= $user->name ?></h6>
                                                    <p class="text-xs text-secondary mb-0"><?= $user->email ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $user->head_position ?></p>
                                            <p class="text-xs text-secondary mb-0"><?= $user->sub_position ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $user->salary ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $user->status ?></span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="<?php $base_url ?>update_data_open/<?= $user->id ?>" class="text-secondary text-warning font-weight-bold text-xs">
                                                แก้ไข
                                            </a>
                                            <a href="<?php $base_url ?>delete_data_table/<?= $user->id ?>" class="text-secondary text-danger font-weight-bold text-xs">
                                                ลบ
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>












<!----- Delete Modal ----->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalNotification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header border-0">
                <h6 class="modal-title text-white" id="modal-title-notification">แจ้งเตือน</h6>
                <button type="button" class="btn btn-link text-white my-1" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
            <hr class="horizontal light mt-0">
            <div class="modal-body">
                <div class="py-3 text-center text-white">
                    <i class="material-icons text-3xl">notifications_active</i>
                    <h4 class="heading mt-4 text-white">คุณต้องการลบข้อมูลนี้หรือไม่</h4>
                    <p class="text-white opacity-8">คุณไม่สามารถย้อนกลับการกระทำได้</p>
                </div>
            </div>
            <hr class="horizontal light mb-0">
            <div class="modal-footer justify-content-between border-0">
                <button type="button" class="btn btn-white my-1">ลบ</button>
                <button type="button" class="btn btn-link text-white my-1" data-bs-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalSignup" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-body pb-3">
                        <form action="<?= base_url() ?>Users/insert_data_table" method="post" role="form text-start">
                            <a>เพิ่มข้อมูลผู้ใช้ใหม่</a>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">ชื่อ - นามสกุล</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">อีเมล</label>
                                <input type="text" class="form-control" name="email">
                            </div>

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">ตำแหน่ง</label>
                                <input type="text" class="form-control" name="head_position">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">ตำแหน่งรอง</label>
                                <input type="text" class="form-control" name="sub_position">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">เงินเดือน</label>
                                <input type="text" class="form-control" name="salary">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">สถานะ</label>
                                <input type="text" class="form-control" name="status">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-success w-100 mt-4 mb-0">เพิ่ม</button>
                            </div>
                            <div class="text-center">
                                <a href="<?php base_url() ?>">
                                    <button type="button" class="btn bg-gradient-secondary w-100 mt-4 mb-0">ยกเลิก</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>