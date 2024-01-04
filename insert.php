<?php

session_start();
require_once('funcs.php');
loginCheck();


//1. POSTデータ取得
$kind   = $_POST['kind'];
$name   = $_POST['name'];
$adress = $_POST['adress'];
$earea  = $_POST['earea']; 
$fee    = $_POST['fee']; 
$traffic= $_POST['traffic']; 
$price  = $_POST['price']; 
$yield  = $_POST['yield']; 
$ppt    = $_POST['ppt']; 
$age    = $_POST['age']; 

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO gs_an_table1(kind,name,adress,earea,fee,traffic,price,yield,ppt,age)VALUES(:kind,:name,:adress,:earea,:fee,:traffic,:price,:yield,:ppt,:age);');
$stmt->bindValue(':kind', $kind, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':earea', $earea, PDO::PARAM_STR);
$stmt->bindValue(':fee', $fee, PDO::PARAM_STR);
$stmt->bindValue(':traffic', $traffic, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':yield', $yield, PDO::PARAM_STR);
$stmt->bindValue(':ppt', $ppt, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}