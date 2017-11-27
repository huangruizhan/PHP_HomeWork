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
$b[0] = chr(rand(32,127));
$b[1] = chr(rand(32,127));
$b[2] = chr(rand(32,127));
$b[3] = chr(rand(32,127));
$b[4] = chr(rand(32,127));
$b[5] = chr(rand(32,127));
foreach (array_slice($b,0,6) as $key => $value){
  echo $value;
}





?>
</body>
</html>
