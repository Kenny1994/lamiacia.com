<div class="page-header">
    <h3 class="page-title">
        <?php echo $catalog->name?> (ID: <?php echo $catalog->id?> )
    </h3>
</div>
<div class="row">
    <div class="col-xl-10 col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form id="add-new-form" class="forms-sample" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <p class="card-description border-bottom">
                            Category Information
                        </p>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Category Name<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" id="name" placeholder="Enter category name"
                                       type="text" value="<?php echo $catalog->name ?>">
                                <div class="text-danger"><?php echo form_error('name') ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sort_order" class="col-sm-3 col-form-label">Position<span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="sort_order" id="sort_order"
                                       placeholder="Enter category position" type="text"
                                       value="<?php echo $catalog->sort_order ?>">
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
                                        <option value="<?php echo $parent->id; ?>" <?php echo ($parent->id == $catalog->parent_id) ? 'selected' : ''; ?>><?php echo $parent->name; ?></option>
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
                                       placeholder="Enter Meta Title" type="text"
                                       value="<?php echo $catalog->site_title ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_desc" class="col-sm-3 col-form-label">Meta Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="meta_desc" id="meta_desc"
                                       placeholder="Enter Meta Description" type="text"
                                       value="<?php echo $catalog->meta_desc ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_key" class="col-sm-3 col-form-label">Meta Key</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="meta_key" id="meta_key"
                                       placeholder="Enter Meta Key" type="text"
                                       value="<?php echo $catalog->meta_key ?>">
                            </div>
                        </div>
                        <a href="<?php echo get_admin_url('catalog') ?>" class="btn btn-light mr-2"><-- Back</a>
                        <a id="delete-catalog" href="<?php echo get_admin_url('catalog/delete/' . $catalog->id) ?>"
                           class="btn btn-light" data-toggle="modal" data-target="#myModal">Delete</a>
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
                <a href="<?php echo get_admin_url('catalog/delete/' . $catalog->id) ?>" class="btn btn-gradient-info btn-fw">Ok</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

