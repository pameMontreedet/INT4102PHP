<?php
	require 'connectdb.php';
	if($_GET['name']!=""){
		//มาจาก search.php
		$name = $_GET['name'];
		$query = "SELECT * FROM `food` WHERE `food_name` LIKE '%".$_GET['name']."%'";
		$result = mysqli_query($link, $query);
		
	}else if($_GET['type']!=""){
		//มาจาก product_type
		$type = $_GET['type'];
		$query = "SELECT * FROM `food` WHERE `food_type` = $type";
		$result = mysqli_query($link, $query);
	}	
?>
        <div class="container">
            <div class="row">
                <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>
                <div class="col-xs-12 col-md-3">

                    <form action="order.php" method="get">
                        <div class="thumbnail">
                            <div class="caption">
                                <p align="center">
                                    <img src="./images/img_food/<?php echo $row[food_img]; ?>" width="167" height="135" alt="..." >
                                </p> 
                                <h5 align="center"><b><a href="order.php?food_name=<?php echo $row["food_name"];?>"><?php echo $row[food_name]; ?></a></b></h5>
                                <h2 align="center"><b>฿<?php echo $row[food_price]; ?></b></h2>
                                <p align="center"><a href="order.php?ProductID=<?php echo $row["food_id"];?>" class="btn btn-default" role="button">Add To Basket</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                                    
                <?php }?>
                <?php
                    mysqli_free_result($result);
    			mysqli_close($link);
                ?>
            </div>
        </div>
		<!--
		<p align="center" style="background-color: #a8c0da; padding-top:20px; padding-bottom:20px;">@restaurant made by Montreedet</p>
		-->