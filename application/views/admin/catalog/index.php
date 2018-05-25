<div class="page-header">
    <h3 class="page-title">
        Catalogs
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
                <h4 class="card-title">Total catalogs: <?php echo $count ?>.</h4>
                <a href="<?php echo get_admin_url('catalog/add') ?>" id="add-new-button"
                   class="btn btn-icon btn-rounded btn-gradient-primary">+</a>
            </div>
            <table id="list-table" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Catalog Name</th>
                    <th>Position</th>
                    <th>Parent ID</th>
                    <th>Site title</th>
                    <th>Meta Desc</th>
                    <th>Meta Key</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($collection as $catalog): ?>
                    <tr class="table-clicked" id="record-<?php echo $catalog->id ?>"
                        title="<?php echo get_admin_url('catalog/edit/' . $catalog->id) ?>">
                        <td><?php echo $catalog->id ?></td>
                        <td><?php echo $catalog->name ?></td>
                        <td><?php echo $catalog->sort_order ?></td>
                        <td><?php echo $catalog->parent_id ?></td>
                        <td><?php echo $catalog->site_title ?></td>
                        <td><?php echo $catalog->meta_desc ?></td>
                        <td><?php echo $catalog->meta_key ?></td>
                        <td><a href="<?php echo get_admin_url('catalog/edit/' . $catalog->id) ?>"><i
                                        class="mdi mdi-wrench"></i></a></td>
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
