<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="login.css">
    <title>ログイン</title>
</head>

<body>



<img src="24281324_m.jpg" alt="トップ画像" width="100%" height="830px">
<div id="topname">medi-side</div>
<div id="topsub">医療者と医療関連ジョブの副業マッチングサイト</div>

<div class="title1">納得の日々を。</div><br>
<div class="title2">新しい道を切り拓こう。</div>

<div class="form-wrapper">

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
      <input type="submit" class="button" title="Sign In" value="ログイン"></input>
    </div>

  </form>
  <div class="form-footer">
    <p><a href="sign_up.php">新規登録はこちら</a></p>
    <p><a href="#">パスワードお忘れの方</a></p>
    <p><a href="#">雇用側の企業様の登録はこちら</a></p>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('topname').classList.add('slide-in-right');
    document.getElementById('topsub').classList.add('slide-in-right');
    document.querySelector('.title1').classList.add('slide-in-left');
    document.querySelector('.title2').classList.add('slide-in-left');
});
</script>

</body>

</html>
