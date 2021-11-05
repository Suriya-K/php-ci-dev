<div class="card card-plain">
    <div class="card-body pb-3">
        <form action="<?= base_url() ?>Users/update_data_table/<?= $user_data->id ?>" method="post" role="form text-start">
            <a>แก้ไขข้อมูลผู้ใช้</a>
            <div class="input-group input-group-static mb-4">
                <label>ชื่อ - นามสกุล</label>
                <input type="text" class="form-control" name="name" value="<?= $user_data->name ?>">
            </div>

            <div class="input-group input-group-static mb-4">
                <label>อีเมล</label>
                <input type="text" class="form-control" name="email" value="<?= $user_data->email ?>">
            </div>

            <div class="input-group input-group-static mb-4">
                <label>ตำแหน่ง</label>
                <input type="text" class="form-control" name="head_position" value="<?= $user_data->head_position ?>">
            </div>
            <div class="input-group input-group-static mb-4">
                <label>ตำแหน่งรอง</label>
                <input type="text" class="form-control" name="sub_position" value="<?= $user_data->sub_position ?>">
            </div>
            <div class="input-group input-group-static mb-4">
                <label>เงินเดือน</label>
                <input type="text" class="form-control" name="salary" value="<?= $user_data->salary ?>">
            </div>
            <div class="input-group input-group-static mb-4">
                <label>สถานะ</label>
                <input type="text" class="form-control" name="status" value="<?= $user_data->status ?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">แก้ไข</button>
            </div>
            <div class="text-center">
                <a href="<?php base_url() ?>">
                    <button type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0">ยกเลิก</button>
                </a>
            </div>
        </form>
    </div>
</div>