<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="./css/custom.min.css">
        <link rel="stylesheet" href="./css/grid.min.css" media="screen" charset="utf-8">
        <script type="text/javascript" async="" src="./js/ga.js"></script>
        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/custom.js"></script>
		<script type="text/javascript">
            window.onload = function(){
                setInterval('loadpage("contain.php?name=<?php echo $_GET['name']; ?>")', 500);
				alert('กำลังโหลด', 2000);
            }
            function loadpage(para1){
                /*
                var x = new XMLHttpRequest();
                x.open("get","ajaxpage1.html");
                if(x.readyState == 1){
                    alert("โหลดข้อมูล");
                }
                if(x.readyState == 404){
                    alert("หาไฟล์ไม่เจอ");
                }
                x.onreadystatechange = function(){
                    var content = document.getElementById("showcontent");
                    content.innerHTML = x.responseText;
                }
                x.send(null);
                */
               var x = new XMLHttpRequest();
                x.open("get",para1);
                x.onreadystatechange = function(){
                    var content = document.getElementById("showcontent");
                    content.innerHTML = x.responseText;
                }
                x.send(null);
				
            }
        </script>
    </head>
    <body class="">
        <?php include('navbar.php');?>        
        <br>
        <div id="showcontent">
            
        </div>
    </body></html>
