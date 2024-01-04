<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link rel="stylesheet" href="index.css">
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
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <img src="https://files.oaiusercontent.com/file-TxEflFXuINGIW26Q7dnnw0ft?se=2024-01-02T11%3A58%3A06Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3D56ed6a83-1036-4269-bfb3-1cc2ea21b8b9.webp&sig=hV3nWDcQylgGNl/p0Y8QmuFuyZSrPgiCcOeyO6ndxOQ%3D" alt="背景" width="100%" height="830px">

    <!-- Main[Start] -->
    <div class="form-wrapper">
  <h1>物件登録</h1>
  <form method="POST" action="insert.php">
    <div class="form-item">
      <label for="kind"></label>
      <input type="text" name="kind" required="required" placeholder="収益物件の種類"></input>
    </div>
    <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" required="required" placeholder="物件名"></input>
    </div>
    <div class="form-item">
      <label for="adress"></label>
      <input type="text" name="adress" required="required" placeholder="住所"></input>
    </div>
    <div class="form-item">
      <label for="earea"></label>
      <input type="text" name="earea" required="required" placeholder="専有面積"></input>
    </div>
    <div class="form-item">
      <label for="fee"></label>
      <input type="text" name="fee" required="required" placeholder="管理費/修繕積立金"></input>
    </div>
    <div class="form-item">
      <label for="traffic"></label>
      <input type="text" name="traffic" required="required" placeholder="交通"></input>
    </div>
    <div class="form-item">
      <label for="price"></label>
      <input type="text" name="price" required="required" placeholder="売買価格"></input>
    </div>
    <div class="form-item">
      <label for="yield"></label>
      <input type="text" name="yield" required="required" placeholder="利回り"></input>
    </div>
    <div class="form-item">
      <label for="ppt"></label>
      <input type="text" name="ppt" required="required" placeholder="周辺坪単価"></input>
    </div>
    <div class="form-item">
      <label for="age"></label>
      <input type="text" name="age" required="required" placeholder="築年数"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="登録"></input>
    </div>
  </form>
  
    <!-- Main[End] -->
</body>

</html>