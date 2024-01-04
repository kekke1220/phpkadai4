<?php
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
$id     = $_POST['id'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE gs_an_table1 SET kind=:kind,name=:name,adress=:adress,earea=:earea,fee=:fee,traffic=:traffic,price=:price,yield=:yield,ppt=:ppt,age=:age WHERE id=:id;');
$stmt->bindValue(':kind', $kind, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_INT);
$stmt->bindValue(':earea', $earea, PDO::PARAM_STR);
$stmt->bindValue(':fee', $fee, PDO::PARAM_STR);
$stmt->bindValue(':traffic', $traffic, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':yield', $yield, PDO::PARAM_STR);
$stmt->bindValue(':ppt', $ppt, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}
