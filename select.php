<?php
// 0. SESSION開始！！
session_start();
// 1. ログインチェック処理！
// 以下、セッションID持ってたら、ok
// 持ってなければ、閲覧できない処理にする。

// funcs.phpに記載したため削除
// if( !isset($_SESSION['chk_ssid']) ||  $_SESSION['chk_ssid'] !== session_id() ){
//     exit('LOGIN ERROR');
// } else{
//     // ログイン済処理
//     session_regenerate_id(true);
//     $_SESSION['chk_ssid'] = session_id();
// }

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_an_table1');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<div class="property-item">'; // 追加
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $r["id"] . '">';
        $view .= "ID: " . h($r['id']) . "<br>";
        $view .= "収益物件の種類: " . h($r['kind']) . "<br>";
        $view .= "物件名: " . h($r['name']) . "<br>";
        $view .= "住所: " . h($r['adress']) . "<br>";
        $view .= "専有面積: " . h($r['earea']) . "<br>";
        $view .= "管理費/修繕積立金: " . h($r['fee']) . "<br>";
        $view .= "交通: " . h($r['traffic']) . "<br>";
        $view .= "売買価格: " . h($r['price']) . "<br>";
        $view .= "利回り: " . h($r['yield']) . "<br>";
        $view .= "周辺坪単価: " . h($r['ppt']) . "<br>";
        $view .= "築年数: " . h($r['age']) . "<br>";
        $view .= '</a>';
        $view .= "　";
        $view .= '<a class="btn btn-danger" href="delete.php?id=' . $r['id'] . '">';
        $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
        $view .= '</a>';
        $view .= '</p>';
        $view .= '</div>'; // 追加
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <link rel="stylesheet" href="select.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron"><?= $view ?></div>
    </div>
    <!-- Main[End] -->

</body>

</html>
