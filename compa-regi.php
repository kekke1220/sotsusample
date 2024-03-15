<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compa-regi.css">
    <title>新規登録</title>
</head>
<body>

<div class="form-wrapper">

  <h1>雇用主様専用 新規登録</h1>

  <form name="form1" action="sign_up_end.php" method="post">

    <div class="form-item">
      <label for="name">企業名</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-item">
      <label for="email">メールアドレス</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-item">
      <label for="lid">ID</label>
      <input type="text" id="lid" name="lid" required>
    </div>

    <div class="form-item">
      <label for="lpw">Password</label>
      <input type="password" id="lpw" name="lpw" required>
    </div>

    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="登録">
    </div>

  </form>
  
</div>


</body>
</html>