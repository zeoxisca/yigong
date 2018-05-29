<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <title>聚力-首页</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
    <link href="signin.css" rel="stylesheet">
    <!-- <script src="../bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script> -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="css/add.css" rel="stylesheet">
  </head>

  <body data-feedly-mini="yes">

         



<div id="frame">
<?php 
    require_once('config.php');
    if(isset($_POST['title'])) {
        $sql = "SELECT * FROM info WHERE title='". $_POST['title']."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <div class="container" style="text-align:center;">
            <h1 class="form-signin-heading">招工信息</h4>
            <div class="page-header">
                <h4>标题:<?php echo $row['title']?></h4>
            </div>

            <div class="page-header">
                <h4>时间 ：<?php echo $row['date']?></h4>
            </div>

            <div class="page-header">
                <h4>地点：<?php echo $row['place']?></h4>
            </div>

            <div class="page-header">
                <h4>招工部门：<?php echo $row['department']?></h4>
            </div>

            <div class="page-header">
                <h4>招工人数：<?php echo $row['remain']?>人</h4>
            </div>

            <div class="page-header">
                <h4>招工说明：<?php echo $row['content']?></h4>
            </div>

            <div class="page-header">
                <h4>备注：<?php echo $row['extra']?></h4>
            </div>

            </div> <!-- /container -->
            <div class="page-header">
                <input type="hidden" name="title" value="<?php echo $row['title']; ?>">
                <p><input id="enrol" type="submit" class="btn btn-primary" role="button" onclick="javascript:alert('报名成功，请于规定时间去指定地点签到');jQuery.post('./info.php',{ title: '<?php echo $row['title']; ?>', update: '1'});location.href='info.php';" value="报名"></a></p>
            </div>
            </div>
        </body>
    </html>
            <?php
        } 
    }

    $conn->close();