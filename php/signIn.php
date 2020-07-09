<?php
        header('content-type:textml;charset=utf-8');
        $name = $_GET['username'];
        $pw = $_GET['password'];
        $conn = mysqli_connect('localhost','root','root','shop');
        $sql = "SELECT * FROM `user` WHERE `username`='$name' AND `password`='$pw'";
        $res = mysqli_query($conn,$sql);
        $row =mysqli_fetch_assoc($res);
        if($row){
            header('localhost/xm/pages/shoppingCart1.html');
        }else{
            echo "登录失败";
        }
        
?>