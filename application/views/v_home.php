<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>
<link rel="stylesheet" href="./../asset/unslider/dist/css/unslider.css">
<link href="./../asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/home.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/footer.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    .my-slider ul li img{
        height: 708px;
    }
</style>

<script type="text/javascript">

    $(document).ready(function() {
        var img = document.getElementById('content_home_left_image');
        var height = img.clientHeight;
        //alert(height);

        document.getElementById("menu_bg").height = "705";
        $("#op").hover(
              function () {
                    $('#our_products').attr("src", './../asset/image/header/our_products_active.png');
              },
              function () {
                    $('#our_products').attr("src", './../asset/image/header/our_products.png');
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
            $("#cu").hover(
                  function () {
                        $('#contact_us').attr("src", './../asset/image/header/contact_us_active.png');
                  },
                  function () {
                        $('#contact_us').attr("src", './../asset/image/header/contact_us.png');
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
    <?php include 'header_home.php'; ?>

    <div class="content" style="margin-top: 718px;">
        <div class="container">
            <div class="row"></div>
            <div id="content_home_header">
                <p id="content_home_header_title">
                    ABOUT SUVA
                </p>
                <p id="content_home_header_body">
                    Well prepared, original designs
                </p>
                <p id="content_home_header_footer">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    <div id="content_home_products">
        <div class="row">
            <div class="col-xs-4" id="content_home_left_image">
                <img class="img-responsive center-block" src="./../asset/image/content/home/sofa.png" id="content_home_left_image" border="0">
                <p class="content_image_desc_title">SOFAS</p>
                <p class="content_image_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-xs-4" id="content_home_center_image">
                <a href="../Suva/Our_Product"><p id="our_product_box">
                    OUR PRODUCTS
                </p></a>
                <img class="img-responsive center-block" src="./../asset/image/content/home/stool.png" id="content_home_center_image" border="0">
                <p class="content_image_desc_title">STOOLS</p>
                <p class="content_image_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-xs-4" id="content_home_right_image">
                <img class="img-responsive center-block" src="./../asset/image/content/home/chair.png" id="content_home_center_image" border="0">
                <p class="content_image_desc_title">CHAIRS</p>
                <p class="content_image_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <div id="content_home_customization">
        <p id="content_home_costumization_title">CUSTOMIZATION</p>
        <p id="content_home_costumization_header">Built to fit your style and your life</p>
        <p id="content_home_costumization_body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="../Suva/Contact_Us"><p id="content_home_costumization_footer">CONTACT US</p></a>
    </div>

    <div id="content_home_material">
        <p id="content_home_material_title">CHOSE YOUR MATERIAL</p>
        <div id="content_home_choose_material">
            <div class="row">
                <div class="col-xs-1"><img src="./../asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" /></div>
                <div class="col-xs-1" id="material_wool">
                    <img src="./../asset/image/content/home/wool.png" id="wool_icon" class="material_logo" />
                    <span></span>
                    <p id="material_text1" class="material_text">WOOL</p>
                </div>
                <div class="col-xs-1" id="material_cotton">
                    <img src="./../asset/image/content/home/cotton.png" id="cotton_icon" class="material_logo" />
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
        <div id="content_home_customization_sofa_image">
            <img class="img-responsive block" src="./../asset/image/content/home/sofa_customization-m.png" id="content_home_customization_image" border="0" />
        </div>
    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>

    <script src="./../asset/js/jquery-2.1.4.min.js"></script>
    <script src="./../asset/unslider/src/js/unslider.js"></script>
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
