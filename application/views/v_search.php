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
<link href="./asset/css/search.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/footer.css" rel="stylesheet" type="text/css" />

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
        $("#cu").hover(
          function () {
                $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
          },
          function () {
                $('#contact_us').attr("src", './asset/image/header/contact_us.png');
          }
      );
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
    function o_prod_in(){
         $('#our_products').attr("src", './asset/image/header/our_products_active.png');
    }
    function o_prod_out() {
         $('#our_products').attr("src", './asset/image/header/our_products.png');
    }

    function o_cont_in(){
        $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
    }
    function o_cont_out(){
        $('#contact_us').attr("src", './asset/image/header/contact_us.png');
    }
    function o_works_in(){
        $('#our_works').attr("src", './asset/image/header/our_works_active.png');
    }
    function o_works_out(){
        $('#our_works').attr("src", './asset/image/header/our_works.png');
    }


</script>

</head>
<body>
    <?php include 'v_header_search.php'; ?>
    <script>
    $('#cu').removeClass("active");
    $('#contact_us').attr("src", './asset/image/header/contact_us.png');
    </script>
    <div class='content'>
        <div class="row">
            <div class="col-sm-6" id="left_content">
                <div id="content_left_text">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-8">
                        <p id="content_left_text_title">
                            YOUR SEARCH RESULT ABOUT "XXXXX" HAS 10 MATCHES
                        </p>
                    </div>
                    <div class="col-xs-4"></div>
                    <div class="col-xs-8" id="another_search_box">
                        <div>
                            <input type="text" id="another_search_text" name="another_search_text" placeholder="ANOTHER SEARCH" />
                            <img src="./asset/image/content/search_no_found/another_search_icon.png" id="another_search_icon"/>
                        </div>
                    </div>
                </div>
                <img class="img-responsive center-block" src="./asset/image/content/search_no_found/left_content_image.png" id="content_left_image" border="0">
            </div>
            <div class="col-sm-6" id="content_right">
                <?php for ($i=1; $i<6; $i++) {
                    echo '<p id="content_right_title'.$i.'">
                            Lorem Ipsum Dolor Sit Amet "'. "XXXX".'"'.
                          '</p>';
                    echo '<p id="content_right_body'.$i.'">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>';
                    echo '<div id="content_right_footer'.$i.'">
                            <a href="" style="color: #e61c24; text-decoration: underline;"><p>www.suva.com/xxxx</p></a>
                          </div>' ;
                    echo '<br id="id_line_brake"/>';
                }?>
                   <!-- <ul class="pagination">
                      <li><a href="" class="active" id="pagination_left_text">page</a></li>
                      <li><a href="">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                      <li><a href="">4</a></li>
                      <li><a href="">5</a></li>
                      <li><a href=""><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></li>
                    </ul>
                -->
            </div>
        </div>
    </div>
    <div id="space" style="margin-bottom: 200px;"></div>
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
