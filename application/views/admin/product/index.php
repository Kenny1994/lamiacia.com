<div class="page-header">
    <h3 class="page-title">
        Products
    </h3>
</div>
<?php if (isset($message) && $message): ?>
    <blockquote class="blockquote blockquote-primary">
        <?php echo $message ?>
    </blockquote>
<?php endif; ?>
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Filter products</h4>
            <form class="form-sample" method="get" action="<?php echo get_admin_url('product') ?>">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label for="product_id" class="col-sm-5 col-form-label">ID</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="product_id" id="product_id" type="text"
                                       value="<?php echo $this->input->get('product_id') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-5 col-form-label">Name</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="product_name" id="product_name" type="text"
                                       value="<?php echo $this->input->get('product_name') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Category</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="catalog_id" name="catalog_id">
                                    <option></option>
                                    <?php foreach ($cat_list as $row): ?>
                                        <?php if (count($row->subs) > 1): ?>
                                            <optgroup label="<?php echo $row->name ?>">
                                                <?php foreach ($row->subs as $sub): ?>
                                                    <option value="<?php echo $sub->id ?>" <?php echo ($this->input->get('catalog_id') == $sub->id) ? 'selected' : '' ?>><?php echo $sub->name ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php else: ?>
                                            <option value="<?php echo $row->id ?>" <?php echo ($this->input->get('catalog_id') == $row->id) ? 'selected' : ''?>><?php echo $row->name ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-gradient-primary mr-2" value="Aplly Filter">
                <input type="reset" onclick="window.location.href = '<?php echo get_admin_url('product') ?>'"
                       class="btn btn-light mr-2" value="Reset">
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card table-list-record">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total products: <?php echo $count ?>.</h4>
                <a href="<?php echo get_admin_url('product/add') ?>" id="add-new-button"
                   class="btn btn-icon btn-rounded btn-gradient-primary">+</a>
            </div>
            <table id="list-table" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($collection as $product): ?>
                    <tr>
                        <td><?php echo $product->id ?></td>
                        <td><img class="img-lg"
                                 src="<?php echo base_url('upload/product') . '/' . $product->image_link ?>"></td>
                        <td><?php echo $product->name ?></td>
                        <td><?php echo number_format($product->price) ?> VND</td>
                        <td><?php echo $product->created ?></td>
                        <td><a class="delete-action" href="<?php echo get_admin_url('user/delete/' . $product->id) ?>"
                               data-toggle="modal" data-target="#myModal"><i class="mdi mdi-delete "></i>Delete</a> / <a
                                    href="<?php echo get_admin_url('user/edit/' . $product->id) ?>"><i
                                        class="mdi mdi-wrench"></i> Update</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pagination table-pagination">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p>Bạn chắc chắn muốn xóa quản trị viên này?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo get_admin_url('user/delete/' . $product->id) ?>"
                   class="btn btn-gradient-info btn-fw">Có</a>
                <button type="button" class="btn btn-gradient-dark btn-fw" data-dismiss="modal">Hủy</button>
            </div>
        </div>
    </div>
</div>