<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>form_signup</title>
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
			
			function phonenumber(inputtxt){
                var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                if(inputtxt.value.match(phoneno)){
                    return true;
                }
                else{
                    alert("หมายเลขโทรศัพท์ไม่ถูกต้อง");
                    return false;
                }
            }
        </script>
    </head>
    <body>
		<?php include('navbar.php');?>
		<br>
        <form action="querysignup.php" method="post" enctype="multipart/form-data" name="form1" onsubmit="return phonenumber(document.form1.text_phone)">
    <div class="container" onload='document.form1.text1.focus()'>  
        <div class="row"> 
            <div class="col-md-4 col-md-offset-4">  
                <div class="login-panel panel panel-success" style="width:200">  
                    <div class="panel-heading" >  
                        <h3 class="panel-title" align="center">ลงทะเบียน</h3>  
                    </div>  
                    <br>
                    <div class="form-group" align="center">
                        <b>อัปโหลดรูปภาพ
                            <input class="form-control" type="file" name="product_img" value="ddd" /></b> 
                    </div>				
                    <div class="form-group">  
                        <input class="form-control" placeholder="Username (อย่างน้อย 6 ตัวอักษร)" name="text_Username" type="username" minlength="6" required autofocus >  
                    </div>  
                    <div class="form-group">  
                        <input class="form-control" placeholder="Password (อย่างน้อย 6 ตัวอักษร)" name="text_Password" type="password" minlength="6" required autofocus >  
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
                        <input class="form-control" placeholder="ชื่อ" name="text_firstname" type="username" required autofocus >
                        <input class="form-control" placeholder="นามสกุล" name="text_lastname" type="username" required autofocus >						
                    </div>					
                    <div class="form-group">  
                        <input class="form-control" placeholder="อีเมล์" name="text_email" type="email"  required>  
                    </div>
                    <div class="form-group">  
                        <input class="form-control" placeholder="เบอร์โทร" name="text_phone" type="textnumber"  required>  
                    </div>
                    <div class="form-group">  
                        <textarea class="form-control" placeholder="ที่อยู่" name="text_address" required autofocus></textarea>
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
