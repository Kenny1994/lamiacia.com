<div class="page-header">
    <h3 class="page-title">
        Users.
    </h3>
</div>
<?php if (isset($message) && $message): ?>
    <blockquote class="blockquote blockquote-primary">
        <?php echo $message ?>
    </blockquote>
<?php endif; ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card table-list-record">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total users: <?php echo $count ?>.</h4>
                <a href="<?php echo get_admin_url('user/add') ?>" id="add-new-button"
                   class="btn btn-icon btn-rounded btn-gradient-primary">+</a>
            </div>


            <table id="list-table" class="table table-bordered table-hover">
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
                    <tr class="table-clicked" id="record-<?php echo $user->id ?>"
                        title="<?php echo get_admin_url('user/edit/' . $user->id) ?>">
                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->username ?></td>
                        <td><?php echo $user->name ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->phone ?></td>
                        <td><?php echo $user->address ?></td>
                        <td><a href="<?php echo get_admin_url('user/edit/' . $user->id) ?>"><i
                                        class="mdi mdi-wrench"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>