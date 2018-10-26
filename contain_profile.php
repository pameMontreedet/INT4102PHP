<?php
			require 'connectdb.php';
			$username = $_GET['username'];
			$query = "SELECT * FROM `user` WHERE `user_name` LIKE '$username'";
			$result = mysqli_query($link, $query);
    		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
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
				$user_date_create = $row[user_date_create];
				$user_date_update = $row[user_date_update];
				$user_img = $row[user_img];
    		}
			/*
    			mysqli_free_result($result);
    			mysqli_close($link);
    		*/
			?>	

<div class="row">
<div class="medium-7 large-6 columns">
<h1><b style="color: #454588;"><?php echo $user_name; ?></b> โปรไฟล์</h1>
<table style="width: 590px;">
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
    		<td style="width: 200px;">วันเกิด : </td>
    		<td><?php echo $user_birthdate; ?></td>
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
		<tr>
    		<td style="width: 200px;">แก้ไขล่าสุด : </td>
    		<td><?php echo $user_date_update; ?></td>
    	</tr>
    	</table>
<button class="button">แก้ไขโปรไฟล์</button>
<button class="button" onclick="list_report.php?username=<?php echo $username; ?>">ประวัติการสั่ง</button>
</div>
<div class="show-for-large large-4 columns">
<img src="./img_user/<?php echo $user_img; ?>" alt="picture of space">
</div>
<div class="medium-5 large-2 columns">
<div class="callout secondary">
<form action="search.php" method="get">
<div class="row">
<div class="small-12 columns">
<label align="center"><h4><b>ค้นหา</b></h4>
<input type="text" name="name" placeholder="ระบุชื่ออาหาร">
</label><p align="center">
<button type="submit" class="button" >Search Now!</button><p>
</div>
</div>
</form>
</div>
</div>
</div>