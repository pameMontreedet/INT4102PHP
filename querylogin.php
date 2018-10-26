<?php

require 'connectdb.php';
if (!empty($_POST['text_Username_order'])) {
//กรณีมาจาก checkout.php
// เช็ดว่าลูกค้า login เพื่อสั่งหรือไม่จาก checkout.php ถ้าใช้ให้ insert การสั่งและ redirect ไปที่หน้าพิมพ์ใบชำระสินค้า
    if (empty($_POST['text_Password_order'])) {
        echo "กรุณากรอกรหัสผ่านให้ถูกต้อง";
        exit();
    } else {
        $text_Username_order = mysqli_real_escape_string($link, $_POST['text_Username_order']);
        $text_Password_order = mysqli_real_escape_string($link, $_POST['text_Password_order']);

        $query = "SELECT * FROM `allmember` WHERE `username` LIKE '" . $text_Username_order . "' AND `password` LIKE '" . $text_Password_order . "'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($row == 0) {
            echo "<script>alert('เข้าสู่ระบบไม่สำเร็จ โปรดตรวจสอบชื่อผู้ใช้และรหัสผ่าน')</script>";
            echo "<script>window.open('login_checkout.php','_self')</script>";
        } else if ($row > 0) {
            session_start();
            $_SESSION['text_Username'] = $text_Username_order;
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
                mysqli_close($link);

//session_destroy();
                echo "<script>alert('สั่งซื้อสำเร็จ พิมพ์ใบชำระค่าสินค้า')</script>";
                header("location:print.php?OrderID=" . $strOrderID);
            } else {
                echo $link->error;
                exit();
                echo "<script>alert('เกิดข้อผิดพลาด โปรดทำรายการใหม่')</script>";
            }
        }
    }
} else if (empty($_POST['text_Username']) || empty($_POST['text_Password'])) {
    echo "กรุณากรอกให้ครบ";
    exit();
} else {
    $text_Username = mysqli_real_escape_string($link, $_POST['text_Username']);
    $text_Password = mysqli_real_escape_string($link, $_POST['text_Password']);
    $query = "SELECT * FROM `allmember` WHERE `username` LIKE '$text_Username' AND `password` LIKE '$text_Password'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($row == 0) {
        echo "<script>alert('เข้าสู่ระบบไม่สำเร็จ โปรดตรวจสอบชื่อผู้ใช้และรหัสผ่าน')</script>";
        echo "<script>window.open('form_login.php','_self')</script>";
//	echo "<script>alert('เข้าสู่ระบบสำเร็จ ".$text_Username."')</script>";
//   $_SESSION['text_Username'] = $text_Username;
    } else if ($row > 0) {
        session_start();
        $_SESSION['text_Username'] = $text_Username;
        echo "<script>alert('welcome')</script>";
        header("Location: index.php");
    }
}
?>
