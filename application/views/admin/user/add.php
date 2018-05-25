<div class="page-header">
    <h3 class="page-title">
        New User
    </h3>
</div>
<div class="row">
    <div class="col-xl-10 col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <p class="card-description border-bottom">
                            Personal Info
                        </p>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">User Name<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="username" id="username" placeholder="Enter user name"
                                       type="text" value="<?php echo set_value('username') ?>">
                                <div class="text-danger"><?php echo form_error('username') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Full Name<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Enter your full name"
                                       type="text" value="<?php echo set_value('name') ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="email" id="email" placeholder="Enter your email"
                                       type="text" value="<?php echo set_value('email') ?>">
                                <div class="text-danger"><?php echo form_error('email') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="phone" id="phone"
                                       placeholder="Enter your phone number"
                                       type="text" value="<?php echo set_value('phone') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="address" id="address" placeholder="Enter your address"
                                       type="text" value="<?php echo set_value('address') ?>">
                            </div>
                        </div>
                        <p class="card-description border-bottom">
                            Account Password Information
                        </p>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="password" id="password"
                                       placeholder="Enter your password"
                                       type="password" value="<?php echo set_value('password') ?>">
                                <div class="text-danger"><?php echo form_error('password') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="re-password" class="col-sm-3 col-form-label">Re-Password<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="re-password" id="re-password"
                                       placeholder="Re-Enter your password" type="password"
                                       value="<?php echo set_value('re-password') ?>">
                                <div class="text-danger"><?php echo form_error('re-password') ?></div>
                            </div>
                        </div>
                        <p class="card-description border-bottom">
                            Current User Identity Verification
                        </p>
                        <div class="form-group row">
                            <label for="current_password" class="col-sm-3 col-form-label">Your Password<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="current_password" id="current_password"
                                       placeholder="Enter current user password"
                                       type="password">
                                <div class="text-danger"><?php echo form_error('current_password') ?></div>
                            </div>
                        </div>
                        <a href="<?php echo get_admin_url('user') ?>" class="btn btn-light mr-2"><-- Back</a>
                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

