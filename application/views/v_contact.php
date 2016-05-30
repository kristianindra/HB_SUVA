<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>
<link rel="stylesheet" href="./asset/unslider/dist/css/unslider.css">
<style type="text/css">
html, body {
    margin: 0;
    padding: 0;
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
<link href="./asset/css/contact.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/footer.css" rel="stylesheet" type="text/css" />

<!--<link href="./asset/css/320_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./asset/css/480_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./asset/css/600_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./asset/css/801_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./asset/css/1024_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./asset/css/1280_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1281px)" />

<link href="./asset/css/320_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./asset/css/480_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./asset/css/600_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./asset/css/801_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./asset/css/1024_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./asset/css/1280_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1280px)" />

<link href="./asset/css/320_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./asset/css/480_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./asset/css/600_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./asset/css/801_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./asset/css/1024_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./asset/css/1280_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1281px)" />

<link href="./asset/css/320_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./asset/css/480_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./asset/css/600_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./asset/css/801_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./asset/css/1024_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./asset/css/1280_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1280px)" />-->

<script type="text/javascript">

    $(document).ready(function() {
        var img = document.getElementById('header');
        var height = img.clientWidth;
        //alert(height);
        document.getElementById("menu_bg").height = "705";
        $("#op").hover(
              function () {
                    $('#our_products').attr("src", './asset/image/header/our_products_active.png');
              },
              function () {
                    $('#our_products').attr("src", './asset/image/header/our_products.png');
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
            $('#cu').addClass("active");
            $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
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

    function o_sb(){
        $('#sidebar').toggleClass("show");
    }

    function o_works_in(){
        $('#our_works').attr("src", './asset/image/header/our_works_active.png');
    }
    function o_works_out(){
        $('#our_works').attr("src", './asset/image/header/our_works.png');
    }

    function o_prod_in(){
         $('#our_products').attr("src", './asset/image/header/our_products_active.png');
    }
    function o_prod_out() {
         $('#our_products').attr("src", './asset/image/header/our_products.png');
    }

</script>

</head>
<body>
    <?php include 'v_header_contact_us.php'; ?>
    <div class='content'>
        <div class="row"></div>
        <p style="text-align:center;" class="content_title1">
            FOR FURTHER INFORMATION
        </p>
        <p style="text-align:center;" class="content_title2">
            PLEASE CONTACT US
        </p>
        <p style="text-align:center;" class="content_detail address">
            <img src="./asset/image/content/contact_us/location.png" class="content_logo"/> Jl. Lorem Ipsum Dolor Sit Amet no. 99
        </p>
        <p style="text-align:center;" class="address_">
            Surabaya - Indonesia
        </p>
        <p style="text-align:center;" class="phone">
            <img src="./asset/image/content/contact_us/phone.png" class="content_logo"/> (+62) 31 999999999
        </p>
        <p style="text-align:center;" class="fax">
            <img src="./asset/image/content/contact_us/fax.png" class="content_logo"/> (+62) 31 999999999
        </p>
        <p style="text-align:center;" class="email">
            <img src="./asset/image/content/contact_us/email.png" class="content_logo"/> SUVA@gmail.com
        </p>
    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>
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
