<div class="page-header">
    <h3 class="page-title">
        Thêm mới quản trị viên.
    </h3>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nhập form thêm quản trị viên.</h4>
                <form id="add-new-user-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">User Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="username" id="username" placeholder="Nhập user name" type="text" value="<?php echo set_value('username') ?>">
                                <div class="text-danger"><?php echo form_error('user') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="password" placeholder="Nhập password" type="password" value="<?php echo set_value('password') ?>">
                                <div class="text-danger"><?php echo form_error('password') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="re-password" class="col-sm-3 col-form-label">Re-Password<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="re-password" placeholder="Nhập lại password" type="password" value="<?php echo set_value('re-password') ?>">
                                <div class="text-danger"><?php echo form_error('re_password') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Tên người dùng<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input name="name" class="form-control" id="name" placeholder="Nhập tên người dùng" type="text" value="<?php echo set_value('name') ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email người dùng<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="email" placeholder="Nhập Email người dùng" type="text" value="<?php echo set_value('email') ?>">
                                <div class="text-danger"><?php echo form_error('email') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="phone" placeholder="Nhập số điện thoại" type="text" value="<?php echo set_value('phone') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="address" placeholder="Nhập địa chỉ" type="text" value="<?php echo set_value('address') ?>">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Đồng ý">
                        <button class="btn btn-light">Trở về</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
