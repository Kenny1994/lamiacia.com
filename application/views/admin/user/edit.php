
<div class="page-header">
    <h3 class="page-title">
        Account Information
    </h3>
</div>
<div class="row">
    <div class="col-xl-10 col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">User Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="username" id="username" placeholder="Enter user name" type="text" value="<?php echo $user->username ?>">
                                <div class="text-danger"><?php echo form_error('username') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Full Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Enter your full name" type="text" value="<?php echo $user->name ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="email" id="email" placeholder="Enter your email" type="text" value="<?php echo $user->email ?>">
                                <div class="text-danger"><?php echo form_error('email') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="phone" id="phone" placeholder="Enter your phone number" type="text" value="<?php echo $user->phone ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="address" id="address" placeholder="Enter your address" type="text" value="<?php echo $user->address ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="new_password" id="new_password"
                                       placeholder="Enter the new password" type="password">
                                <div class="text-danger"><?php echo form_error('new_password') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="re_new_password" class="col-sm-3 col-form-label">Password Confirmation</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="re_new_password" id="re_new_password"
                                       placeholder="Re-Enter the new password"
                                       type="password">
                                <div class="text-danger"><?php echo form_error('re_new_password') ?></div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Submit">
                        <a href="<?php echo get_admin_url('user')?>" class="btn btn-light">Back</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

