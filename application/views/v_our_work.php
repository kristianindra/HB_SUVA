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


<link href="./../asset/css/set_header_our_product.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/our_work.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./../asset/css/footer.css" rel="stylesheet" type="text/css" />

<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="./../asset/flexslider/default-five-slides.css" type="text/css" />
	<script src="./../asset/flexslider/jquery.flexslider-min.js"></script>

	<script src="./../asset/flexslider/css3-mediaqueries.js"></script>

    <!-- Kwiks pieces -->
	<script src="./../asset/flexslider/kwiks.js"></script>

	<!-- Includes for this demo -->
	<link rel="stylesheet" href="./../asset/flexslider/demo-stuff/demo.css" type="text/css" media="screen" />

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
          $("#cu").hover(
                function () {
                      $('#contact_us').attr("src", './../asset/image/header/contact_us_active.png');
                },
                function () {
                      $('#contact_us').attr("src", './../asset/image/header/contact_us.png');
                }
            );
            $('#ow').addClass("active");
            $('#our_works').attr("src", './../asset/image/header/our_works_active.png');
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


    var Main = Main || {};

		jQuery(window).load(function() {
			window.responsiveFlag = jQuery('#responsiveFlag').css('display');
			Main.gallery = new Gallery();

			jQuery(window).resize(function() {
				Main.gallery.update();
			});
		});

		function Gallery(){
			var self = this,
				container = jQuery('.flexslider'),
				clone = container.clone( false );

			this.init = function (){
				if( responsiveFlag == 'block' ){
					var slides = container.find('.slides');

					slides.kwicks({
						max : 500,
						spacing : 0
					}).find('li > a').click(function (){
						return false;
					});
				} else {
					container.flexslider();
				}
			}
			this.update = function () {
				var currentState = jQuery('#responsiveFlag').css('display');

				if(responsiveFlag != currentState) {

					responsiveFlag = currentState;
					container.replaceWith(clone);
					container = clone;
					clone = container.clone( false );

					this.init();
				}
			}

			this.init();
		}


</script>

</head>
<body>
    <?php include 'v_header.php'; ?>
    <div class='content'>
        <div class="row"></div>
        <p id="content_title">TAKE A LOOK OF OUR WORKS</p>
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
            <div class="flexslider">
        		<ul class="slides">
        			<li>
        				<img src="./../asset/image/header/head_contact-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/head_our_works-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
                            <span></span>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/head_search_no_result-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/home_head_background-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
        			<li>
        				<a href="#"><img src="./../asset/image/header/head_our_works-m.png" /></a>
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                </ul>
            </div>
        </div>
        <div class="container" id="container_2">
            <div class="flexslider">
        		<ul class="slides">
        			<li>
        				<img src="./../asset/image/header/head_contact-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/head_our_works-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
                            <span></span>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/head_search_no_result-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/home_head_background-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
        			<li>
        				<a href="#"><img src="./../asset/image/header/head_our_works-m.png" /></a>
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                </ul>
            </div>
        </div>
        <div class="container" id="container_3">
            <div class="flexslider">
        		<ul class="slides">
        			<li>
        				<img src="./../asset/image/header/head_contact-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/head_our_works-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
                            <span></span>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/head_search_no_result-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                    <li>
        				<img src="./../asset/image/header/home_head_background-m.png" />
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
        			<li>
        				<a href="#"><img src="./../asset/image/header/head_our_works-m.png" /></a>
        				<div class="flex-caption">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
        			</li>
                </ul>
            </div>
        </div>
        <span id="responsiveFlag"></span>
    </div>
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>
</body>
</html>
