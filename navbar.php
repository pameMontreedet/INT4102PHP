
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>	
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                       aria-haspopup="true" aria-expanded="false">
                        รายการอาหาร<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="product.php?type=1">รายการอาหารคาว</a></li>
                        <li><a href="product.php?type=2">รายการของหวาน</a></li>
                        <li><a href="product.php?type=3">รายการเครื่องดื่ม</a></li>
                        <li role="separator" class="divider"></li>
                    </ul>
                </li>
                <li><a href="#">ติดต่อเรา</a></li>
                <li><a href="show.php">ตะกร้าสินค้า</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-left" action="search.php" method="get">
                    <div class="form-group">
                        <input type="text" name="name" id="main_dishes_name" class="form-control" placeholder="ค้นหาชื่ออาหาร" required/>
                    </div>
                    <button type="submit" class="btn btn-default">ตกลง</button>
                </form>
                <?php
                session_start();
                $username = $_SESSION['text_Username'];

                if (empty($username)) {
                    ?>
                    <li><a href="form_login.php">เข้าสู่ระบบ</a></li>
                <?php } else if (!empty($username)) {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                           aria-haspopup="true" aria-expanded="false">
    <?php echo $username; ?><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="form_profile.php?username=<?php echo $username; ?>">โปรไฟล์</a></li>
                            <li><a href="update_profile.php?username=<?php echo $username; ?>">แก้ไขโปรไฟล์</a></li>
                            <li><a href="show.php">ตะกร้าสินค้า</a></li>
                            <li><a href="list_report.php?username=<?php echo $username; ?>">ประวัติการสั่ง</a></li>
                            <li><a href="logout.php">ออกจากระบบ</a></li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
<?php } ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

