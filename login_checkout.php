<?php
session_start();
?>
<html>
    <head>
        <title>ตะกร้าสินค้า</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="./css/custom.min.css">
        <link rel="stylesheet" href="./css/grid.min.css" media="screen" charset="utf-8">
        <script type="text/javascript" async="" src="./js/ga.js"></script>
        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/custom.js"></script>
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
            .modal-header{
                background: #f5f5f5;
            }
            .modal-footer{
                background: #e5e5e5;
            }
            .modal-body {
                height: 200px;
                background: #e5e5e5;
            }
        </style>
        <script type="text/javascript">

            //เรีกยก modal ออกมาแสดง	
            var show = function () {
                $('#Show').modal('show');
            };

            /* กำหนดเวลาหลังเปิดหน้าเว็บ ว่าจะให้แสดงหลังโหลดหน้าเว็บแล้วกี่วินาที  เช่น 2000 = 2 วิ */
            $(window).load(function () {
                var timer = window.setTimeout(show, 0);
            });

        </script>
    </head>
    <?php include('navbar.php'); ?>
    <br>
    <?php if (!isset($_SESSION["intLine"])) { ?>
        <div align="center"><h1><b>ไม่มีสินค้าในตะกร้า</b></h1></div>
        <?php
        exit();
    } else {
        require 'connectdb.php';
        ?>


        <?php
        $Total = 0;
        $SumTotal = 0;

        for ($i = 0; $i <= (int) $_SESSION["intLine"]; $i++) {
            if ($_SESSION["strProductID"][$i] != "") {
                $strSQL = "SELECT * FROM `food` WHERE `food_id` LIKE '" . $_SESSION["strProductID"][$i] . "' ";
                $objQuery = mysqli_query($link, $strSQL);
                $objResult = $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $Total = $_SESSION["strQty"][$i] * $objResult["food_price"];
                $SumTotal = $SumTotal + $Total;
                ?>
                <!--
            <img src="./images/img_food/ width="99" height="81" class="img-responsive">
                -->



                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail" >
                        <div class="caption">
                            <p align="center">
                                <img src="./images/img_food/<?= $objResult["food_img"]; ?>"" width="100" height="100" alt="..." >
                            </p>
                            <h5 align="center"><b>รหัสสินค้า :</b> <?= $_SESSION["strProductID"][$i]; ?></h5>
                            <h5 align="center"><b>ชื่อ :</b> <?= $objResult["food_name"]; ?></h5>
                            <h5 align="center"><b>ราคา :</b> <?= $objResult["food_price"]; ?> บาท</h5>
                            <h5 align="center"><b>จำนวน :</b> <?= $_SESSION["strQty"][$i]; ?> ชิ้น</h5>
                            <h5 align="center"><b>รวม :</b> <?= number_format($Total, 2); ?> บาท</h5>
                            <div align="center">
                                <button type="button" name="Submit2"  onclick="window.location = 'delete.php?Line=<?= $i; ?>';" class="btn btn-danger"> ลบ</button>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
            }
        }
        ?>
        <div align="center">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    จำนวนเงินที่ต้องชำระ <?php echo number_format($SumTotal, 2); ?> บาท <br><br>
                    <?php
                    if ($SumTotal > 0) {
                        ?>
                        <button type="submit" name="button" id="button" class="btn btn-warning" onclick="window.location = 'clear.jsp';"> ลบทั้งหมด </button>
                        <?php if ($_SESSION['text_Username'] == "") { ?>

                            <button type="button" name="Submit2"  onclick="window.location = 'login_checkout.php';" class="btn btn-primary"> 
                                <span class="glyphicon glyphicon-shopping-cart"></span> สั่งซื้อ </button>
        <?php } else { ?>
                            <button type="button" name="Submit2"  onclick="window.location = 'save_checkout.php';" class="btn btn-primary"> 
                                <span class="glyphicon glyphicon-shopping-cart"></span> สั่งซื้อ </button>
        <?php } ?>

                        <?php
                    }
                    ?>
                </div></div>
        </div> <br>




<?php } ?>
    <?php
    if ($SumTotal > 0) {
        ?>	
    <?php } ?>



<?php
mysqli_close($objCon);
?>

    <div id="Show" class="modal fade">
        <div class="modal-dialog modal-sm"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title">Sign in</h4>
                </div>
                <div class="modal-body" >
                    
                    <form class="form-signin" action="querylogin.php" method="post">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="text" id="inputText" class="form-control" name="text_Username_order" minlength="6" placeholder="Username" required autofocus>
                        <input type="password" name="text_Password_order" minlength="6" id="inputPassword" class="form-control" placeholder="Password" required><br>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                    </form><!-- /form -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>