<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ประวัติการสั่ง</title>
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
                #hid, title{
                    display: none;
                }	
            }		
            #barcode{
                font-size: 200%;
                color: #000000;

            }	
            #content{
                width: 90%;
                margin: auto;
                min-width:850px;
            }	
        </style><title align="right">ใบชำระค่าสินค้า</title>
    </head>
    <body>
        <?php include('navbar.php'); ?><br>
        <?php
        require 'connectdb.php';
        $username = $_GET['username'];
        $query = "SELECT od.order_id As order_id, c.customer_id As user_id, c.username As user_name, c.customer_titlename As user_titlename, c.customer_name As user_firstname, c.customer_surname As user_lastname, c.customer_email As user_email, c.customer_phone As user_phone_no, c.customer_address As user_address, od.order_time As order_time, od.pay_status As pay_status FROM `customer` c join `order_tb` od on c.username = od.user_name
where c.username = '" . $username . "' ORDER BY od.order_id DESC;";
        $result = mysqli_query($link, $query);
        ?>

        <div class="container">
            <div class="row">
                <div align="center">
                    <div class="col-xs-12 col-md-12">
                        <div class="margin-top-50">
                            <h2>รายการสั่ง</h2>
                            <div class="table-responsive">

                                <table class="table">
                                    <?php
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $order_id = $row[order_id];
                                        $pay_status = $row[pay_status];
                                        ?>
                                        <tr> 
                                            <td><a href="print.php?OrderID=<?php echo $order_id; ?>">เลขที่  <?php echo $order_id; ?></td>
                                            <td><?php 
                                            if($pay_status==0){
                                                echo "ยังไม่ชำระ";
                                            }else{
                                                echo "ชำระแล้ว";
                                            }
                                             ?></td>
                                        </tr>

                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>