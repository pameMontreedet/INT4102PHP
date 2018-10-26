<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="./css/custom.min.css">
        <link rel="stylesheet" href="./css/grid.min.css" media="screen" charset="utf-8">
        <script type="text/javascript" async="" src="./js/ga.js"></script>
        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/custom.js"></script>
        <script src="phoneno-international-format.js"></script>     
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-23019901-1']);
            _gaq.push(['_setDomainName', "bootswatch.com"]);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

            function phonenumber(inputtxt) {
                var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                if (inputtxt.value.match(phoneno)) {
                    return true;
                } else {
                    alert("หมายเลขโทรศัพท์ไม่ถูกต้อง");
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <?php
        include('navbar.php');
        require 'connectdb.php';
        $username = $_GET['username'];
        $query = "SELECT * FROM `customer` WHERE `username` LIKE '$username'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $user_id = $row[customer_id];
        $user_username = $row[username];
        $user_password = $row[password];
        $user_titlename = $row[customer_titlename];
        $user_firstname = $row[customer_name];
        $user_lastname = $row[customer_surname];
        $user_email = $row[customer_email];
        $user_phone_no = $row[customer_phone];
        $user_address = $row[customer_address];
        $user_date_create = $row[customer_date_regis];
        $user_img = $row[customer_img];
        ?>
        <br>
        <form action="query_update_profile.php" method="post" enctype="multipart/form-data" name="form1" onsubmit="return phonenumber(document.form1.text_phone)">
            <div class="container" onload='document.form1.text1.focus()'>  
                <div class="row"> 
                    <div class="col-md-4 col-md-offset-4">  
                        <div class="login-panel panel panel-success" style="width:200">  
                            <div class="panel-heading" >  
                                <h3 class="panel-title" align="center">แก้ไขข้อมูล</h3>  
                            </div>  
                            <br>
                            <div class="form-group" align="center">
                                <b>อัปโหลดรูปภาพ
                                    <input class="form-control" type="file" name="product_img" /></b> 
                            </div>				
                            <input value="<?php echo $user_id; ?>" name="text_id" type="hidden">  
                            <input value="<?php echo $user_username; ?>" name="text_Username" type="hidden">  
                            <div class="form-group">  
                                <input class="form-control" value="<?php echo $user_password; ?>" placeholder="Password (อย่างน้อย 6 ตัวอักษร)" name="text_Password" type="password" minlength="6" required autofocus >  
                            </div>
                            <div class="form-group">  
                                <select class="form-control" name="usertitlename" id="usertitlename" required>
                                    <option value="">--- คำนำหน้านาม ---</option>
                                    <option value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                </select>
                            </div>
                            <div class="form-group">  
                                <input class="form-control" value="<?php echo $user_firstname; ?>" placeholder="ชื่อ" name="text_firstname" type="username" required autofocus >
                                <input class="form-control" value="<?php echo $user_lastname; ?>" placeholder="นามสกุล" name="text_lastname" type="username" required autofocus >						
                            </div>					
                            <div class="form-group">  
                                <input class="form-control" value="<?php echo $user_email; ?>" placeholder="อีเมล์" name="text_email" type="email"  required>  
                            </div>
                            <div class="form-group">  
                                <input class="form-control" value="<?php echo $user_phone_no; ?>" placeholder="เบอร์โทร" name="text_phone" type="textnumber"  required>  
                            </div>
                            <div class="form-group">  
                                <textarea class="form-control" placeholder="ที่อยู่" name="text_address" required autofocus><?php echo $user_address; ?></textarea>
                            </div>


                            <br>
                            <p><input class="btn btn-lg btn-success btn-block" type="submit" value="บันทึก" name="register" onclick=""></p> 
                            <input class="btn btn-lg btn-default btn-block" type="reset" value="ลบข้อมูลทั้งหมด" name="reset" >
                            <br>
                        </div>  
                    </div>
                </div>  
            </div> <br><br><br>
        </form>    </body></html>
