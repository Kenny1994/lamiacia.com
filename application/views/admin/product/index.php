<div class="page-header">
    <h3 class="page-title">
        Bảng quản lý Admin.
    </h3>
</div>
<?php if (isset($message) && $message): ?>
    <blockquote class="blockquote blockquote-primary">
        <i class="mdi mdi-check-all"></i><span style="font-size: 12px"><?php echo $message ?></span>
    </blockquote>
<?php endif; ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card table-list-record">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách San pham / Số lượng <?php echo $count ?>.</h4>
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
                        <td><?php echo $product->price ?></td>
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
                <?php echo $this->pagination->create_links();?>
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