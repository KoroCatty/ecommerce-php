<?php

include('connection.php');

// DBに接続してデータを取得
// DB内 product_categoryの中のcoatを取得
$stmt = $conn->prepare('SELECT * FROM products WHERE product_category ="coat" LIMIT 4');

// execute the query 
$stmt->execute();

// 取得したデータを変数に保存
$coats_products =  $stmt->get_result(); // Array []

?>