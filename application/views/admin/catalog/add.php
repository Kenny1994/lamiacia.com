<div class="page-header">
    <h3 class="page-title">
        Thêm mới danh mục sản phẩm.
    </h3>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nhập form thêm mới danh mục sản phẩm.</h4>
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">Tên danh mục<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Nhập tên danh mục"
                                       type="text" value="<?php echo set_value('name') ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sort_order" class="col-sm-3 col-form-label">Thứ tự hiển thị<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="sort_order" id="sort_order"
                                       placeholder="Nhập thứ tự hiển thị danh mục" type="text"
                                       value="<?php echo set_value('sort_order') ?>">
                                <div class="text-danger"><?php echo form_error('sort_order') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sort_order" class="col-sm-3 col-form-label">Danh mục cha<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" id="sort_order" name="sort_order">
                                    <option value="0">Danh mục gốc</option>
                                    <?php foreach ($collection as $parent): ?>
                                        <option value="<?php echo $parent->id; ?>"><?php echo $parent->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_title" class="col-sm-3 col-form-label">Tiêu đề title</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="site_title" id="site_title"
                                       placeholder="[SEO] Nhập site title cho danh mục" type="text"
                                       value="<?php echo set_value('site_title') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_desc" class="col-sm-3 col-form-label">Meta Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="meta_desc" id="meta_desc"
                                       placeholder="[SEO] Nhập Meta Desc cho danh mục" type="text"
                                       value="<?php echo set_value('meta_desc') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_key" class="col-sm-3 col-form-label">Meta Key</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="meta_key" id="meta_key"
                                       placeholder="[SEO] Nhập Meta Key cho danh mục" type="text"
                                       value="<?php echo set_value('meta_key') ?>">
                            </div>
                        </div>

                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Đồng ý">
                        <a href="<?php echo get_admin_url('catalog') ?>" class="btn btn-light mr-2">Trở về</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

