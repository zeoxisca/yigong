<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>招工-大图</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
    <link href="signin.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="css/add3.css" rel="stylesheet">
    <style>
#container {
width:20px;
}
    </style>
  </head>

  <body>
  <div id="frame">
    <div class="container">
<?php 
    require_once('config.php');
    if(isset($_POST['title']) and isset($_POST['update'])) {
        if($_POST['update'] == 1) {
            $sql = "UPDATE info SET remain = remain-1 WHERE title='".$_POST['title']."'";
            $result = $conn->query($sql);
        }
    }
    $sql = "SELECT * FROM info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["remain"] > 0) {
                ?>
                <form method="POST" action="detail.php">
                <!-- <div class="row col-sm-6 col-md-4 thumbnail caption"> -->
                    <h3>#<?php echo $row['title']; ?>#</h3>
                    <input type="hidden" name="title" value="<?php echo $row['title']; ?>">
                    <p>用工时间：<?php echo $row['date']; ?></p>
                    <p>名额剩余：<?php echo $row['remain']; ?></p>
                    <p><input type="submit" class="btn btn-primary" role="button" value="查看"></p>
                <!-- </div> -->
            </form>
                <?php
            }
        }
    } else {
        echo "<script>alert('目前还没有招工信息哦~')</script>";
    }
    $conn->close();
?>
    
    </div> <!-- /container -->
</div>
  </body>
</html>
