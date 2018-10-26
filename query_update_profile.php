<?php
    require 'connectdb.php';
    $text_id = $_POST['text_id'];
    $text_Password = $_POST['text_Password'];
    $text_Username = $_POST['text_Username'];
    $usertitlename = $_POST['usertitlename'];
    $text_firstname = $_POST['text_firstname'];
    $text_lastname = $_POST['text_lastname'];
    $text_email = $_POST['text_email'];
    $text_phone = $_POST['text_phone'];
    $text_address = $_POST['text_address'];
                    session_start();
                $username = $_SESSION['text_Username'];

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


$query = "UPDATE `customer` SET `password` = '$text_Password', `customer_titlename` = '$usertitlename', `customer_name` = '$text_firstname', `customer_surname` = '$text_lastname', `customer_address` = '$text_address', `customer_email` = '$text_email', `customer_phone` = '0911607462', `customer_img` = '$user_img' WHERE `customer`.`customer_id` = $text_id";


$result = mysqli_query($link, $query);
$query = "UPDATE `allmember` SET `password` = '$text_Password' WHERE `allmember`.`username` = '$text_Username';";
$result = mysqli_query($link, $query);
if ($result) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
    echo "<script>window.open('form_profile.php?username=$username','_self')</script>";
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($link);
}
?>