<div class="page-header">
    <h3 class="page-title">
        Bảng quản lý Admin.
    </h3>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                    <h4 class="card-title">Danh sách Admin / Số lượng <?php echo $count?>.</h4>
                    <a href="<?php echo get_admin_url('user/add')?>" id="add-new-user" class="btn btn-block btn-sm btn-gradient-primary">+ Thêm mới </a>
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
                    <?php foreach ($collection as $user):?>
                    <tr>
                        <td><?php echo $user->id?></td>
                        <td><?php echo $user->username?></td>
                        <td><?php echo $user->name?></td>
                        <td><?php echo $user->email?></td>
                        <td><?php echo $user->phone?></td>
                        <td><?php echo $user->address?></td>
                        <td><a href="#"><i class="mdi mdi-delete "></i>Delete</a> / <a href="#"><i class="mdi mdi-wrench"></i> Update</a></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
