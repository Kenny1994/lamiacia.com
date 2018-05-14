
<?php //$this->load->view('admin/admin/header',$this->data)?>

<div class="wrapper">
    <?php $this->load->view('admin/message',$this->data)?>
    <div class="widget">

        <div class="title">
            <span class="titleIcon"><input id="titleCheck" name="titleCheck" type="checkbox"></span>
            <h6>Danh sách Thành viên</h6>
            <div class="num f12">Tổng số: <b><?php echo $total?></b></div>
        </div>

        <form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
            <table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <td style="width:10px;"><img src="<?php echo base_url('assets/admin/images')?>/icons/tableArrows.png"></td>
                    <td style="width:80px;">Mã số</td>
                    <td>Tên</td>
                    <td>Email</td>
                    <td>Điện thoại</td>
                    <td>Địa chỉ</td>
                    <td style="width:100px;">Hành động</td>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <td colspan="7">
                        <div class="list_action itemActions">
                            <a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
                                <span style="color:white;">Xóa hết</span>
                            </a>
                        </div>

                        <div class="pagination">
                        </div>
                    </td>
                </tr>
                </tfoot>

                <tbody>
                <!-- Filter -->
                <?php foreach ($list as $row):?>

                <tr>
                    <td><input name="id[]" value="<?php echo $row->id;?>" type="checkbox"></td>
                    <td class="textC"><?php echo $row->id;?></td>
                    <td>
                        <span title="<?php echo $row->name;?>" class="tipS"><?php echo $row->name;?></span>
                    </td>
                    <td>
                        <span title="<?php echo $row->email;?>" class="tipS"><?php echo $row->email;?></span>
                    </td>
                    <td><?php echo $row->phone;?></td>
                    <td><?php echo $row->address;?></td>


                    <td class="option">
                        <a href="<?php echo base_url('admin/admin/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
                            <img src="<?php echo base_url('assets/admin/images')?>/icons/color/edit.png">
                        </a>

                        <a href="user/del/19.html" title="Xóa" class="tipS verify_action">
                            <img src="<?php echo base_url('assets/admin/images')?>/icons/color/delete.png">
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </form>
    </div>
</div>

<div class="clear mt30"></div>
