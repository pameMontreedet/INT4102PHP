<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <style type="text/css">
            @media print{
                #hid, title{
                    display: none;
                }	
            }
            button{
                width: 80px;
                height: 40px;
            }		
            #barcode{
                font-size: 200%;
                color: #000000;

            }	
            body{
                width: 80%;
                margin: auto;
                min-width:850px;
                padding:30px;
            }	
        </style><title align="right">ใบชำระค่าสินค้า</title>
    </head>
    <body>
        <?php
        require 'connectdb.php';
        $username = $_GET['username'];
        $query = "SELECT od.order_id As oid, 
c.customer_id As customer_id, 
c.username As username,
c.customer_titlename As titlename, 
c.customer_name As firstname, 
c.customer_surname As lastname, 
c.customer_address As address, 
c.customer_email As email, 
c.customer_phone As phone, 
od.order_time As time 
FROM `customer` c join `order_tb` od on c.username = od.user_name 
where od.order_id = ".$_GET['OrderID']."";
        ?>
        <div align="right">

            <?php
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $order_id = $row[oid];
                $user_id = $row[customer_id];
                $user_name = $row[username];
                $user_titlename = $row[titlename];
                $user_firstname = $row[firstname];
                $user_lastname = $row[lastname];
                $user_address = $row[address];
                $user_email = $row[email];
                $user_phone_no = $row[phone];
                $order_time = $row[time];
                ?>
<?php } ?>
            <h1 align="center"><b style="color: #000000;">เลขที่  <?php echo $order_id; ?></b></h1>
            <div class="row" align="center">
                <div class="medium-7 large-6 columns">
                </div><br>
                <table style="width: 590px;" align="center" border="1" cellspacing="0" cellpadding="5">
                    <tr>
                        <td height="40" colspan="7" align="center" bgcolor="#c4c4c4"><strong><b>ข้อมูลผู้สั่งซื้อ</span></strong></td>
                    </tr>
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
                        <td style="width: 200px;">อีเมล์ : </td>
                        <td><?php echo $user_address; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">เบอร์โทร : </td>
                        <td><?php echo $user_phone_no; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">ที่อยู่ : </td>
                        <td><?php echo $user_email; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">เวลาที่สั่ง : </td>
                        <td><?php echo $order_time; ?></td>
                    </tr>
                </table>

            </div>
        </div>
        <br>
        <br>
<table style="width: 590px;" align="center" border="1" cellspacing="0" cellpadding="5">
<td height="40" colspan="7" align="center" bgcolor="#c4c4c4"><strong><b>รายการสินค้า</span></strong></td>
			<tr>
          <td width="100" align="center" bgcolor="#c4c4c4"><strong>รหัสสินค้า</strong></td>
          <td width="300" align="center" bgcolor="#c4c4c4"><strong>สินค้า</strong></td>
          <td width="100" align="center" bgcolor="#c4c4c4"><strong>ราคา</strong></td>
          <td width="100" align="center" bgcolor="#c4c4c4"><strong>จำนวน</strong></td>
          <td width="100" align="center" bgcolor="#c4c4c4"><strong>รวม/รายการ</strong></td>
        </tr>
			<?php
                         $query = "SELECT  odt.food_id As food_id, 
f.food_name As food_name, 
f.food_price As food_price, 
odt.food_qty As food_qty, 
f.food_price * odt.food_qty As Total
FROM `order_tb` od join `order_detail` odt join `food` f on odt.order_time = od.order_time && odt.food_id = f.food_id
where od.order_id = ".$_GET['OrderID']."";
			$result = mysqli_query($link, $query);
    		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
				$order_id = $row[order_id];
				$user_id = $row[user_id];
				$user_name = $row[user_name];
				$user_password = $row[user_password];
				$user_titlename = $row[user_titlename];
				$user_firstname = $row[user_firstname];
				$user_lastname = $row[user_lastname];
				$user_birthdate = $row[user_birthdate];
				$user_email = $row[user_email];
				$user_phone_no = $row[user_phone_no];
				$user_address = $row[user_address]; 
				$order_time = $row[order_time];
				$sum = $sum + $row[Total];
				?>
    	<tr> 
    		<td width="100" align="center"><?php echo $row[food_id]; ?></td>
			<td width="300" align="center"><?php echo $row[food_name]; ?></td>
			<td width="100" align="center"><?php echo $row[food_price]; ?></td>
			<td width="100" align="center"><?php echo $row[food_qty]; ?></td>
			<td width="100" align="center"><?php echo $row[Total]; ?></td>
    	</tr>
    		<?php }?>
</table><br>
<hr>
<h3 align="center">จำนวนเงินที่ต้องชำระ <?php echo $sum; ?> บาท</h3>
        <div align="center">
            <button id="hid" type="button" onclick="window.print()">พิมพ์</button></div>
    </body>
</html>