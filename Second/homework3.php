<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">

  <script type="text/javascript" charset="utf-8"></script>
</head>
<body>
<?php
//0 - 127 ;

//随机值 (32-127)；
$b[0] = "Hi!";
$b[1] = "Hello";
$b[2] = "你好啊";
$b[3] = "Good morning";
$b[4] = "What's up man";
$a = rand(0,4);
foreach (array_slice($b,$a,1) as $key => $value){
  echo $value;
}





?>
</body>
</html>
