<div class="page-header">
    <h3 class="page-title">
        Bảng quản lý Danh mục sản phẩm.
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
                <h4 class="card-title">Tổng hợp danh mục / Số lượng <?php echo $count ?>.</h4>
                <a href="<?php echo get_admin_url('catalog/add') ?>" id="add-new-button"
                   class="btn btn-icon btn-rounded btn-gradient-primary">+</a>
            </div>


            <table id="list-table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Thứ tự hiển thị</th>
                    <th>Danh mục cha</th>
                    <th>Site title</th>
                    <th>Meta Desc</th>
                    <th>Meta Key</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($collection as $catalog): ?>
                    <tr>
                        <td><?php echo $catalog->id ?></td>
                        <td><?php echo $catalog->name ?></td>
                        <td><?php echo $catalog->sort_order ?></td>
                        <td><?php echo $catalog->parent_id ?></td>
                        <td><?php echo $catalog->site_title ?></td>
                        <td><?php echo $catalog->meta_desc ?></td>
                        <td><?php echo $catalog->meta_key ?></td>
                        <td><a class="user-delete" href="<?php echo get_admin_url('user/delete/' . $catalog->id) ?>"
                               data-toggle="modal" data-target="#myModal"><i class="mdi mdi-delete "></i>Delete</a> / <a
                                    href="<?php echo get_admin_url('user/edit/' . $catalog->id) ?>"><i
                                        class="mdi mdi-wrench"></i> Update</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p>Bạn chắc chắn muốn xóa danh mục này?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo get_admin_url('user/delete/' . $catalog->id) ?>" class="btn btn-gradient-info btn-fw">Có</a>
                <button type="button" class="btn btn-gradient-dark btn-fw" data-dismiss="modal">Hủy</button>
            </div>
        </div>
    </div>
</div>