<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>

<style type="text/css">
body{
    margin: 0;
    padding: 0;
}

#header{
    display: block;
    max-width: 2560px;
    height: 705px;
    width: 100%;
    background-image:  url("./../asset/image/header/head_contact-m.png");
    background-size: 100%;
    background-repeat: no-repeat;
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
<link href="./../asset/css/contact_1.css" rel="stylesheet" type="text/css" />
<!--<link href="./../asset/css/320_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./../asset/css/480_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./../asset/css/600_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./../asset/css/801_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./../asset/css/1024_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./../asset/css/1280_header.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1281px)" />

<link href="./../asset/css/320_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./../asset/css/480_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./../asset/css/600_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./../asset/css/801_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./../asset/css/1024_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./../asset/css/1280_contact_us.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1280px)" />

<link href="./../asset/css/320_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./../asset/css/480_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./../asset/css/600_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./../asset/css/801_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./../asset/css/1024_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./../asset/css/1280_special_offer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1281px)" />

<link href="./../asset/css/320_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 320px)" />
<link href="./../asset/css/480_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" />
<link href="./../asset/css/600_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 600px)" />
<link href="./../asset/css/801_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" />
<link href="./../asset/css/1024_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" />
<link href="./../asset/css/1280_footer.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1280px)" />-->

<script type="text/javascript">

    $(document).ready(function() {
        var img = document.getElementById('header');
        var height = img.clientWidth;
        alert(height);
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
    <div id="header">
        <div class="col-xs-3">
            <div id="sidebar">
                <div id="menu" class="show">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <div id="menu_" class="show">
                    <ul style="list-style-type:none;">
                      <li class="list_menu" id="op"><img src="./../asset/image/header/our_products.png" id="our_products" class="menu_logo"/> OUR PRODUCTS</li>
                      <li class="list_menu" id="ow"><img src="./../asset/image/header/our_works.png" id="our_works" class="menu_logo"/> OUR WORKS</li>
                      <li class="list_menu active"><img src="./../asset/image/header/contact_us_active.png" id="contact_us" class="menu_logo"/> CONTACT US</li>
                    </ul>
                </div>
                <div id="menu_bg" class="show"></div>
            </div>
        </div>
        <div class="col-xs-6" id="header_center">
            <p style="text-align:center;" id="header_center">
              <img src="./../asset/image/header/suva_logo.png" id="suva_logo"/>
            </p>
            <p style="text-align:center;">
              <img src="./../asset/image/header/made_by_us.png" id="made_by_us"/>
            </p>
            <p style="text-align:center;">
              <img src="./../asset/image/header/buy_now.png" id="buy_now"/>
            </p>
        </div>
        <div class="col-xs-3">
            <div id="search_box">
                <input type="text" id="search_text" name="search_text" placeholder="SEARCH" />
                <img src="./../asset/image/header/search_icon.png" id="search_icon"/>
            </div>
        </div>
    </div>
    <div class='content'>
        <div class="row"></div>
        <p style="text-align:center;" class="content_title1">
            FOR FURTHER INFORMATION
        </p>
        <p style="text-align:center;" class="content_title2">
            PLEASE CONTACT US
        </p>
        <p style="text-align:center;" class="content_detail address">
            <img src="./../asset/image/content/contact_us/location.png" class="content_logo"/> Jl. Lorem Ipsum Dolor Sit Amet no. 99
        </p>
        <p style="text-align:center;" class="address_">
            Surabaya - Indonesia
        </p>
        <p style="text-align:center;" class="phone">
            <img src="./../asset/image/content/contact_us/phone.png" class="content_logo"/> (+62) 31 999999999
        </p>
        <p style="text-align:center;" class="fax">
            <img src="./../asset/image/content/contact_us/fax.png" class="content_logo"/> (+62) 31 999999999
        </p>
        <p style="text-align:center;" class="email">
            <img src="./../asset/image/content/contact_us/email.png" class="content_logo"/> SUVA@gmail.com
        </p>
    </div>
    <div class="special_offer">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <p style="text-align:center;" class="special_offer_title">
                GET SPECIAL OFFER
            </p>
            <p style="text-align:center;" class="special_offer_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p style="text-align:center;" class="special_offer_email">
                <input type="text" id="email_text" name="email_text" placeholder="E-mail" />
                <img src="./../asset/image/special_offer/email.png" id="email_icon"/>
            </p>
        </div>
        <div class="col-xs-3"></div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-sm-5" id="copy_rights">
                &#169; 2016 SUVA. All rights reserved. Term and Condition Apply.
            </div>
            <div class="col-sm-2"></div>
            <div class="" id="footer_media_icon">
                <img src="./../asset/image/footer/facebook.png" class="footer_icon" id="for_left"/>
                <img src="./../asset/image/footer/twitter.png" class="footer_icon"/>
                <img src="./../asset/image/footer/google_plus.png" class="footer_icon"/>
            </div>
        </div>
    </div>
</body>
</html>
