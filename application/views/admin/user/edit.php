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
                        <p class="card-description border-bottom">
                            Personal Info
                        </p>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">User Name<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="username" id="username" placeholder="Enter user name"
                                       type="text" value="<?php echo (set_value('username')) ?: $user->username ?>">
                                <div class="text-danger"><?php echo form_error('username') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Full Name<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Enter your full name"
                                       type="text" value="<?php echo (set_value('name')) ?: $user->name ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="email" id="email" placeholder="Enter your email"
                                       type="text" value="<?php echo (set_value('email')) ?: $user->email ?>">
                                <div class="text-danger"><?php echo form_error('email') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="phone" id="phone"
                                       placeholder="Enter your phone number" type="text"
                                       value="<?php echo (set_value('phone')) ?: $user->phone ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="address" id="address" placeholder="Enter your address"
                                       type="text" value="<?php echo (set_value('address')) ?: $user->address ?>">
                            </div>
                        </div>
                        <p class="card-description border-bottom">
                            Account Password Information
                        </p>
                        <div class="form-group row">
                            <label for="new_password" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="new_password" id="new_password"
                                       placeholder="Enter the new password" type="password"
                                       value="<?php echo set_value('new_password') ?>">
                                <div class="text-danger"><?php echo form_error('new_password') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="re_new_password" class="col-sm-3 col-form-label">Password Confirmation</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="re_new_password" id="re_new_password"
                                       placeholder="Re-Enter the new password"
                                       type="password" value="<?php echo set_value('re_new_password') ?>">
                                <div class="text-danger"><?php echo form_error('re_new_password') ?></div>
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
                        <a href="<?php echo get_admin_url('user') ?>" class="btn btn-light"><-- Back</a>
                        <a id="delete-user" href="#"
                           class="btn btn-light">Delete</a>
                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p>Are you sure you want to do this?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo get_admin_url('user/delete/' . $user->id) ?>" class="btn btn-gradient-info btn-fw">Ok</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#delete-user').on('click', function () {

            $.ajax({
                type: "POST",
                url: '<?php echo get_admin_url('user/validate_delete')?>',
                dataType: 'json',
                data: {
                    password: $('#current_password').val(),
                    user_id: <?php echo $user_info->id ?>
                },

                success: function (result) {
                    $('#current_password').parent().find('.text-danger').html(result.error_message);
                    if (result.status == 'ok') {
                        $('#myModal').modal('show');
                    }
                }
            });
        });
    });
</script>