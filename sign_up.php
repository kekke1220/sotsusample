<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_up.css">
    <title>Document</title>
</head>
<body>

<div class="form-wrapper">

  <h1>Sign Up</h1>

  <form name="form1" action="insert2.php" method="post">

    <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" required="required" placeholder="Name"></input>
    </div>

    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="Email Address"></input>
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
      <input type="submit" class="button" title="Sign In" value="Sign Up"></input>
    </div>

  </form>
  
</div>

</body>
</html>