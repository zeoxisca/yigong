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
      <form class="form-signin" name="form" method="POST" action="admin.php">
        <h2 class="form-signin-heading">发布招工通知</h2><br>
        <label for="title" class="sr-only">标题</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="标题" required autofocus>
        <label for="date" class="sr-only">时间</label>
        <input type="text" name="date" id="date" class="form-control" placeholder="时间" required>
        <label for="place" class="sr-only">地点</label>
        <input type="text" name="place" id="place" class="form-control" placeholder="地点" required>
        <label for="department" class="sr-only">招工部门</label>
        <input type="text" name="department" id="department" class="form-control" placeholder="招工部门" required>
        <label for="remain" class="sr-only">招工人数</label>
        <input type="text" name="remain" id="remain" class="form-control" placeholder="招工人数" required>
        <label for="content" class="sr-only">招工说明</label>
        <input type="text" name="content" id="content" class="form-control" placeholder="招工说明" required>
        <label for="extra" class="sr-only">备注</label>
        <input type="text" name="extra" id="extra" class="form-control" placeholder="备注" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">发布</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>

<?php 
require_once('config.php');
echo 1;
if(isset($_POST['title'])) {
  echo 2;
  $sql = "INSERT INTO info (`title`, `date`, `place`, `department`, `remain`, `content`, `extra`) VALUES  ('".$_POST["title"]."', '".$_POST["date"]."', '".$_POST["place"]."', '".$_POST["department"]."', '".$_POST["remain"]."', '".$_POST["content"]."', '".$_POST["extra"]."')";
  if ($conn->query($sql) === TRUE) {
    echo '<script>发布招工信息成功</script>';
    header('Location: info.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
