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
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách Admin / Số lượng <?php echo $count ?>.</h4>
                <a href="<?php echo get_admin_url('user/add') ?>" id="add-new-user"
                   class="btn btn-block btn-sm btn-gradient-primary">+ Thêm</a>
            </div>


            <table id="user-table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($collection as $user): ?>
                    <tr>
                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->username ?></td>
                        <td><?php echo $user->name ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->phone ?></td>
                        <td><?php echo $user->address ?></td>
                        <td><a class="user-delete" href="<?php echo get_admin_url('user/delete/' . $user->id) ?>"
                               data-toggle="modal" data-target="#myModal"><i class="mdi mdi-delete "></i>Delete</a> / <a
                                    href="#"><i class="mdi mdi-wrench"></i> Update</a></td>
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
                <p>Bạn chắc chắn muốn xóa quản trị viên này?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo get_admin_url('user/delete/' . $user->id) ?>" class="btn btn-gradient-info btn-fw">Có</a>
                <button type="button" class="btn btn-gradient-dark btn-fw" data-dismiss="modal">Hủy</button>
            </div>
        </div>
    </div>
</div>