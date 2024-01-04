<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link rel="stylesheet" href="sign_up.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

<img src="https://files.oaiusercontent.com/file-KPmOMdzOF9ux8ORkSJo7daVX?se=2024-01-03T12%3A36%3A45Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3D2d298402-455a-4349-9d5b-4e34ff7a950b.webp&sig=SYyrF8vIEuKj2FF3dBi1o6H9I31FSQjYHsNVcYPMVtk%3D" alt="背景" width="100%" height="830px">


<div class="form-wrapper">
  <h1>Sign Up</h1>
  <form method="POST" action="insert2.php">
    <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" required="required" placeholder="Name"></input>
    </div>
    <div class="form-item">
      <label for="lid"></label>
      <input type="text" name="lid" required="required" placeholder="ID"></input>
    </div>
    <div class="form-item">
      <label for="lpw"></label>
      <input type="text" name="lpw" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign Up" value="Sign Up"></input>
    </div>
  </form>
</div>

</body>
