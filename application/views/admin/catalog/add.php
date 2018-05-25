<div class="page-header">
    <h3 class="page-title">
        New Category
    </h3>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <p class="card-description border-bottom">
                            Category Information
                        </p>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Category Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Enter category name"
                                       type="text" value="<?php echo set_value('name') ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sort_order" class="col-sm-3 col-form-label">Position<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="sort_order" id="sort_order"
                                       placeholder="Enter category's position" type="text"
                                       value="<?php echo set_value('sort_order') ?>">
                                <div class="text-danger"><?php echo form_error('sort_order') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parent_id" class="col-sm-3 col-form-label">Category Parent<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="0">Parent</option>
                                    <?php foreach ($collection as $parent): ?>
                                        <option value="<?php echo $parent->id; ?>"><?php echo $parent->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <p class="card-description border-bottom">
                            Search Engine Optimization
                        </p>
                        <div class="form-group row">
                            <label for="site_title" class="col-sm-3 col-form-label">Meta Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="site_title" id="site_title"
                                       placeholder="Enter meta title" type="text"
                                       value="<?php echo set_value('site_title') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_desc" class="col-sm-3 col-form-label">Meta Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="meta_desc" id="meta_desc"
                                       placeholder="Enter meta description" type="text"
                                       value="<?php echo set_value('meta_desc') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_key" class="col-sm-3 col-form-label">Meta Key</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="meta_key" id="meta_key"
                                       placeholder="Enter meta key" type="text"
                                       value="<?php echo set_value('meta_key') ?>">
                            </div>
                        </div>
                        <a href="<?php echo get_admin_url('catalog') ?>" class="btn btn-light mr-2"><-- Back</a>
                        <input type="submit" class="btn btn-gradient-primary mr-2" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

