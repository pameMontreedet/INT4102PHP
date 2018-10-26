<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        require 'connectdb.php';
        session_start();
        $Total = $_SESSION['SumTotal'];

        $strSQL = "INSERT INTO `order_tb` (`order_id`, `table_number`, `user_name`, `order_time`, `total_pay`, `received`, `pay_status`, `pay_time`, `cook`) VALUES (NULL, 'home', '" . $_SESSION['text_Username'] . "', CURRENT_TIMESTAMP, '$Total', '0', '0', CURRENT_TIMESTAMP, '0')";

        $objQuery = mysqli_query($link, $strSQL);
        if ($objQuery) {
            $strOrderID = mysqli_insert_id($link);

            for ($i = 0; $i <= (int) $_SESSION["intLine"]; $i++) {
                if ($_SESSION["strProductID"][$i] != "") {
                    $query = "SELECT `food_name`, `food_type` FROM `food` WHERE `food_id` LIKE '" . $_SESSION["strProductID"][$i] . "'";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $food_name = $row[food_name];
                        $food_type = $row[food_type];
                    }
                    $strSQL = "
INSERT INTO `order_detail` (`order_detail_id`, `table_number`, `user_name`, `food_id`, `food_name`, `food_type`, `food_qty`, `cook`, `order_time`) VALUES (NULL, 'home', '" . $_SESSION['text_Username'] . "', '" . $_SESSION["strProductID"][$i] . "', '$food_name', '$food_type', '" . $_SESSION["strQty"][$i] . "', '0', CURRENT_TIMESTAMP);";



                    mysqli_query($link, $strSQL);
                }
            }

            for ($i = 0; $i <= (int) $_SESSION["intLine"]; $i++) {
                if ($_SESSION["strProductID"][$i] != "") {
                    unset($_SESSION["strProductID"][$i]);
                    unset($_SESSION["strQty"][$i]);
                }
            }
            unset($_SESSION["intLine"]);
            unset($_SESSION["SumTotal"]);
            mysqli_close($objCon);

//session_destroy();
            echo "<script>alert('สั่งซื้อสำเร็จ พิมพ์ใบชำระค่าสินค้า')</script>";
            header("location:print.php?OrderID=" . $strOrderID);
        } else {
            echo $objCon->connect_error;
            exit();
            echo "<script>alert('เกิดข้อผิดพลาด โปรดทำรายการใหม่')</script>";
        }

//session_destroy();
        ?>
    </body></html>
