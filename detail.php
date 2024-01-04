<?php
session_start();
require_once('funcs.php');
loginCheck();


$id = $_GET['id']; //?id~**を受け取る
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_an_table1 WHERE id=:id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ更新</title>
    <link rel="stylesheet" href="detail.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <img src="https://files.oaiusercontent.com/file-petY4WqpVX7XOIatvoTJwCYt?se=2024-01-03T11%3A49%3A20Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3D1d51bc6b-c1f1-440d-8428-70842742f845.webp&sig=gIwx%2BiTUIuqwy%2Bswr3WdwG%2BrPshm4tG2Mj/TkOqKll0%3D" alt="変更" width="100%" height="830px">

    <!-- Main[Start] -->
    <div class="form-wrapper">
  <h1>変更手続き</h1>
  <form method="POST" action="update.php">
    <div class="form-item">
      <label for="kind">収益物件の種類</label>
      <input type="text" name="kind" value="<?= $row['kind'] ?>" required="required" placeholder="収益物件の種類"></input>
    </div>
    <div class="form-item">
      <label for="name">物件名</label>
      <input type="text" name="name" value="<?= $row['name'] ?>" required="required" placeholder="物件名"></input>
    </div>
    <div class="form-item">
      <label for="adress">住所</label>
      <input type="text" name="adress" value="<?= $row['adress'] ?>" required="required" placeholder="住所"></input>
    </div>
    <div class="form-item">
      <label for="earea">専有面積</label>
      <input type="text" name="earea" value="<?= $row['earea'] ?>" required="required" placeholder="専有面積"></input>
    </div>
    <div class="form-item">
      <label for="fee">管理費/修繕積立金</label>
      <input type="text" name="fee" value="<?= $row['fee'] ?>" required="required" placeholder="管理費/修繕積立金"></input>
    </div>
    <div class="form-item">
      <label for="traffic">交通</label>
      <input type="text" name="traffic" value="<?= $row['traffic'] ?>" required="required" placeholder="交通"></input>
    </div>
    <div class="form-item">
      <label for="price">売買価格</label>
      <input type="text" name="price" value="<?= $row['price'] ?>" required="required" placeholder="売買価格"></input>
    </div>
    <div class="form-item">
      <label for="yield">利回り</label>
      <input type="text" name="yield" value="<?= $row['yield'] ?>" required="required" placeholder="利回り"></input>
    </div>
    <div class="form-item">
      <label for="ppt">周辺坪単価</label>
      <input type="text" name="ppt" value="<?= $row['ppt'] ?>" required="required" placeholder="周辺坪単価"></input>
    </div>
    <div class="form-item">
      <label for="age">築年数</label>
      <input type="text" name="age" value="<?= $row['age'] ?>" required="required" placeholder="築年数"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="登録"></input>
    </div>
    <div class="form-item">
      <label for="age"></label>
      <input type="hidden" name="id" value="<?= $row['id'] ?>"></input>
    </div>
  </form>

    <!-- Main[End] -->


</body>

</html>
