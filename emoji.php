<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>post界面</title>
</head>
<body>

 <?php
    date_default_timezone_set('Asia/Shanghai');
    echo date('D, M d Y');
 ?>
<br>

 <?php
  header('Content-type:text/html; charset=utf-8');
    if($_POST['textmessage'])
    echo $_POST['textmessage'];
      else
    echo'你什么都没输入喂。'
	
 ?>

</body>
</html>
