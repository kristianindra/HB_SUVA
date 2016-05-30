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

<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="./asset/flexslider/default-five-slides.css" type="text/css" />
	<script src="./asset/flexslider/jquery.flexslider-min.js"></script>

	<script src="./asset/flexslider/css3-mediaqueries.js"></script>

    <!-- Kwiks pieces -->
	<script src="./asset/flexslider/kwiks.js"></script>

	<!-- Includes for this demo
	<link rel="stylesheet" href="./asset/flexslider/demo-stuff/demo1.css" type="text/css" media="screen" />-->

<link href="./asset/css/header.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/our_work.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/footer.css" rel="stylesheet" type="text/css" />

<!-- 1 -->


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
          $("#cu").hover(
                function () {
                      $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
                },
                function () {
                      $('#contact_us').attr("src", './asset/image/header/contact_us.png');
                }
            );
            $('#ow').addClass("active");
            $('#our_works').attr("src", './asset/image/header/our_works_active.png');

/*
            $("#img1").hover(
                function () {
                      $('#image1').attr("src", './asset/image/content/work/home_color.png');
                },
                function () {
                      $('#image1').attr("src", './asset/image/content/work/home.png');
                }
            );
            $("#flex_sidebar_1").hover(
                function () {
                      $('#image1').attr("src", './asset/image/content/work/home_color.png');
                },
                function () {
                      $('#image1').attr("src", './asset/image/content/work/home.png');
                }
            );


            $("#img2").hover(
                function () {
                      $('#image2').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image2').attr("src", './asset/image/content/work/chair.png');
                }
            );
            $("#flex_sidebar_2").hover(
                function () {
                      $('#image2').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image2').attr("src", './asset/image/content/work/chair.png');
                }
            );


            $("#img3").hover(
                function () {
                      $('#image3').attr("src", './asset/image/content/work/product_list_color.png');
                },
                function () {
                      $('#image3').attr("src", './asset/image/content/work/product_list.png');
                }
            );
            $("#flex_sidebar_3").hover(
                function () {
                      $('#image3').attr("src", './asset/image/content/work/product_list_color.png');
                },
                function () {
                      $('#image3').attr("src", './asset/image/content/work/product_list.png');
                }
            );


            $("#img4").hover(
                function () {
                      $('#image4').attr("src", './asset/image/content/work/search_color.png');
                },
                function () {
                      $('#image4').attr("src", './asset/image/content/work/search.png');
                }
            );
            $("#flex_sidebar_4").hover(
                function () {
                      $('#image4').attr("src", './asset/image/content/work/search_color.png');
                },
                function () {
                      $('#image4').attr("src", './asset/image/content/work/search.png');
                }
            );


            $("#img5").hover(
                function () {
                      $('#image5').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image5').attr("src", './asset/image/content/work/chair.png');
                }
            );
            $("#flex_sidebar_5").hover(
                function () {
                      $('#image5').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image5').attr("src", './asset/image/content/work/chair.png');
                }
            );

            $("#img6").hover(
                function () {
                      $('#image6').attr("src", './asset/image/content/work/home_color.png');
                },
                function () {
                      $('#image6').attr("src", './asset/image/content/work/home.png');
                }
            );
            $("#flex_sidebar_6").hover(
                function () {
                      $('#image6').attr("src", './asset/image/content/work/home_color.png');
                },
                function () {
                      $('#image6').attr("src", './asset/image/content/work/home.png');
                }
            );

            $("#img7").hover(
                function () {
                      $('#image7').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image7').attr("src", './asset/image/content/work/chair.png');
                }
            );
            $("#flex_sidebar_7").hover(
                function () {
                      $('#image7').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image7').attr("src", './asset/image/content/work/chair.png');
                }
            );

            $("#img8").hover(
                function () {
                      $('#image8').attr("src", './asset/image/content/work/product_list_color.png');
                },
                function () {
                      $('#image8').attr("src", './asset/image/content/work/product_list.png');
                }
            );
            $("#flex_sidebar_8").hover(
                function () {
                      $('#image8').attr("src", './asset/image/content/work/product_list_color.png');
                },
                function () {
                      $('#image8').attr("src", './asset/image/content/work/product_list.png');
                }
            );

            $("#img9").hover(
                function () {
                      $('#image9').attr("src", './asset/image/content/work/search_color.png');
                },
                function () {
                      $('#image9').attr("src", './asset/image/content/work/search.png');
                }
            );
            $("#flex_sidebar_9").hover(
                function () {
                      $('#image9').attr("src", './asset/image/content/work/search_color.png');
                },
                function () {
                      $('#image9').attr("src", './asset/image/content/work/search.png');
                }
            );

            $("#img10").hover(
                function () {
                      $('#image10').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image10').attr("src", './asset/image/content/work/chair.png');
                }
            );
            $("#flex_sidebar_10").hover(
                function () {
                      $('#image10').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image10').attr("src", './asset/image/content/work/chair.png');
                }
            );



            $("#img11").hover(
                function () {
                      $('#image11').attr("src", './asset/image/content/work/home_color.png');
                },
                function () {
                      $('#image11').attr("src", './asset/image/content/work/home.png');
                }
            );
            $("#flex_sidebar_11").hover(
                function () {
                      $('#image11').attr("src", './asset/image/content/work/home_color.png');
                },
                function () {
                      $('#image11').attr("src", './asset/image/content/work/home.png');
                }
            );

            $("#img12").hover(
                function () {
                      $('#image12').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image12').attr("src", './asset/image/content/work/chair.png');
                }
            );
            $("#flex_sidebar_12").hover(
                function () {
                      $('#image12').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image12').attr("src", './asset/image/content/work/chair.png');
                }
            );

            $("#img13").hover(
                function () {
                      $('#image13').attr("src", './asset/image/content/work/product_list_color.png');
                },
                function () {
                      $('#image13').attr("src", './asset/image/content/work/product_list.png');
                }
            );
            $("#flex_sidebar_13").hover(
                function () {
                      $('#image13').attr("src", './asset/image/content/work/product_list_color.png');
                },
                function () {
                      $('#image13').attr("src", './asset/image/content/work/product_list.png');
                }
            );

            $("#img14").hover(
                function () {
                      $('#image14').attr("src", './asset/image/content/work/search_color.png');
                },
                function () {
                      $('#image14').attr("src", './asset/image/content/work/search.png');
                }
            );
            $("#flex_sidebar_14").hover(
                function () {
                      $('#image14').attr("src", './asset/image/content/work/search_color.png');
                },
                function () {
                      $('#image14').attr("src", './asset/image/content/work/search.png');
                }
            );

            $("#img15").hover(
                function () {
                      $('#image15').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image15').attr("src", './asset/image/content/work/chair.png');
                }
            );
            $("#flex_sidebar_15").hover(
                function () {
                      $('#image15').attr("src", './asset/image/content/work/chair_color.png');
                },
                function () {
                      $('#image15').attr("src", './asset/image/content/work/chair.png');
                }
            );*/


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
/* 3 */
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

       function f_img1_in(){
           $('#image1').attr("src", './asset/image/content/work/home_color.png');
       }
       function f_img1_out(){
            $('#image1').attr("src", './asset/image/content/work/home.png');
        }

        function f_img2_in(){
            $('#image2').attr("src", './asset/image/content/work/chair_color.png');
        }
        function f_img2_out(){
            $('#image2').attr("src", './asset/image/content/work/chair.png');
        }

        function f_img3_in(){
            $('#image3').attr("src", './asset/image/content/work/product_list_color.png');
        }
        function f_img3_out(){
            $('#image3').attr("src", './asset/image/content/work/product_list.png');
        }

        function f_img4_in(){
            $('#image4').attr("src", './asset/image/content/work/search_color.png');
        }
        function f_img4_out(){
            $('#image4').attr("src", './asset/image/content/work/search.png');
        }

        function f_img5_in(){
            $('#image5').attr("src", './asset/image/content/work/chair_color.png');
        }
        function f_img5_out(){
            $('#image5').attr("src", './asset/image/content/work/chair.png');
        }

        function f_img6_in(){
            $('#image6').attr("src", './asset/image/content/work/home_color.png');
        }
        function f_img6_out(){
             $('#image6').attr("src", './asset/image/content/work/home.png');
         }

         function f_img7_in(){
             $('#image7').attr("src", './asset/image/content/work/chair_color.png');
         }
         function f_img7_out(){
             $('#image7').attr("src", './asset/image/content/work/chair.png');
         }

         function f_img8_in(){
             $('#image8').attr("src", './asset/image/content/work/product_list_color.png');
         }
         function f_img8_out(){
             $('#image8').attr("src", './asset/image/content/work/product_list.png');
         }

         function f_img9_in(){
             $('#image9').attr("src", './asset/image/content/work/search_color.png');
         }
         function f_img9_out(){
             $('#image9').attr("src", './asset/image/content/work/search.png');
         }

         function f_img10_in(){
             $('#image10').attr("src", './asset/image/content/work/chair_color.png');
         }
         function f_img10_out(){
             $('#image10').attr("src", './asset/image/content/work/chair.png');
         }

         function f_img11_in(){
             $('#image11').attr("src", './asset/image/content/work/home_color.png');
         }
         function f_img11_out(){
             $('#image11').attr("src", './asset/image/content/work/home.png');
         }

         function f_img12_in(){
             $('#image12').attr("src", './asset/image/content/work/chair_color.png');
         }
         function f_img12_out(){
              $('#image12').attr("src", './asset/image/content/work/chair.png');
          }

          function f_img13_in(){
              $('#image13').attr("src", './asset/image/content/work/product_list_color.png');
          }
          function f_img13_out(){
              $('#image13').attr("src", './asset/image/content/work/product_list.png');
          }

          function f_img14_in(){
              $('#image14').attr("src", './asset/image/content/work/search_color.png');
          }
          function f_img14_out(){
              $('#image14').attr("src", './asset/image/content/work/search.png');
          }

          function f_img15_in(){
              $('#image15').attr("src", './asset/image/content/work/chair_color.png');
          }
          function f_img15_out(){
              $('#image15').attr("src", './asset/image/content/work/chair.png');
          }
</script>


</head>
<body>
    <div class="hdr_work" style="width:100%;">
      <?php include 'v_header_our_work.php'; ?>
    </div>
    <!-- 2 -->
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
                <li class="content_menu">STOOLS</li>
            </ul>
        </div>
        <div class="container">
            <div class="flexslider">
        		<ul class="slides">
        			<li>
        				<img src="./asset/image/content/work/home.png"
                        onmouseover="this.src='./asset/image/content/work/home_color.png';"
                        onmouseout="this.src='./asset/image/content/work/home.png';"  id="image1"/>
        				<div class="flex-caption" id="img1" onmouseover="f_img1_in();" onmouseout="f_img1_out();">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_1"  onmouseover="f_img1_in();" onmouseout="f_img1_out();"/>
        			</li>
                    <li>
        				<img src="./asset/image/content/work/chair.png"
                        onmouseover="this.src='./asset/image/content/work/chair_color.png';"
                        onmouseout="this.src='./asset/image/content/work/chair.png';" id="image2"/>
        				<div class="flex-caption" id="img2" onmouseover="f_img2_in();" onmouseout="f_img2_out();">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_2"  onmouseover="f_img2_in();" onmouseout="f_img2_out();" />
        			</li>
                    <li>
        				<img src="./asset/image/content/work/product_list.png"
                        onmouseover="this.src='./asset/image/content/work/product_list_color.png';"
                        onmouseout="this.src='./asset/image/content/work/product_list.png';" id="image3"/>
        				<div class="flex-caption" id="img3" onmouseover="f_img3_in();" onmouseout="f_img3_out();">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_3"  onmouseover="f_img3_in();" onmouseout="f_img3_out();" />
        			</li>
                    <li>
        				<img src="./asset/image/content/work/search.png"
                        onmouseover="this.src='./asset/image/content/work/search_color.png';"
                        onmouseout="this.src='./asset/image/content/work/search.png';" id="image4"/>
        				<div class="flex-caption" id="img4" onmouseover="f_img4_in();" onmouseout="f_img4_out();">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_4"  onmouseover="f_img4_in();" onmouseout="f_img4_out();" />
        			</li>
        			<li>
                        <img src="./asset/image/content/work/chair.png"
                        onmouseover="this.src='./asset/image/content/work/chair_color.png';"
                        onmouseout="this.src='./asset/image/content/work/chair.png';" id="image5"/>
        				<div class="flex-caption" id="img5" onmouseover="f_img5_in();" onmouseout="f_img5_out();">
        					<h3>LOREM IPSUM DOLOR SIT AMET</h3>
        					<p>type: XXXX, 2016</p>
        				</div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_5"  onmouseover="f_img5_in();" onmouseout="f_img5_out();" />
        			</li>
                </ul>
            </div>
        </div>
        <div class="container" id="container_2">
            <div class="flexslider">
        		<ul class="slides">
                    <li>
                        <img src="./asset/image/content/work/home.png"
                        onmouseover="this.src='./asset/image/content/work/home_color.png';"
                        onmouseout="this.src='./asset/image/content/work/home.png';"  id="image6"/>
                        <div class="flex-caption" id="img6" onmouseover="f_img6_in();" onmouseout="f_img6_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_6"  onmouseover="f_img6_in();" onmouseout="f_img6_out();"/>
                    </li>
                    <li>
                        <img src="./asset/image/content/work/chair.png"
                        onmouseover="this.src='./asset/image/content/work/chair_color.png';"
                        onmouseout="this.src='./asset/image/content/work/chair.png';" id="image7"/>
                        <div class="flex-caption" id="img7" onmouseover="f_img7_in();" onmouseout="f_img7_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_7"  onmouseover="f_img7_in();" onmouseout="f_img7_out();"/>
                    </li>
                    <li>
                        <img src="./asset/image/content/work/product_list.png"
                        onmouseover="this.src='./asset/image/content/work/product_list_color.png';"
                        onmouseout="this.src='./asset/image/content/work/product_list.png';" id="image8"/>
                        <div class="flex-caption" id="img8" onmouseover="f_img8_in();" onmouseout="f_img8_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_8" onmouseover="f_img8_in();" onmouseout="f_img8_out();" />
                    </li>
                    <li>
                        <img src="./asset/image/content/work/search.png"
                        onmouseover="this.src='./asset/image/content/work/search_color.png';"
                        onmouseout="this.src='./asset/image/content/work/search.png';" id="image9"/>
                        <div class="flex-caption" id="img9" onmouseover="f_img9_in();" onmouseout="f_img9_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_9" onmouseover="f_img9_in();" onmouseout="f_img9_out();" />
                    </li>
                    <li>
                        <img src="./asset/image/content/work/chair.png"
                        onmouseover="this.src='./asset/image/content/work/chair_color.png';"
                        onmouseout="this.src='./asset/image/content/work/chair.png';" id="image10"/>
                        <div class="flex-caption" id="img10" onmouseover="f_img10_in();" onmouseout="f_img10_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_10"  onmouseover="f_img10_in();" onmouseout="f_img10_out();"/>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container" id="container_3">
            <div class="flexslider">
        		<ul class="slides">
                    <li>
                        <img src="./asset/image/content/work/home.png"
                        onmouseover="this.src='./asset/image/content/work/home_color.png';"
                        onmouseout="this.src='./asset/image/content/work/home.png';"  id="image11"/>
                        <div class="flex-caption" id="img11" onmouseover="f_img11_in();" onmouseout="f_img11_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_11"  onmouseover="f_img11_in();" onmouseout="f_img11_out();"/>
                    </li>
                    <li>
                        <img src="./asset/image/content/work/chair.png"
                        onmouseover="this.src='./asset/image/content/work/chair_color.png';"
                        onmouseout="this.src='./asset/image/content/work/chair.png';" id="image12"/>
                        <div class="flex-caption" id="img12" onmouseover="f_img12_in();" onmouseout="f_img12_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_12"  onmouseover="f_img12_in();" onmouseout="f_img12_out();"/>
                    </li>
                    <li>
                        <img src="./asset/image/content/work/product_list.png"
                        onmouseover="this.src='./asset/image/content/work/product_list_color.png';"
                        onmouseout="this.src='./asset/image/content/work/product_list.png';" id="image13"/>
                        <div class="flex-caption" id="img13" onmouseover="f_img13_in();" onmouseout="f_img13_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_13"  onmouseover="f_img13_in();" onmouseout="f_img13_out();"/>
                    </li>
                    <li>
                        <img src="./asset/image/content/work/search.png"
                        onmouseover="this.src='./asset/image/content/work/search_color.png';"
                        onmouseout="this.src='./asset/image/content/work/search.png';" id="image14"/>
                        <div class="flex-caption" id="img14" onmouseover="f_img14_in();" onmouseout="f_img14_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_14" onmouseover="f_img14_in();" onmouseout="f_img14_out();" />
                    </li>
                    <li>
                        <img src="./asset/image/content/work/chair.png"
                        onmouseover="this.src='./asset/image/content/work/chair_color.png';"
                        onmouseout="this.src='./asset/image/content/work/chair.png';" id="image15"/>
                        <div class="flex-caption" id="img15" onmouseover="f_img15_in();" onmouseout="f_img15_out();">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>type: XXXX, 2016</p>
                        </div>
                        <img src="./asset/image/content/work/flex_sidebar_.png" class="flex_sidebar_image" id="flex_sidebar_15" onmouseover="f_img15_in();" onmouseout="f_img15_out();" />
                    </li>
                </ul>
            </div>
        </div>
        <span id="responsiveFlag"></span>
    </div>

    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>
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
