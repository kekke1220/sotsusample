<?php

  $mode = "input";
  if( isset($_POST["back"] ) && $_POST["back"] ){
    // 何もしない
  } else if( isset($_POST["confirm"] ) && $_POST["confirm"] ){
    $_SESSION["fullname"] = $_POST["fullname"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["message"] = $_POST["message"];
    $mode = "confirm";
  } else if( isset($_POST["send"] ) && $_POST["send"] ){
    // 送信ボタンを押下
    $message = "お問い合わせを受け付けました\r\n"
             . "名前: " . $_SESSION["fullname"] . "\r\n"
             . "Eメール: " . $_SESSION["email"] . "\r\n"
             . "お問い合わせ内容:\r\n"
             . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION["message"] );
    mail($_SESSION["email"], "お問い合わせありがとうございます", $message );
    mail("hoge@fuga.com", "お問い合わせありがとうございます", $message );
    $_SESSION = array();
    $mode = "send";
  } else {
    $_SESSION = array();
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="contactform.css">
</head>
<body>

  <div class="form-wrapper">


    <?php if( $mode == "input" ){ ?>
      <!-- 入力画面 -->
      <form action="./contactform.php" method="post" class="contact-form">
        <div class="form-group">
          <label for="fullname">名前</label>
          <input type="text" name="fullname" id="fullname" value="<?php echo htmlspecialchars($_SESSION["fullname"], ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
          <label for="email">Eメール</label>
          <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($_SESSION["email"], ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
          <label for="message">お問い合わせ内容</label>
          <textarea name="message" id="message" rows="5"><?php echo htmlspecialchars($_SESSION["message"], ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>
        <div class="action-btns">
          <input type="submit" name="confirm" value="確認" class="button">
        </div>
      </form>
    <?php } else if( $mode == "confirm" ){ ?>
      <!-- 確認画面 -->
      <form action="./contactform.php" method="post" class="contact-form">
        <div class="form-group">
          <label>Name</label>
          <p><?php echo htmlspecialchars($_SESSION["fullname"], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div class="form-group">
          <label>Mail</label>
          <p><?php echo htmlspecialchars($_SESSION["email"], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div class="form-group">
          <label>Text</label>
          <p><?php echo nl2br(htmlspecialchars($_SESSION["message"], ENT_QUOTES, 'UTF-8')); ?></p>
        </div>
        <div class="action-btns">
          <input type="submit" name="back" value="戻る" class="button">
          <input type="submit" name="send" value="送信" class="button">
        </div>
      </form>
    <?php } else { ?>
      <!-- 完了画面 -->
      <p class="submit_end">送信しました。<br>お問い合わせありがとうございました。</p>
    <?php } ?>
  </div>
</body>
</html>