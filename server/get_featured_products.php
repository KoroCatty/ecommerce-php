<?php

include('connection.php');

// DBに接続してデータを取得(値の取得なのでprepare()使用)
$stmt = $conn->prepare('SELECT * FROM products LIMIT 4');

// execute the query 
$stmt->execute();

// 取得したデータを変数に保存
$featured_products =  $stmt->get_result(); // Array []

?>