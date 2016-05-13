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


<link href="./../asset/css/set_header_contact.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/contact.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/footer.css" rel="stylesheet" type="text/css" />

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
            $('#cu').addClass("active");
            $('#contact_us').attr("src", './../asset/image/header/contact_us_active.png');
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
    <?php include 'v_header.php'; ?>
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
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>
</body>
</html>
