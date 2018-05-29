<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>后台-发布</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
    <link href="signin.css" rel="stylesheet">
    <link href="css/add2.css" rel="stylesheet">
    <!-- <script src="../bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script> -->

  </head>

  <body>

    <div class="container">
      <form class="form-signin" name="form" method="POST" action="index.php">
      <br>
        <h2 class="form-signin-heading">用户登录</h2><br>
        <label for="remain" class="sr-only">用户名</label>
        <input type="text" name="user" id="remain" class="form-control" placeholder="用户名" required>
        <label for="content" class="sr-only">密码</label>
        <input type="password" name="pass" id="content" class="form-control" placeholder="密码" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">发布</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>

<?php 
require_once('config.php');
if(isset($_POST['user'])) {
  if($_POST['user'] === 'admin') {
    if($_POST['pass'] === 'admin') {
      echo '<script>alert("admin 登录成功");</script>';
      echo '<script>location.href="admin.php";</script>';
    } else {
      echo '<script>alert("用户名或密码错误")</script>';
    }
  } else {
    if($_POST['user'] == '16271135' and $_POST['pass'] == '16271135') {
      echo '<script>alert("登录成功")</script>';
      echo '<script>location.href="info.php";</script>';
    } 
  }
}
$conn->close();
?>
