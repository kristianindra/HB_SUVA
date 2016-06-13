<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>
<link rel="stylesheet" href="./asset/unslider/dist/css/unslider.css">
<style type="text/css">
html, body {
    font-family: Lato;
    max-width: 100%;
    overflow-x: hidden;
}

.special_offer{
    height: 235px;
}

@media screen and (max-width: 2560px){
    #header{
        width: 100%;
    }
    .my-slider ul li img{
        height: 708px;
    }
}
</style>


<link href="./asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/product.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/footer.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="./asset/lightbox/dist/css/lightbox.min.css">
<script type="text/javascript" src="./asset/lightbox/dist/js/lightbox.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        var img = document.getElementById('header');
        var height = img.clientWidth;
        //alert(height);
        document.getElementById("menu_bg").height = "705";
        /*$("#cu").hover(
              function () {
                    $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
              },
              function () {
                    $('#contact_us').attr("src", './asset/image/header/contact_us.png');
              }
          );
          $("#ow").hover(
                function () {
                      $('#our_works').attr("src", './asset/image/header/our_works_active.png');
                },
                function () {
                      $('#our_works').attr("src", './asset/image/header/our_works.png');
                }
            );
            $('#op').addClass("active");
            $('#our_products').attr("src", './asset/image/header/our_products_active.png');*/
            /*$("#chair_side_").hover(
                function () {
                    $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_side_.png');
                },
                function () {
                    $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_front.png');
                }
            );
            $("#chair_side").hover(
                function () {
                    $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_side.png');
                },
                function () {
                    $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_front.png');
                }
            );
            $("#chair_back").hover(
                function () {
                    $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_back.png');
                },
                function () {
                    $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_front.png');
                }
            );*/
    });

    $(document).on('mouseover', 'li', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="wool_material"){
            $('#wool_text').toggleClass("bld");
        }
        if (idny=="cotton_material"){
            $('#cotton_text').toggleClass("bld");
        }
        if (idny=="linen_material"){
            $('#linen_text').toggleClass("bld");
        }
        if (idny=="tweed_material"){
            $('#tweed_text').toggleClass("bld");
        }
        if (idny=="wool_text"){
            $('#wool_icon1').toggleClass("big");
            $('#wool_text').toggleClass("bld");
            $('#span_wool').toggleClass("hide");
        }
        if (idny=="cotton_text"){
            $('#cotton_icon1').toggleClass("big");
            $('#cotton_text').toggleClass("bld");
            $('#span_cotton').toggleClass("hide");
        }
        if (idny=="linen_text"){
            $('#linen_icon1').toggleClass("big");
            $('#linen_text').toggleClass("bld");
            $('#span_linen').toggleClass("hide");
        }
        if (idny=="tweed_text"){
            $('#tweed_icon1').toggleClass("big");
            $('#tweed_text').toggleClass("bld");
            $('#span_tweed').toggleClass("hide");
        }
    });

    $(document).on('mouseout', 'li', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="wool_material"){
            $('#wool_text').toggleClass("bld");
        }
        if (idny=="cotton_material"){
            $('#cotton_text').toggleClass("bld");
        }
        if (idny=="linen_material"){
            $('#linen_text').toggleClass("bld");
        }
        if (idny=="tweed_material"){
            $('#tweed_text').toggleClass("bld");
        }
        if (idny=="wool_text"){
            $('#wool_icon1').toggleClass("big");
            $('#wool_text').toggleClass("bld");
            $('#span_wool').toggleClass("hide");
        }
        if (idny=="cotton_text"){
            $('#cotton_icon1').toggleClass("big");
            $('#cotton_text').toggleClass("bld");
            $('#span_cotton').toggleClass("hide");
        }
        if (idny=="linen_text"){
            $('#linen_icon1').toggleClass("big");
            $('#linen_text').toggleClass("bld");
            $('#span_linen').toggleClass("hide");
        }
        if (idny=="tweed_text"){
            $('#tweed_icon1').toggleClass("big");
            $('#tweed_text').toggleClass("bld");
            $('#span_tweed').toggleClass("hide");
        }
    });

    $(document).on('mouseover', 'img', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="main_menu_logo"){
            if (classny==""){
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu.png');
            } else {
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu_active.png');
            }
        }
    });

    $(document).on('click', 'img', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="main_menu_logo"){
            if (classny==""){
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu.png');
            } else {
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu_active.png');
            }
        }
    });

    function image_left_in(){
        $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_side_.png');
    }
    function image_center_in(){
        $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_side.png');
    }
    function image_right_in(){
        $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_back.png');
    }
    function image_out(){
        $('#content_product_left_image_front').attr("src", './asset/image/content/product/chair_front.png');
    }

    function o_works_in(){
        $('#our_works').attr("src", './asset/image/header/our_works_active.png');
    }
    function o_works_out(){
        $('#our_works').attr("src", './asset/image/header/our_works.png');
    }
    function o_cont_in(){
        $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
    }
    function o_cont_out(){
        $('#contact_us').attr("src", './asset/image/header/contact_us.png');
    }

</script>

</head>
<body>
    <?php include 'v_header_product.php'; ?>
    <div class='content'>
        <div class="row"></div>
        <p id="content_title">CUSTOMIZE ANY SEAT YOU EVER WANTED</p>
        <p id="content_body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div id="menu_item">
            <ul id="menu_list_item">
                <li class="content_menu">SOFAS</li>
                <li class="content_menu active">CHAIR</li>
                <li class="content_menu">STOLLS</li>
            </ul>
        </div>
        <div class="container">
            <div class="col-sm-6">
                <img class="img-responsive center-block" src="./asset/image/content/product/chair_front.png" id="content_product_left_image_front" border="0">
                <ul id="position_chair">
                    <li id="chair_side_">
                        <div class="col-xs-4">
                            <img class="img-responsive center-block" src="./asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0" onmouseover="image_left_in();" onmouseout="image_out();">
                        </div>
                    </li>
                    <li id="chair_side">
                        <div class="col-xs-4">
                            <img class="img-responsive center-block" src="./asset/image/content/product/chair_side.png" id="content_product_left_image_side" class="image_position" border="0" onmouseover="image_center_in();" onmouseout="image_out();">
                        </div>
                    </li>
                    <li id="chair_back">
                        <div class="col-xs-4">
                            <img class="img-responsive center-block" src="./asset/image/content/product/chair_back.png" id="content_product_left_image_back" class="image_position" border="0" onmouseover="image_right_in();" onmouseout="image_out();">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6" id="right_content">
                <a href="our_product"><p id="aaa"><img src="./asset/image/content/product/left_icon.png" style="width: 5px; margin-right:15px;" /> Back to <b>CHAIRS</b></p></a>
                <p id="content_right_product_title">Lorem Ipsum Dolor Sit Amet</p>
                <p id="content_right_product_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                <p id="content_right_product_title">Specifications</p>
                <a href="./asset/image/content/product/spesification.png" data-lightbox="spesification_image"><img class="img-responsive block" src="./asset/image/content/product/spesification.png" id="image_spesification" class="image_spesification"></a>
                <p id="content_right_product_title">Choose Material</p>

                <div class="image_list_choose_material">
                    <ul>
                        <li id="arrow_left">
                            <img src="./asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" />
                        </li>
                        <li id="wool_material">
                            <img src="./asset/image/content/home/wool.png" id="wool_icon" class="material_logo"/>
                            <span id="span_wool"></span>
                            <img src="./asset/image/content/home/wool.png" id="wool_icon1" class="material_logo1"/>
                        </li>
                        <li id="cotton_material">
                            <img src="./asset/image/content/home/cotton.png" id="cotton_icon" class="material_logo"/>
                            <span id="span_cotton"></span>
                            <img src="./asset/image/content/home/cotton.png" id="cotton_icon1" class="material_logo1"/>
                        </li>
                        <li id="linen_material">
                            <img src="./asset/image/content/home/linen.png" id="linen_icon" class="material_logo" />
                            <span id="span_linen"></span>
                            <img src="./asset/image/content/home/linen.png" id="linen_icon1" class="material_logo1" />
                        </li>
                        <li id="tweed_material">
                            <img src="./asset/image/content/home/tweed.png" id="tweed_icon" class="material_logo" />
                            <span id="span_tweed"></span>
                            <img src="./asset/image/content/home/tweed.png" id="tweed_icon1" class="material_logo1" />
                        </li>
                        <li id="arrow_right">
                            <img src="./asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" />
                        </li>
                    </ul>
                </div>
                <div class="image_list_choose_material_text">
                    <ul>
                        <li id="wool_text">WOOL</li>
                        <li id="cotton_text">COTTON</li>
                        <li id="linen_text">LINEN</li>
                        <li id="tweed_text">TWEED</li>
                    </ul>
                </div>

                <!--<div id="content_home_choose_material">
                    <div class="row">
                        <div class="col-sm-1"><img src="./asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" /></div>
                        <div class="col-sm-1" id="material_wool">
                            <img src="./asset/image/content/home/wool.png" id="wool_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text1" class="material_text">WOOL</p>
                        </div>
                        <div class="col-sm-1" id="material_cotton">
                            <img src="./asset/image/content/product/cotton.png" id="cotton_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text2" class="material_text">COTTON</p>
                        </div>
                        <div class=col-sm-1 id="material_linen">
                            <img src="./asset/image/content/home/linen.png" id="linen_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text3" class="material_text">LINEN</p>
                        </div>
                        <div class=col-sm-1 id="material_tweed">
                            <img src="./asset/image/content/home/tweed.png" id="tweed_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text4" class="material_text">TWEED</p>
                        </div>
                        <div class="col-sm-1"><img src="./asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" /></div>
                    </div>
                </div>-->
                <p id="content_right_product_title">Available Color</p>
                <p id="select_color">Select Color <img src="./asset/image/content/product/down_icon.png" id="down_arrow_icon" class="" /></p>
                <p id="order_now">
                    ORDER NOW
                </p>
            </div>
            <div class="row">

            </div>
        </div>
        <img class="img-responsive center-block" src="./asset/image/content/product/product_proses.png" id="content_product_proses" class="" border="0">
        <p id="similar_product_text">SIMILAR PRODUCTS</p>
        <div class="row" id="sim_prod">
            <div id="similar_product_item">
                <ul>
                    <li><img src="./asset/image/content/home/left_icon.png" id="left_arrow_icon_similar" class="arrow_logo_similar" /></li>
                    <li><img src="./asset/image/content/product/chair_side_.png" id="product_similar_1" class="product_similar" /></li>
                    <li><img src="./asset/image/content/product/chair_side_.png" id="product_similar_2" class="product_similar" /></li>
                    <li><img src="./asset/image/content/product/chair_side_.png" id="product_similar_3" class="product_similar" /></li>
                    <li><img src="./asset/image/content/product/chair_side_.png" id="product_similar_4" class="product_similar" /></li>
                    <li><img src="./asset/image/content/home/right_icon.png" id="right_arrow_icon_similar" class="arrow_logo_similar" /></li>
                </ul>
            </div>
            <!--<div class="col-sm-1" id="arrow_left">
                <img src="./asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" />
            </div>
            <div class="col-sm-2" id="img_1">
                <img class="img-responsive center-block" src="./asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-sm-2" id="img_2">
                <img class="img-responsive center-block" src="./asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-sm-2" id="img_3">
                <img class="img-responsive center-block" src="./asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-sm-2" id="img_4">
                <img class="img-responsive center-block" src="./asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-sm-1" id="arrow_right">
                <img src="./asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" />
            </div>-->
        </div>
    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>

    <script src="./asset/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="./asset/js/jquery-2.1.4.min.js"></script>
    <script src="./asset/unslider/src/js/unslider.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.my-slider').unslider({
                keys: false,
                autoplay: true,
                delay: 3500,
                arrows: false,
                nav: false
            });
        });
    </script>

</body>
</html>
