<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>form_profile</title>
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
        </script>
        <link rel="stylesheet" href="./css/foundation.min.css">
        <link href="./css/foundation-icons.css" rel="stylesheet" type="text/css">

        <style type="text/css">
            .row{

            }
            td {
                background-color: #ffffff;
            }
        </style>
    </head>
    <body class="">

        <?php
        require 'navbar.php';
        session_start();
        $username = $_SESSION['text_Username'];
//session_destroy();
        ?>

        <br>

        <?php
        require 'connectdb.php';
        $username = $_GET['username'];
        $query = "SELECT * FROM `customer` WHERE `username` LIKE '$username'";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $user_id = $row[customer_id];
            $user_name = $row[username];
            $user_password = $row[password];
            $user_titlename = $row[customer_titlename];
            $user_firstname = $row[customer_name];
            $user_lastname = $row[customer_surname];
            $user_email = $row[customer_email];
            $user_phone_no = $row[customer_phone];
            $user_address = $row[customer_address];
            $user_date_create = $row[customer_date_regis];
            $user_img = $row[customer_img];
        }
        /*
          mysqli_free_result($result);
          mysqli_close($link);
         */
        ?>	
        <div class="container">
            <div class="row">

                <div class="col-sm-offset-1 col-md-7 col-sm-6 margin-left-setting">
                    <div class="margin-top-50">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td style="width: 200px;">รหัสผู้ใช้ : </td>
                                    <td><?php echo $user_id; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">ชื่อผู้ใช้ : </td>
                                    <td><?php echo $user_name; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">คำนำหน้านาม : </td>
                                    <td><?php echo $user_titlename; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">ชื่อ : </td>
                                    <td><?php echo $user_firstname; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">นามสกุล : </td>
                                    <td><?php echo $user_lastname; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">ที่อยู่ : </td>
                                    <td><?php echo $user_address; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">เบอร์โทร : </td>
                                    <td><?php echo $user_phone_no; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">อีเมล์ : </td>
                                    <td><?php echo $user_email; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">สมัครเมื่อ : </td>
                                    <td><?php echo $user_date_create; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="margin-top-10">
                        <div class="me-image">
                            <img src="./img_user/<?php echo $user_img; ?>" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>



            </div>
            <div align="center">
                <div class="row">
                    <div class="col-xs-12 col-md-12"><br><br>
                        <a href="update_profile.php?username=<?php echo $username; ?>"><button type="submit" name="button" id="button" class="btn btn-warning">แก้ไขโปรไฟล์</button></a>
                        <a href="list_report.php?username=<?php echo $username; ?>"><button type="button" name="Submit2" class="btn btn-primary">ประวัติการสั่ง</button></a>
                    </div></div>
            </div>
        </div>


    </body></html>
