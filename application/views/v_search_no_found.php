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

<link href="./../asset/css/set_header_search_no_found.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/search_no_found.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/footer.css" rel="stylesheet" type="text/css" />

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
    <?php include 'v_header.php'; ?>
    <script>
    $('#cu').removeClass("active");
    $('#contact_us').attr("src", './../asset/image/header/contact_us.png');
    </script>
    <div class='content'>
        <div class="row">
            <div class="col-xs-6" id="left_content">
                <div id="content_left_text">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-8">
                        <p id="content_left_text_title">
                            YOUR SEARCH RESULT ABOUT "XXXXX" HAS NOT MATCH ANY DOCUMENT
                        </p>
                    </div>
                    <div class="col-xs-4"></div>
                    <div class="col-xs-8" id="another_search_box">
                        <div>
                            <input type="text" id="another_search_text" name="another_search_text" placeholder="ANOTHER SEARCH" />
                            <img src="./../asset/image/content/search_no_found/another_search_icon.png" id="another_search_icon"/>
                        </div>
                    </div>
                </div>
                <img class="img-responsive center-block" src="./../asset/image/content/search_no_found/left_content_image.png" id="content_left_image" border="0">
            </div>
            <div class="col-xs-6" id="content_right">
                <p id="content_right_title">
                    PLEASE CONTACT US FOR FURTHER INFORMATION
                </p>
                <p id="content_right_body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div id="content_right_information">
                    <p id="content_right_address">
                        <img src="./../asset/image/content/contact_us/location.png" class="content_search_no_found_logo" id="content_search_no_found_logo_address"/> Jalan Lorem Ipsum Dolor Sit Amet no. 99
                    </p>
                    <p class="content_right_phone">
                        <img src="./../asset/image/content/contact_us/phone.png" class="content_search_no_found_logo" id="content_search_no_found_logo_phone"/> (+62) 31 999999999
                    </p>
                    <p class="content_right_fax">
                        <img src="./../asset/image/content/contact_us/fax.png" class="content_search_no_found_logo" id="content_search_no_found_logo_fax"/> (+62) 31 999999999
                    </p>
                    <p class="content_right_email">
                        <img src="./../asset/image/content/contact_us/email.png" class="content_search_no_found_logo" id="content_search_no_found_logo_email"/> SUVA@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>
</body>
</html>
