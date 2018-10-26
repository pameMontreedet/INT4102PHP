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
                            <input class="form-control" type="file" name="product_img" /></b> 
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
</form>