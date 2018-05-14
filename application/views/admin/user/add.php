<?php $this->load->view('admin/admin/header', $this->data) ?>

<div class="wrapper">

    <!-- Form -->
    <form class="form" id="form" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img src="<?php echo base_url('assets/admin') ?>/images/icons/dark/add.png" class="titleIcon">
                    <h6>Thêm mới quản trị viên</h6>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text"
                                                    value="<?php echo set_value('name') ?>"></span>
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_user">User:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input name="user" id="param_user" _autocheck="true" type="text"
                                                    value="<?php echo set_value('user') ?>"></span>
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"><?php echo form_error('user') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_password">Password:<span class="req">*</span></label>
                    <div class="formRight">
                        <span class="oneTwo"><input name="password" id="param_password" _autocheck="true"
                                                    type="password" value="<?php echo set_value('password') ?>"></span>
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"><?php echo form_error('password') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_re_password">Re-Password:<span class="req">*</span></label>
                    <div class="formRight">
                                <span class="oneTwo"><input name="re_password" id="param_re_password" _autocheck="true"
                                                            type="password"
                                                            value="<?php echo set_value('re_password') ?>"></span>
                        <span name=" name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"><?php echo form_error('re_password') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_email">Email:</label>
                    <div class="formRight">
                        <span class="oneTwo"><input name="email" id="param_email" _autocheck="true" type="text"
                                                    value="<?php echo set_value('email') ?>"></span>
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"><?php echo form_error('email') ?></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_phone">Phone:</label>
                    <div class="formRight">
                        <span class="oneTwo"><input name="phone" id="param_phone" _autocheck="true" type="text"
                                                    value="<?php echo set_value('phone') ?>"></span>
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label class="formLeft" for="param_address">Address:</label>
                    <div class="formRight">
                        <span class="oneTwo"><input name="address" id="param_address" _autocheck="true"
                                                    type="text" value="<?php echo set_value('address') ?>"></span>
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- End tab_container-->

                <div class="formSubmit">
                    <input value="Thêm mới" class="redB" type="submit">
                    <!--                    <input value="Hủy bỏ" class="basic" type="reset">-->
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
    </form>
</div>

<div class="clear mt30"></div>
