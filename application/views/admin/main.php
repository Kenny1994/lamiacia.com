<html>
    <head>
        <?php $this->load->view('admin/head');?>
    </head>

    <body>
    <div class="container-scroller">
        <?php $this->load->view('admin/header');?>
        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view('admin/left');?>
            <?php $this->load->view($temp,$this->data);?>
        </div>
    </div>
<!--        <div id="left_content">-->
<!---->
<!--        </div>-->
<!---->
<!--        <div id="rightSide">-->
<!---->
<!---->
<!--            -->
<!---->
<!--            --><?php //$this->load->view('admin/footer');?>
<!--        </div>-->
    </body>
</html>