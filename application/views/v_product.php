<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>

<style type="text/css">
body{
    margin: 0;
    padding: 0;
}

.special_offer{
    height: 235px;
}

@media screen and (max-width: 2560px){
    #header{
        width: 100%;
    }
}
</style>


<link href="./../asset/css/set_header_product_list.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/product.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/footer.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="./../asset/lightbox/dist/css/lightbox.min.css">
<script type="text/javascript" src="./../asset/lightbox/dist/js/lightbox.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        var img = document.getElementById('header');
        var height = img.clientWidth;
        //alert(height);
        document.getElementById("menu_bg").height = "705";
        $("#cu").hover(
              function () {
                    $('#contact_us').attr("src", './../asset/image/header/contact_us_active.png');
              },
              function () {
                    $('#contact_us').attr("src", './../asset/image/header/contact_us.png');
              }
          );
          $("#ow").hover(
                function () {
                      $('#our_works').attr("src", './../asset/image/header/our_works_active.png');
                },
                function () {
                      $('#our_works').attr("src", './../asset/image/header/our_works.png');
                }
            );
            $('#op').addClass("active");
            $('#our_products').attr("src", './../asset/image/header/our_products_active.png');
            $("#chair_side_").hover(
                function () {
                    $('#content_product_left_image_front').attr("src", './../asset/image/content/product/chair_side_.png');
                },
                function () {
                    $('#content_product_left_image_front').attr("src", './../asset/image/content/product/chair_front.png');
                }
            );
            $("#chair_side").hover(
                function () {
                    $('#content_product_left_image_front').attr("src", './../asset/image/content/product/chair_side.png');
                },
                function () {
                    $('#content_product_left_image_front').attr("src", './../asset/image/content/product/chair_front.png');
                }
            );
            $("#chair_back").hover(
                function () {
                    $('#content_product_left_image_front').attr("src", './../asset/image/content/product/chair_back.png');
                },
                function () {
                    $('#content_product_left_image_front').attr("src", './../asset/image/content/product/chair_front.png');
                }
            );
    });

    $(document).on('mouseover', 'div', function() {
		var idny = $(this).attr('id');
        var classny = $(this).attr('class');
		if (idny=="menu"){
            if (classny==""){
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
            }
            if (classny=="image_item_list"){
                $('.text_item_list').toggleClass("active");
            }
		}
	});

    $(document).on('click', 'div', function() {
		var idny = $(this).attr('id');
		if (idny=="menu"){
            $('#menu').toggleClass("show");
            $('#menu_bg').toggleClass("show");
            $('#menu_').toggleClass("show");
		}
	});

</script>

</head>
<body>
    <?php include 'v_header.php'; ?>
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
            <div class="col-xs-6">
                <img class="img-responsive center-block" src="./../asset/image/content/product/chair_front.png" id="content_product_left_image_front" border="0">
                <ul id="position_chair">
                    <li id="chair_side_">
                        <div class="col-xs-4">
                            <img class="img-responsive center-block" src="./../asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
                        </div>
                    </li>
                    <li id="chair_side">
                        <div class="col-xs-4">
                            <img class="img-responsive center-block" src="./../asset/image/content/product/chair_side.png" id="content_product_left_image_side" class="image_position" border="0">
                        </div>
                    </li>
                    <li id="chair_back">
                        <div class="col-xs-4">
                            <img class="img-responsive center-block" src="./../asset/image/content/product/chair_back.png" id="content_product_left_image_back" class="image_position" border="0">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6">
                <a href="../C_main/int_product_list"><p><img src="./../asset/image/content/product/left_icon.png" style="width: 5px; margin-right:15px;" /> Back to <b>CHAIRS</b></p></a>
                <p id="content_right_product_title">Lorem Ipsum Dolor Sit Amet</p>
                <p id="content_right_product_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                <p id="content_right_product_title">Spesifications</p>
                <a href="./../asset/image/content/product/spesification.png" data-lightbox="spesification_image"><img class="img-responsive block" src="./../asset/image/content/product/spesification.png" id="image_spesification" class="image_spesification"></a>
                <p id="content_right_product_title">Choose Material</p>
                <div id="content_home_choose_material">
                    <div class="row">
                        <div class="col-xs-1"><img src="./../asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" /></div>
                        <div class="col-xs-1" id="material_wool">
                            <img src="./../asset/image/content/home/wool.png" id="wool_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text1" class="material_text">WOOL</p>
                        </div>
                        <div class="col-xs-1" id="material_cotton">
                            <img src="./../asset/image/content/product/cotton.png" id="cotton_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text2" class="material_text">COTTON</p>
                        </div>
                        <div class=col-xs-1 id="material_linen">
                            <img src="./../asset/image/content/home/linen.png" id="linen_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text3" class="material_text">LINEN</p>
                        </div>
                        <div class=col-xs-1 id="material_tweed">
                            <img src="./../asset/image/content/home/tweed.png" id="tweed_icon" class="material_logo" />
                            <span></span>
                            <p id="material_text4" class="material_text">TWEED</p>
                        </div>
                        <div class="col-xs-1"><img src="./../asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" /></div>
                    </div>
                </div>
                <p id="content_right_product_title">Available Color</p>
                <p id="select_color">Select Color <img src="./../asset/image/content/product/down_icon.png" id="down_arrow_icon" class="" /></p>
                <p id="order_now">
                    ORDER NOW
                </p>
            </div>
            <div class="row">

            </div>
        </div>
        <img class="img-responsive center-block" src="./../asset/image/content/product/product_proses.png" id="content_product_proses" class="" border="0">
        <p id="similar_product_text">Similar Product</p>
        <div class="row">
            <div class="col-xs-1" id="arrow_left">
                <img src="./../asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" />
            </div>
            <div class="col-xs-2" id="img_1">
                <img class="img-responsive center-block" src="./../asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-xs-2" id="img_2">
                <img class="img-responsive center-block" src="./../asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-xs-2" id="img_3">
                <img class="img-responsive center-block" src="./../asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-xs-2" id="img_4">
                <img class="img-responsive center-block" src="./../asset/image/content/product/chair_side_.png" id="content_product_left_image_side_" class="image_position" border="0">
            </div>
            <div class="col-xs-1" id="arrow_right">
                <img src="./../asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" />
            </div>
        </div>
    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>

    <script src="./../asset/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

</body>
</html>
