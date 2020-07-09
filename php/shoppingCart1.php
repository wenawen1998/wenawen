<?php
header("Content-Type:text/html;charset=UTF-8");
$servername = 'localhost';
$product_name = 'product_name';
$product_img = 'product_img';
$product_price = 'product_price';
$product_num = 'product_num';



$conn = new mysqli($servername,'root','root','shop');

if($conn->connect_error){
    die('连接失败:' . $conn->connect_error);
}

$sql = 'SELECT product_tips,product_name,product_img,product_price,product_num FROM cart';

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo  "商品名称:".$row['product_name']."商品图片:".$row["product_img"]."商品价格:".$row["product_price"]."商品数量:".$row["product_num"]."<br>";
    }
}else{
    echo "0结果";
}

$conn->close();














?>