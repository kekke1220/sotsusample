<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="index.css">
    <title>トップページ</title>
</head>

<body>

<a href="caution.php" class="terms-button">利用規約</a> <!-- 利用規約ボタンを追加 -->

<img src="24281324_m.jpg" alt="トップ画像" width="100%" height="850px">
<div id="topname">Mot-el</div>
<div id="topsub">医療従事者と医療関連ジョブの副業マッチングサイト</div>

<div class="title1">納得の日々を。</div><br>
<div class="title2">多くの笑顔をここから。</div>

<a href="select.php" class="btn btn--circle"><br>副業検索は<br>こちらから<i class="fas fa-angle-down fa-position-bottom"></i></a>

<div class="form-wrapper">

  <form name="form1" action="login_act.php" method="post">

    <div class="form-item">
      <input type="text" name="lid" required="required" placeholder="ID"></input>
    </div>

    <div class="form-item">
      <input type="password" name="lpw" required="required" placeholder="Password"></input>
    </div>

    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="雇用機関様ログイン"></input>
    </div>

  </form>
  <div class="form-footer">
    <p><a href="compa-regi.php">雇用機関様の新規登録はこちら</a></p>
    <p><a href="pass_change.php">パスワードお忘れの場合</a></p>
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
