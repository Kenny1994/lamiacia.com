<html>
    <head>
        <?php $this->load->view('admin/head');?>
    </head>

    <body>
    <div class="container-scroller">
        <?php $this->load->view('admin/header');?>
        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view('admin/left');?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php $this->load->view($temp,$this->data);?>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>