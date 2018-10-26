<?php
        session_start();
        unset($_SESSION['text_Username']);
        session_destroy();
        echo "<script>alert('ออกจากระบบเรียบร้อย')</script>"; 
        echo "<script>window.open('index.php','_self')</script>";  
?>
