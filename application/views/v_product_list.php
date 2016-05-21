<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>

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
}
</style>


<link href="./asset/css/set_header_product_list.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/product_list.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/footer.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

    $(document).ready(function() {
        var img = document.getElementById('header');
        var height = img.clientWidth;
        //alert(height);
        document.getElementById("menu_bg").height = "705";
        $("#cu").hover(
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
            $('#our_products').attr("src", './asset/image/header/our_products_active.png');

            $(document).on('click', 'div', function() {
        		var idny = $(this).attr('id');
                var classny = $(this).attr('class');
        		if (idny=="menu"){
                    $('#menu').toggleClass("show");
                    $('#menu_bg').toggleClass("show");
                    $('#menu_').toggleClass("show");
        		}
        	});
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
        if (idny=="main_menu_logo"){
            $('#menu').toggleClass("show");     
            $('#menu_bg').toggleClass("show");
            $('#menu_').toggleClass("show");
            $('#main_menu_logo').toggleClass("show");
            $('#main_menu_logo').attr("src", './asset/image/header/main_menu_active.png');
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
        <div id="list_item">
            <a href="product" id="img1"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img2"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img3"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img4"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img5"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img6"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img7"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img8"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
            <a href="product" id="img9"><div class="col-xs-3" class="item_list">
                <img src="./asset/image/content/product_list/chair_image.png" class="image_item_list" />
                <p class="text_item_list">LOREM IPSUM</p>
            </div></a>
        </div>
        <ul class="pagination">
          <li><a href="" class="active" id="pagination_left_text">page</a></li>
          <li><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li><a href="">5</a></li>
          <li><a href=""><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></li>
        </ul>
    </div>
    <div class="row">

    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>
</body>
</html>
