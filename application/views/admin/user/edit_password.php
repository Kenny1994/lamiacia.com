<div class="page-header">
    <h3 class="page-title">
        Change admin password form
    </h3>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pill this form to change the admin password.</h4>
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group row">
                            <label for="new_password" class="col-sm-3 col-form-label">New Password<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="new_password" id="new_password"
                                       placeholder="Enter the new password" type="password">
                                <div class="text-danger"><?php echo form_error('new_password') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="re_new_password" class="col-sm-3 col-form-label">Re-New Password<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="re_new_password" id="re_new_password"
                                       placeholder="Re-Enter the new password"
                                       type="password">
                                <div class="text-danger"><?php echo form_error('re_new_password') ?></div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Submit">
                        <a href="<?php echo get_admin_url('user') ?>" class="btn btn-light">Back</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

