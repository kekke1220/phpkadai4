<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="login.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン</title>
</head>

<body>

    <div class="top">Real Estate Investment</div><br>
    <div class="top2">negotiation tool</div>

    
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <img src="https://files.oaiusercontent.com/file-JsccyP1r89AbQTG5v4zHIil0?se=2024-01-02T11%3A04%3A55Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3Da8be0199-3239-4d78-b8a5-065a134a18d9.webp&sig=VhqXb%2BizfbWuv0M67SovgKGMedmzIAZslQSPk94VFvc%3D" alt="トップ画像" width="100%" height="830px">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


<div class="form-wrapper">
  <h1>Sign In</h1>
  <form name="form1" action="login_act.php" method="post">
    <div class="form-item">
      <label for="lid"></label>
      <input type="text" name="lid" required="required" placeholder="ID"></input>
    </div>
    <div class="form-item">
      <label for="lpw"></label>
      <input type="text" name="lpw" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Sign In"></input>
    </div>
  </form>
</div>

<a href="sign_up.php" class="background_btn01">新規登録はこちら</a>

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">お気に入り物件登録</a>
                </div>
            </div>
        </nav>


</body>

</html>