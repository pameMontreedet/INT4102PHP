<?php

require 'connectdb.php';

$text_Username = $_POST['text_Username'];
$text_Password = $_POST['text_Password'];
$usertitlename = $_POST['usertitlename'];
$text_firstname = $_POST['text_firstname'];
$text_lastname = $_POST['text_lastname'];
$text_email = $_POST['text_email'];
$text_phone = $_POST['text_phone'];
$text_address = $_POST['text_address'];

if ($usertitlename == "1") {
    $usertitlename = "นาย";
} else if ($usertitlename == "2") {
    $usertitlename = "นาง";
} else if ($usertitlename == "3") {
    $usertitlename = "นางสาว";
}

//upload file img

$ext = pathinfo(basename($_FILES['product_img']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_' . uniqid() . "." . $ext;
$image_path = "img_user/";
$upload_path = $image_path . $new_image_name;
$success = move_uploaded_file($_FILES['product_img']['tmp_name'], $upload_path);

/*
if ($success == FALSE) {
    echo "ไม่สามารถ upload รูปได้";
    exit();
}
*/
$user_img = $new_image_name;

$sql = "SELECT * FROM `customer` WHERE `username` LIKE '$text_Username'";
$check = mysqli_query($link, $sql);
$row = mysqli_fetch_array($check, MYSQLI_ASSOC);
if ($row > 0) {
    echo "<script>alert('Username นี้มีผู้ใช้งานแล้ว')</script>";
    echo "<script>window.open('form_signup.php','_self')</script>";
    exit();
} else {
    $query = "INSERT INTO `customer` (`customer_id`, `username`, "
            . "`password`, `customer_titlename`, `customer_name`, "
            . "`customer_surname`, `customer_address`, `customer_email`, "
            . "`customer_phone`, `customer_img`, `customer_date_regis`) "
            . "VALUES (NULL, '$text_Username', '$text_Password', '$usertitlename', "
            . "'$text_firstname', '$text_lastname', '$text_address', '$text_email', "
            . "'$text_phone', '$user_img', CURRENT_TIMESTAMP)";

    $query2 = "INSERT INTO `allmember` (`id`, `username`, `password`, `type`) VALUES "
            . "(NULL, '$text_Username', '$text_Password', '1')";
    $result = mysqli_query($link, $query);
    $result2 = mysqli_query($link, $query2);

    if ($result && $result2) {
        echo "<script>alert('สมัครสมาชิกสำเร็จ')</script>";
        echo "<script>window.open('form_login.php','_self')</script>";
    } else {
        echo "เกิดข้อผิดพลาด" . mysqli_error($link);
    }
}
?>