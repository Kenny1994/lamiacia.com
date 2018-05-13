<!-- the CSS -->
<?php echo link_tag('assets/site/css/reset.css')?>
<?php echo link_tag('assets/site/css/style.css')?>
<?php echo link_tag('assets/site/css/menu.css')?>
<?php echo link_tag('assets/site/css/input.css')?>
<?php echo link_tag('assets/site/css/product.css')?>
<?php echo link_tag('assets/site/css/input.css')?>
<?php echo link_tag('assets/site/css/slide-flim.css')?>
<!-- End CSS -->

<html>
<!-- the head -->
<head>
    <meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />

    <!-- the Javascript -->

    <script type="text/javascript"  src="<?php echo base_url('assets/js/jquery/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery/jquery-ui.min.js')?>"></script>
    <link rel="stylesheet" href=" <?php echo base_url('assets/js/jquery/jquery-ui/custom-theme/jquery-ui-1.8.21.custom.css')?>" type="text/css">


    <script src="<?php echo base_url('assets/site/js/script.js')?>"></script>

    <!-- raty -->

    <script type="text/javascript" src="<?php echo base_url('assets/site/raty/jquery.raty.min.js')?>"></script>
    <script type="text/javascript">
        $(function() {
            $.fn.raty.defaults.path = 'raty/img';
            $('.raty').raty({
                score: function() {
                    return $(this).attr('data-score');
                },
                readOnly  : true,
            });
        });
    </script>
    <style>.raty img{width:16px !important;height:16px; !important;}</style>
    <!--End raty -->

    <!-- End Javascript -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#back_to_top').click(function() {
                $('html, body').animate({scrollTop:0},"slow");
            });
            // go top
            $(window).scroll(function() {
                if($(window).scrollTop() != 0) {
                    $('#back_to_top').fadeIn();
                } else {
                    $('#back_to_top').fadeOut();
                }
            });
        });
    </script>
    <style>
        #back_to_top {
            bottom: 10px;
            color: #666;
            cursor: pointer;
            padding: 5px;
            position: fixed;
            right: 55px;
            text-align: center;
            text-decoration: none;
            width: auto;
        }
    </style>

    <title>Học lập trình website với PHP và MYSQL</title>
</head>
<!-- end head -->
<body>

<a href="#" id="back_to_top">
    <img src="images/top.png" />
</a>

<!-- the wraper -->
<div class="wraper">
    <!-- the header -->
    <div class='header'>
        <!-- The box-header-->

        <link type="text/css" href="<?php echo base_url('assets/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js')?>" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js')?>"></script>

        <script type="text/javascript">
            $(function() {
                $( "#text-search" ).autocomplete({
                    source: "product/search_ac.html",
                });
            });
        </script>
        <div class='top'><!-- The top -->
            <div id="logo"><!-- the logo -->
                <a  href="" title="Học lập trình website với PHP và MYSQL">
                    <img src="images/logo.jpg"  alt="Học lập trình website với PHP và MYSQL"/>
                </a>
            </div><!-- End logo -->

            <!--  load gio hàng -->
            <div id="cart_expand" class="cart">
                <a href="gio-hang.html" class="cart_link">
                    Giỏ hàng <span id="in_cart">0</span> sản phẩm
                </a>
                <img alt="cart bnc" src="images/cart.png">
            </div>
            <div id="search"><!-- the search -->
                <form method="get" action="tim-kiem.html">
                    <input type="text" id="text-search" name="key-search" value="" placeholder="Tìm kiếm sản phẩm..." class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                    <input type="submit" id="but" name="but" value="">
                </form>
            </div><!-- End search -->


            <div class='clear'></div><!-- clear float -->
        </div><!-- End top -->			   <!-- End box-header  -->

        <!-- The box-header-->
        <div id="menu"><!-- the menu -->
            <ul class="menu_top">
                <li class="active index-li"><a href="">Trang chủ </a></li>
                <li class=""><a href="info/view/1.html">Giới thiệu</a></li>
                <li class=""><a href="info/view/2.html">Hướng dẫn</a></li>
                <li class=""><a href="san-pham.html">Sản phẩm</a></li>
                <li class=""><a href="tin-tuc.html">Tin tức</a></li>
                <li class=""><a href="video.html">Video</a></li>
                <li class=""><a href="lien-he.html">Liên hệ</a></li>
                <li class=""><a href="dang-ky.html">Đăng ký</a></li>
                <li class=""><a href="dang-nhap.html">Đăng nhập</a></li>
            </ul>
        </div><!-- End menu -->			   <!-- End box-header  -->

    </div>
    <!-- End header -->

    <!-- The container -->
    <div id="container">
        <!-- The left -->
        <div class='left'>
            <div class="box-left">
                <div class="title tittle-box-left">
                    <h2> Tìm kiếm theo giá </h2>
                </div>
                <div class="content-box" ><!-- The content-box -->
                    <form class="t-form form_action" method="post" style='padding:10px' action="product/search_price.html" name="search" >

                        <div class="form-row">
                            <label for="param_price_from" class="form-label" style='width:70px'>Giá từ:<span class="req">*</span></label>
                            <div class="form-item"  style='width:90px'>
                                <select  class="input" id="price_from" name="price_from" >
                                    <option value="0"
                                    >
                                        0 đ
                                    </option>
                                    <option value="1000000"
                                    >
                                        1,000,000 đ
                                    </option>
                                    <option value="2000000"
                                    >
                                        2,000,000 đ
                                    </option>
                                    <option value="3000000"
                                    >
                                        3,000,000 đ
                                    </option>
                                    <option value="4000000"
                                    >
                                        4,000,000 đ
                                    </option>
                                    <option value="5000000"
                                    >
                                        5,000,000 đ
                                    </option>
                                    <option value="6000000"
                                    >
                                        6,000,000 đ
                                    </option>
                                    <option value="7000000"
                                    >
                                        7,000,000 đ
                                    </option>
                                    <option value="8000000"
                                    >
                                        8,000,000 đ
                                    </option>
                                    <option value="9000000"
                                    >
                                        9,000,000 đ
                                    </option>
                                    <option value="10000000"
                                    >
                                        10,000,000 đ
                                    </option>
                                </select>
                                <div class="clear"></div>
                                <div class="error" id="price_from_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-row">
                            <label for="param_price_from" class="form-label" style='width:70px'>Giá tới:<span class="req">*</span></label>
                            <div class="form-item"  style='width:90px'>
                                <select  class="input" id="price_to" name="price_to" >
                                    <option value="1000000" >
                                        1,000,000 đ</option>
                                    <option value="2000000" >
                                        2,000,000 đ</option>
                                    <option value="3000000" >
                                        3,000,000 đ</option>
                                    <option value="4000000" >
                                        4,000,000 đ</option>
                                    <option value="5000000" >
                                        5,000,000 đ</option>
                                    <option value="6000000" >
                                        6,000,000 đ</option>
                                    <option value="7000000" >
                                        7,000,000 đ</option>
                                    <option value="8000000" >
                                        8,000,000 đ</option>
                                    <option value="9000000" >
                                        9,000,000 đ</option>
                                    <option value="10000000" >
                                        10,000,000 đ</option>
                                    <option value="11000000" >
                                        11,000,000 đ</option>
                                    <option value="12000000" >
                                        12,000,000 đ</option>
                                    <option value="13000000" >
                                        13,000,000 đ</option>
                                    <option value="14000000" >
                                        14,000,000 đ</option>
                                    <option value="15000000" >
                                        15,000,000 đ</option>
                                    <option value="16000000" >
                                        16,000,000 đ</option>
                                    <option value="17000000" >
                                        17,000,000 đ</option>
                                    <option value="18000000" >
                                        18,000,000 đ</option>
                                    <option value="19000000" >
                                        19,000,000 đ</option>
                                    <option value="20000000" >
                                        20,000,000 đ</option>
                                </select>
                                <div class="clear"></div>
                                <div class="error" id="price_from_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="form-row">
                            <label class="form-label">&nbsp;</label>
                            <div class="form-item">
                                <input type="submit" class="button"  name='search' value="Tìm kiềm" style='height:30px !important;line-height:30px !important;padding:0px 10px !important'>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div><!-- End content-box -->
            </div>


            <div class="box-left">
                <div class="title tittle-box-left">
                    <h2> Danh mục sản phẩm </h2>
                </div>
                <div class="content-box"><!-- The content-box -->
                    <ul class="catalog-main">
                        <li>
                            <span><a href="#" title="Tivi">Tivi</a></span>
                            <!-- lay danh sach danh muc con -->
                            <ul class="catalog-sub">

                                <li>
                                    <a href="danh-muc-Toshiba/18.html" title=" Acer">
                                        Toshiba</a>
                                </li>

                                <li>
                                    <a href="danh-muc-Samsung/17.html" title=" Acer">
                                        Samsung</a>
                                </li>

                                <li>
                                    <a href="danh-muc-Panasonic/16.html" title=" Acer">
                                        Panasonic</a>
                                </li>

                                <li>
                                    <a href="danh-muc-LG/15.html" title=" Acer">
                                        LG</a>
                                </li>

                                <li>
                                    <a href="danh-muc-JVC/14.html" title=" Acer">
                                        JVC</a>
                                </li>

                                <li>
                                    <a href="danh-muc-AKAI/13.html" title=" Acer">
                                        AKAI</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span><a href="#" title="Điện thoại">Điện thoại</a></span>
                            <!-- lay danh sach danh muc con -->
                            <ul class="catalog-sub">

                                <li>
                                    <a href="danh-muc-HTC/12.html" title=" Acer">
                                        HTC</a>
                                </li>

                                <li>
                                    <a href="danh-muc-BlackBerry/11.html" title=" Acer">
                                        BlackBerry</a>
                                </li>

                                <li>
                                    <a href="danh-muc-Asus/10.html" title=" Acer">
                                        Asus</a>
                                </li>

                                <li>
                                    <a href="danh-muc-Apple/9.html" title=" Acer">
                                        Apple</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span><a href="#" title="Laptop">Laptop</a></span>
                            <!-- lay danh sach danh muc con -->
                            <ul class="catalog-sub">

                                <li>
                                    <a href="danh-muc-HP/8.html" title=" Acer">
                                        HP</a>
                                </li>

                                <li>
                                    <a href="danh-muc-Dell/7.html" title=" Acer">
                                        Dell</a>
                                </li>

                                <li>
                                    <a href="danh-muc-Asus/6.html" title=" Acer">
                                        Asus</a>
                                </li>

                                <li>
                                    <a href="danh-muc--Apple/5.html" title=" Acer">
                                        Apple</a>
                                </li>

                                <li>
                                    <a href="danh-muc--Acer/4.html" title=" Acer">
                                        Acer</a>
                                </li>

                            </ul>
                        </li>
                    </ul>	    </div><!-- End content-box -->
            </div>
        </div>
        <!-- End left -->

        <!-- The content -->
        <div class='content'>
            <!-- lay slide -->
            <script src="<?php echo base_url('assets/site/royalslider/jquery.royalslider.min.js');?>"></script>
            <link type="text/css" href="<?php echo base_url('assets/site/royalslider/royalslider.css')?>" rel="stylesheet">
            <link type="text/css" href="<?php echo base_url('assets/site/royalslider/skins/minimal-white/rs-minimal-white.css')?>" rel="stylesheet">


            <script type="text/javascript">
                (function($)
                {
                    $(document).ready(function()
                    {
                        $("#HomeSlide").royalSlider({
                            arrowsNav:true,
                            loop:false,
                            keyboardNavEnabled:true,
                            controlsInside:false,
                            imageScaleMode:"fill",
                            arrowsNavAutoHide:false,
                            autoScaleSlider:true,
                            autoScaleSliderWidth:580,//chiều rộng slide
                            autoScaleSliderHeight:205,//chiều cao slide
                            controlNavigation:"bullets",
                            thumbsFitInViewport:false,
                            navigateByClick:true,
                            startSlideId:0,
                            autoPlay:{enabled:true, stopAtAction:false, pauseOnHover:true, delay:5000},
                            transitionType:"move",
                            slideshowEnabled:true,
                            slideshowDelay:5000,
                            slideshowPauseOnHover:true,
                            slideshowAutoStart:true,
                            globalCaption:false
                        });
                    });
                })(jQuery);
            </script>


            <style>
                #HomeSlide.royalSlider {
                    width: 580px;
                    height: 205px;
                    overflow:hidden;
                }
            </style>

            <div id='slide'>
                <div id="img-slide" class="sliderContainer" style='width:580px'>
                    <div id="HomeSlide" class="royalSlider rsMinW">
                        <a href="http://dantri.com.vn/" target='_blank'><img src="<?php echo base_url('assets/upload/slide/31.jpg')?>" /> </a>
                        <a href="http://dantri.com.vn/" target='_blank'><img src="<?php echo base_url('assets/upload/slide/21.jpg')?>" /> </a>
                        <a href="http://dantri.com.vn/" target='_blank'><img src="<?php echo base_url('assets/upload/slide/11.jpg')?>" /> </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear pb20"></div>




            <!-- lay san pham moi nhat -->
            <div class="box-center"><!-- The box-center product-->
                <div class="tittle-box-center">
                    <h2>Sản phẩm mới</h2>
                </div>
                <div class="box-content-center product"><!-- The box-content-center -->
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi LG 520	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-LG-520/9.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product13.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,400,000 đ
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>19</b></p>
                            <a class='button' href="them-vao-gio-9.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi JVC 500	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-JVC-500/8.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product7.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            9,500,000 đ
                            <span class='price_old'>10,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>112</b></p>
                            <a class='button' href="them-vao-gio-8.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi Toshiba	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-Toshiba/7.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product6.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,800,000 đ
                            <span class='price_old'>6,200,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='7' data-score='3.5'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>74</b></p>
                            <a class='button' href="them-vao-gio-7.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>

                    <div class='clear'></div>
                </div><!-- End box-content-center -->
            </div>	<!-- End box-center product-->
            <!-- lay san pham dang giam gia -->
            <div class="box-center"><!-- The box-center product-->
                <div class="tittle-box-center">
                    <h2>Sản phẩm giảm giá</h2>
                </div>
                <div class="box-content-center product"><!-- The box-content-center -->
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi JVC 500	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-JVC-500/8.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product7.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            9,500,000 đ
                            <span class='price_old'>10,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>112</b></p>
                            <a class='button' href="them-vao-gio-8.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi Toshiba	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-Toshiba/7.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product6.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,800,000 đ
                            <span class='price_old'>6,200,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='7' data-score='3.5'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>74</b></p>
                            <a class='button' href="them-vao-gio-7.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi LG 4000	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-LG-4000/2.html" title="Sản phẩm">
                                <img src="<?php base_url('assets/upload/product/product2.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            3,800,000 đ
                            <span class='price_old'>4,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='2' data-score='4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>4</b></p>
                            <a class='button' href="them-vao-gio-2.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>

                    <div class='clear'></div>
                </div><!-- End box-content-center -->
            </div>	<!-- End box-center product-->
            <!-- lay san pham xem nhieu -->
            <div class="box-center"><!-- The box-center product-->
                <div class="tittle-box-center">
                    <h2>Sản phẩm xem nhiều</h2>
                </div>
                <div class="box-content-center product"><!-- The box-content-center -->
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi JVC 500	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-JVC-500/8.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product7.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            9,500,000 đ
                            <span class='price_old'>10,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>112</b></p>
                            <a class='button' href="them-vao-gio-8.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi Toshiba	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-Toshiba/7.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product6.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,800,000 đ
                            <span class='price_old'>6,200,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='7' data-score='3.5'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>74</b></p>
                            <a class='button' href="them-vao-gio-7.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a  href="" title="Sản phẩm">
                                Tivi LG 520	                     </a>
                        </h3>
                        <div class='product_img'>
                            <a  href="san-pham-Tivi-LG-520/9.html" title="Sản phẩm">
                                <img src="<?php echo base_url('assets/upload/product/product13.jpg')?>" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,400,000 đ
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>19</b></p>
                            <a class='button' href="them-vao-gio-9.html" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>

                    <div class='clear'></div>
                </div><!-- End box-content-center -->
            </div>	<!-- End box-center product-->	    			   </div>
        <!-- End content -->

        <!-- The right -->
        <div class='right'>
            <!-- The Support -->
            <div class="box-right">
                <div class="title tittle-box-right">
                    <h2> Hỗ trợ trực tuyến </h2>
                </div>
                <div class="content-box">
                    <!-- goi ra phuong thuc hien thi danh sach ho tro -->
                    <div class='support'>
                        <strong>Hoang van tuyen </strong>
                        <a rel="nofollow" href="ymsgr:sendIM?tuyenht90">
                            <img  src="http://opi.yahoo.com/online?u=tuyenht90&amp;m=g&amp;t=2">
                        </a>

                        <p>
                            <img style="margin-bottom:-3px" src="<?php echo base_url('assets/site/images/phone.png')?>"> 01686039488	      </p>

                        <p>
                            <a rel="nofollow" href="mailto:hoangvantuyencnt@gmail.com">
                                <img style="margin-bottom:-3px" src="<?php echo base_url('assets/site/images/email.png')?>"> Email: hoangvantuye...
                            </a>
                        </p>
                        <p>
                            <a rel="nofollow" href="skype:tuyencnt90">
                                <img style="margin-bottom:-3px" src="<?php echo base_url('assets/site/images/skype.png')?>"> Skype: tuyencnt90			</a>
                        </p>
                    </div>			        </div>
            </div>
            <!-- End Support -->

            <!-- The news -->
            <div class="box-right">
                <div class="title tittle-box-right">
                    <h2> Bài viết mới </h2>
                </div>
                <div class="content-box">
                    <ul class='news'>
                        <li>
                            <a href="news/view/4.html" title="Mỹ tăng cường không kích Iraq">
                                <img src="images/li.png">
                                Mỹ tăng cường không kích Iraq	                        </a>
                        </li>
                        <li>
                            <a href="news/view/3.html" title="Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc">
                                <img src="images/li.png">
                                Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc	                        </a>
                        </li>
                        <li>
                            <a href="news/view/2.html" title="Arsenal đồng ý bán Vermaelen cho Barcelona">
                                <img src="images/li.png">
                                Arsenal đồng ý bán Vermaelen cho Barcelona	                        </a>
                        </li>
                        <li>
                            <a href="news/view/1.html" title="Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách">
                                <img src="images/li.png">
                                Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách	                        </a>
                        </li>
                    </ul>
                </div>
            </div>		<!-- End news -->

            <!-- The Ads -->
            <div class="box-right">
                <div class="title tittle-box-right">
                    <h2> Quảng cáo </h2>
                </div>
                <div class="content-box">
                    <a href="">
                        <img  src="<?php echo base_url('assets/site/images/ads.png')?>">
                    </a>
                </div>
            </div>
            <!-- End Ads -->

            <!-- The Fanpage -->
            <div class="box-right">
                <div class="title tittle-box-right">
                    <h2> Fanpage </h2>
                </div>
                <div class="content-box">

                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/nobitacnt&amp;width=190&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:300px;" allowTransparency="true">
                    </iframe>

                </div>
            </div>
            <!-- End Fanpage -->

            <!-- The Fanpage -->
            <div class="box-right">
                <div class="title tittle-box-right">
                    <h2> Thống kê truy cập </h2>
                </div>
                <div class="content-box">
                    <center>
                        <!-- Histats.com  START  (standard)-->
                        <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
                        <a href="http://www.histats.com" target="_blank" title="hit counter" ><script  type="text/javascript" >
                                try {Histats.start(1,2138481,4,401,118,80,"00011111");
                                    Histats.track_hits();} catch(err){};
                            </script></a>
                        <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2138481&101" alt="hit counter" border="0"></a></noscript>
                        <!-- Histats.com  END  -->
                    </center>
                </div>
            </div>
            <!-- End Fanpage -->


        </div>
        <!-- End right -->
        <div class="clear"></div>

    </div>
    <!-- End container -->
    <center>
        <img src="<?php echo base_url('assets/site/images/bank.png')?>" />
    </center>
    <!-- The footer -->
    <div class="footer">
        <!-- The box-footer-->

        <div id="footer_text"> <!-- The footer_text -->
            <strong>Học lập trình website online miễn phí.</strong>
            <p>Hướng dẫn xây dựng website bán hàng và thanh toán trực tuyến. </p>
            <p>Video hướng dẫn: <a href="https://www.youtube.com/watch?list=PLml7xFCO5p8rlpbV-9bDdz74cCXQCmeDk&v=YRyzBuA_O4A">Xem video</a></p>
            <p>Website: <a href="http://hocphp.info">hocphp.info</a></p>
            <p>Fanpage: <a href="https://www.facebook.com/nobitacnt/">https://www.facebook.com/nobitacnt/</a></p>

        </div><!-- End footer_text -->

        <div id="footer_face">  <!-- The footer_face -->
            <a title="trên facebook" target="_blank" href="https://www.facebook.com/nobitacnt" rel="nofollow">
                <img alt="trên facebook" src="<?php echo base_url('assets/site/images/facebook.png')?>">
            </a>

            <a title="trên twitter" target="_blank" href="https://twitter.com/" rel="nofollow">
                <img alt="trên twitter" src="<?php echo base_url('assets/site/images/twitter.png')?>">
            </a>

            <a title="trên google" target="_blank" href="https://plus.google.com/" rel="nofollow">
                <img alt="trên google" src="<?php echo base_url('assets/site/images/google.png')?>">
            </a>
        </div><!-- End footer_face -->
        <div class='clear'></div><!-- clear float --> 		        <!-- End box-footer -->
    </div>
    <!-- End footer -->

</div>
<!-- End wraper -->

</body>
</html>