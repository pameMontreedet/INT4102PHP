<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="./css/custom.min.css">
        <link rel="stylesheet" href="./css/grid.min.css" media="screen" charset="utf-8">
        <script type="text/javascript" async="" src="./js/ga.js"></script>
        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/custom.js"></script>
        <script>
            window.onload = function () {
                $("#p1").hide();
                $("#p2").hide();
                $("#p3").hide();
                $("#p4").hide();
                $("#p5").hide();
                $("#p6").hide();
                $("#hide1").hide();
                $("#hide2").hide();
                $("#hide3").hide();
                $("#hide4").hide();
                $("#hide5").hide();
                $("#hide6").hide();
            }
            $(function () {
                $("#show1").click(function () {
                    showElement();
                    $("#show1").hide();
                    $("#hide1").show();
                });
                $("#hide1").click(function () {
                    hideElement();
                    $("#show1").show();
                    $("#hide1").hide();
                });

                $("#show2").click(function () {
                    $("#p2").show(500);
                });
                $("#hide2").click(function () {
                    $("#p2").hide(500);
                });
                function showElement() {
                    $("#p1").show(500);
                }
                function hideElement() {
                    $("#p1").hide(500);
                }
                /*
                 */
                $("#show2").click(function () {
                    $("#p2").show(500);
                    $("#show2").hide();
                    $("#hide2").show();
                });
                $("#hide2").click(function () {
                    $("#p2").hide(500);
                    $("#show2").show();
                    $("#hide2").hide();
                });
                $("#show3").click(function () {
                    $("#p3").show(500);
                    $("#show3").hide();
                    $("#hide3").show();
                });
                $("#hide3").click(function () {
                    $("#p3").hide(500);
                    $("#show3").show();
                    $("#hide3").hide();
                });
                $("#show4").click(function () {
                    $("#p4").show(500);
                    $("#show4").hide();
                    $("#hide4").show();
                });
                $("#hide4").click(function () {
                    $("#p4").hide(500);
                    $("#show4").show();
                    $("#hide4").hide();
                });
                $("#show5").click(function () {
                    $("#p5").show(500);
                    $("#show5").hide();
                    $("#hide5").show();
                });
                $("#hide5").click(function () {
                    $("#p5").hide(500);
                    $("#show5").show();
                    $("#hide5").hide();

                });
                $("#show6").click(function () {
                    $("#p6").show(500);
                    $("#show6").hide();
                    $("#hide6").show();
                });
                $("#hide6").click(function () {
                    $("#p6").hide(500);
                    $("#show6").show();
                    $("#hide6").hide();

                });

            });

            $(document).ready(function () {
                $('#loading').show();
                setTimeout(function () {
                    $('#loading').hide();
                    $('#loading_text').hide();
                    $('.site').show();
                }, 3000);

            });
        </script>
        <style>
            .row{
                padding-left : 20px;
                padding-right : 20px;
                padding-top : 20px;
            }	
            .caption{
                border: 5px;
            }

            html,body{
                background:#ffffff;
            }
            .load{
                padding-top:50px;
            }
            #loading{
                display: none;
            }
            .site{
                display:none;
            }
            .top-menu{
                background:#1f1f60;

            }
            .top-menu a{
                color:#d7d7c1;
                font-size:22px;
                /*
                footer
                */
                .social-icon {
  list-style: none;
  padding-left: 0;
  margin: 0;
  text-align: center;
}

.social-icon:before,
.social-icon:after {
  content: " ";
  display: table;
}

.social-icon:after {
  clear: both;
}

.social-icon li {
  display: inline-block;
  margin: 2px 4px;
}

.social-icon li a {
  display: block;
  width: 60px;
  height: 60px;
  line-height: 66px;
  color: #fff;
  text-align: center;
  border: 0 none;
  border-radius: 50%;
  font-size: 27px;
  box-shadow: 0px 1px 2px 0px rgba(90, 91, 95, 0.15);
  transition: all 0.3s ease-in-out;
}

.social-icon li a:hover {
   box-shadow: 0px 8px 15px 0px rgba(90, 91, 95, 0.33);
}

.facebook {
   background-color: #3b5998;
}

.twitter {
   background-color: #1da1f2;
}

.google-plus {
   background-color: #dd4b39;
}
            }
        </style>
        <style type="text/css">
            @media print{
                #hid{
                    display: none;
                }	
            }
            /*modal css*/
            /* fade ออกมาตรงกลางหน้าจอ*/
            .fade {
                opacity: 2;
                -webkit-transition: opacity 1s linear;
                transition: opacity 1s linear;
            }


            /* fade left ออกมาจากทางซ้ายของหน้าจอ 
            .modal.fade:not(.in) .modal-dialog {
                    -webkit-transform: translate3d(-100%, 0, 0);
                    transform: translate3d(-100%, 0, 0);
            }
            */
            .modal-footer{
                background: #e5e5e5;
            }
            .modal-body {
                background-image: url('images/img_home/model.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                height: 400px;
            }
        </style>
        <script type="text/javascript">
            /*
             //onload show modal script ชุดนี้โหลดมาตรงๆ ไม่มีหน่วงเวลานะ
             $(document).ready(function(){
             $("#myModal").modal('show');
             });
             */

            //เรีกยก modal ออกมาแสดง	
            var show = function () {
                $('#Show').modal('show');
            };

            /* กำหนดเวลาหลังเปิดหน้าเว็บ ว่าจะให้แสดงหลังโหลดหน้าเว็บแล้วกี่วินาที  เช่น 2000 = 2 วิ */
            $(window).load(function () {
                var timer = window.setTimeout(show, 3200);
            });

        </script>
    </head>
    <div class="container-fluide site text-center">
        <body class="">
            <?php include('navbar.php'); ?>
            <br>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2400" id="hid">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <strong >
                            <img src="img/slide2.jpg" alt="..." width="100%" class="img-responsive" >
                        </strong>
                        <div class="carousel-caption"><strong>สินค้าขายดี</strong></div>
                    </div>
                    <div class="item">
                        <strong>
                            <img src="img/slide3.jpg" alt="..." width="100%" class="img-responsive">
                        </strong>
                        <div class="carousel-caption"><strong>สินค้าโปรโมชั่น</strong></div>
                    </div>
                </div>
            </div>
            <br>

                    <div style="background-color: #f5f5f5">
            <div align="center">
                <br>
            <h1><b>From the blog</b></h1>
             <br>
        </div>
        <div class="row" >
            <div class="col-xs-12 col-md-4" align="center">
                <div class="thumbnail">
                    <div class="caption">
                        <div class="large-6 columns" >
                            <div align="center">
                                <img src="./images/img_home/Pizza_500_500.jpg" alt="..." width="350px" height="350px"  class="img-responsive"></div>
                            <div align="left">
                                <br>
                                <b>Pizza</b> is a yeasted flatbread typically topped with tomato sauce and cheese and baked in an oven. It is commonly topped with a selection of meats, vegetables and condiments. <p id="p1">The term pizza was first recorded in the 10th century, in a Latin manuscript from Gaeta in Southern Lazio on the border with Campania. Modern pizza was invented in Naples, Campania, Southern Italy, and the dish and its variants have since become popular and common in many areas of the world.</p>
                            </div>



                            <br>
                            <div align="center">
                                <button id="show1">More</button>
                                <button id="hide1">hide</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" align="center">
                <div class="thumbnail">
                    <div class="caption">
                        <div class="large-6 columns" >
                            <div align="center">
                                <img src="./images/img_home/Strawberry_500_500.jpg" alt="..." width="350px" height="350px" class="img-responsive"></div>
                            <div align="left">
                                <br>
                                <b>Strawberry </b>is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries. It is cultivated worldwide for its fruit. The fruit is widely appreciated for its<p id="p2"> characteristic aroma, bright red color, juicy texture, and sweetness. It is consumed in large quantities, either fresh or in such prepared foods as preserves, juice, pies, ice creams, milkshakes, and chocolates. Artificial strawberry flavorings and aromas are also widely used in many products like lip gloss, candy, hand sanitizers, perfume, and many others. </p>
                            </div>

                            <br>
                            <div align="center">
                                <button id="show2">More</button>
                                <button id="hide2">hide</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" align="center">
                <div class="thumbnail">
                    <div class="caption">
                        <div class="large-6 columns" >
                            <div align="center">
                                <img src="./images/img_home/Lasagne_500_500.jpg" alt="..." width="350px" height="350px"  class="img-responsive"></div>
                            <div align="left">
                                <br>
                                <b>Lasagne</b> originated in Italy during the Middle Ages and has traditionally been ascribed to the city of Naples (Campania). The first recorded recipe was set down in the early 14th <p id="p3"> century Liber de Coquina (The Book of Cookery). It bore only a slight resemblance to the later traditional form of lasagne, featuring a fermented dough, flattened into a thin sheet, boiled, sprinkled with cheese and spices, and then eaten with the use of a small pointed stick. Other recipes written in the century following the Liber de Coquina recommended</p>
                            </div>

                            <br>
                            <div align="center">
                                <button id="show3">More</button>
                                <button id="hide3">hide</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4" align="center">
                <div class="thumbnail">
                    <div class="caption">
                        <div class="large-6 columns" >
                            <div align="center">
                                <img src="./images/img_home/Tuna_salad_500_500.jpg" alt="..." width="350px" height="350px" class="img-responsive"></div>
                            <div align="left">
                                <br>
                                <b>Tuna salad</b> is typically a blend of two main ingredients: tuna and mayonnaise. The tuna used is usually pre-cooked, canned, and packaged in water or oil. relish, and onion are <p id="p4">Pickles, celery,  ingredients that are often added. When the spread is placed on bread, it makes a tuna salad sandwich. Tuna salad is also regularly served on top of lettuce, tomato, avocado, or crackers, or by itself. Quick homemade tuna salad is often made by omitting the eggs and only adding relish to the tuna and mayonnaise or egg mayonnaise-substitute.[1] Eggs are omitted because they must be cooked</p>
                            </div>
                            <br>
                            <div align="center">
                                <button id="show4">More</button>
                                <button id="hide4">hide</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" align="center">
                <div class="thumbnail">
                    <div class="caption">
                        <div class="large-6 columns" >
                            <div align="center">
                                <img src="./images/img_home/Spaghetti_and_meatballs_500_500.jpg" alt="..." width="350px" height="350px" class="img-responsive"></div>
                            <div align="left">
                                <br>
                                <b>Spaghetti with meatballs</b>(or spaghetti and meatballs) is an Italian-American dish consisting of spaghetti, tomato sauce and meatballs. It is widely believed that spaghetti with<p id="p5"> meatballs was an innovation of early 20th-century Italian immigrants in New York City; the National Pasta Association (originally named the National Macaroni Manufacturers Association) is said to be the first organization to publish a recipe for it, in the 1920s. Italian writers often mock the dish as pseudo-Italian or non-Italian because, in Italy, meatballs are served only with egg-based baked pasta and are smaller.</p>
                            </div>
                            <br>
                            <div align="center">
                                <button id="show5">More</button>
                                <button id="hide5">hide</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" align="center">
                <div class="thumbnail">
                    <div class="caption">
                        <div class="large-6 columns" >
                            <div align="center">
                                <img src="./images/img_home/Chicken_parmiagana_500_500.jpg" alt="..." width="350px" height="350px" class="img-responsive"></div>
                            <div align="left">
                                <br>
                                <b>Chicken parmigiana</b>, or chicken parmesan (Italian Pollo alla parmigiana) (also referred to colloquially in the United States as 'chicken parm' and in Australia as a 'parmy', 'parmi' or<p id="p6"> 'parma'), is a popular Italian-American dish. It consists of a breaded chicken breast topped with tomato sauce and mozzarella, parmesan or provolone cheese. A slice of ham or bacon is sometimes added, but not all chefs are in agreement with the addition of pork. It has been speculated that the dish is based on a combination of the Italian melanzane alla Parmigiana, a dish using breaded eggplant slices </p>
                            </div>
                            <br>
                            <div align="center">
                                <button id="show6">More</button>
                                <button id="hide6">hide</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
                        <hr><br>
            
            
            
            
            
        <div align="center">
            <h1><b>Main dishes</b></h1>
        </div>
            <div class="row">
                <?php 
                require 'connectdb.php';
                $query = "SELECT * FROM `food` WHERE `food_type` = 1 LIMIT 10,3";
		$result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>
                <div class="col-xs-12 col-md-4">

                    <form action="order.php" method="get">
                        <div class="thumbnail">
                            <div class="caption">
                                <p align="center">
                                    <img src="./images/img_home/<?php echo $row[food_img]; ?>" width="350px" height="350px" alt="..." class="img-responsive">
                                </p> 
                                <h5 align="center"><b><a href="order.php?food_name=<?php echo $row["food_name"];?>"><?php echo $row[food_name]; ?></a></b></h5>
                                <h2 align="center"><b>฿<?php echo $row[food_price]; ?></b></h2>
                                <p align="center"><a href="order.php?ProductID=<?php echo $row["food_id"];?>" class="btn btn-default" role="button">Add To Basket</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                                    
                <?php }?>
                <?php
                    mysqli_free_result($result);
    			mysqli_close($link);
                ?>
                
            </div>
        <div align="center">
                    <a href="maindishes.php" class="btn btn-info" role="button">SEE ALL MAIN DISHES</a>
                </div>
        <hr><br>
            <div align="center">
            <h1><b>Desserts</b></h1>
        </div>
            <div class="row">
                <?php 
                require 'connectdb.php';
                $query = "SELECT * FROM `food` WHERE `food_type` = 3 LIMIT 12,3";
		$result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>
                <div class="col-xs-12 col-md-4">

                    <form action="order.php" method="get">
                        <div class="thumbnail">
                            <div class="caption">
                                <p align="center">                                    
                                    <img src="./images/img_home/<?php echo $row[food_img]; ?>" width="350px" height="350px" alt="..." class="img-responsive">
                                    </p> 
                                <h5 align="center"><b><a href="order.php?food_name=<?php echo $row["food_name"];?>"><?php echo $row[food_name]; ?></a></b></h5>
                                <h2 align="center"><b>฿<?php echo $row[food_price]; ?></b></h2>
                                <p align="center"><a href="order.php?ProductID=<?php echo $row["food_id"];?>" class="btn btn-default" role="button">Add To Basket</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                                    
                <?php }?>
                <?php
                    mysqli_free_result($result);
    			mysqli_close($link);
                ?>
            </div>
                <div align="center">
                    <a href="desserts.php" class="btn btn-info" role="button">SEE ALL MAIN DISHES</a>
                </div>
        <hr><br>
</div>
            <div id="Show" class="modal fade">
                <div class="modal-dialog modal-lg"> 
                    <div class="modal-content">
                        <!--
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title">RESTAURANT</h4>
                        </div>
                        -->
                        <div class="modal-body" >

                        <p>
                    <?php
                        session_start();
                        $username = $_SESSION['text_Username'];
                        if (empty($username)) {
                            ?>
                    <div style="margin-top: 60px">
                    <h1 align="center"><b style="color: #e5e5e5; "><I>ITALIAN FOODSHOP</I><br></b></h1>
                    <h3 style="color: #e7e7e7; "><p>OPEN EVERYDAY</p>
                            <p>10.00 A.M. - 10.00 P.M.</p>
                            TEL. 086-762-XXXX</h3>
                        
                    </div>
                        <?php } else {
                            ?>
                        <b><h1 align="center"><b style="color: #e5e5e5; "><I>ITALIAN FOODSHOP</I></b><br><br><b style="color: #ffffd7;">Welcome to Foodshop<br><?php echo $username; ?></b></h1></b>
                        <?php }
                        ?>
                    </p>
                        
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer-section">
                <div align="center">
            <div class="container">
                <div class="row">
                    <div align="center">
                    <div class="col-md-12 col-xs-12">
                        <img src="./images/img_home/fb.png" width="70px" height="70px" class="img-responsive" align="center">
                    </div><br>
                        @copyright 2017 Italian foodshop
                    </div>
                </div>
            </div>
                    </div>
        </footer>
    </div>
    <div class="row">
        <div class="col-xs-16 col-sm-16 col-md-16">
            <div align="center">
                <h2 id="loading_text" align="center">กำลังโหลด...</h2>
                <img src="./img/loading.gif" id="loading" width="500px" height="500px" class="img-responsive" align="center"><br>
            </div>
        </div>
    </div>
        

</body>

</html>
