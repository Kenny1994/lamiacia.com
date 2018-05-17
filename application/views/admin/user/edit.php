
<div class="page-header">
    <h3 class="page-title">
        Sửa thông tin quản trị viên.
    </h3>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nhập form sửa thông tin quản trị viên.</h4>
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">User Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="username" id="username" placeholder="Nhập user name" type="text" disabled value="<?php echo $user->username ?>">
                                <div class="text-danger"><?php echo form_error('username') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Tên người dùng<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Nhập tên người dùng" type="text" value="<?php echo $user->name ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email người dùng<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="email" id="email" placeholder="Nhập Email người dùng" type="text" disabled value="<?php echo $user->email ?>">
                                <div class="text-danger"><?php echo form_error('email') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" type="text" value="<?php echo $user->phone ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" type="text" value="<?php echo $user->address ?>">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Đồng ý">
                        <a href="<?php echo get_admin_url('user')?>" class="btn btn-light">Trở về</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

