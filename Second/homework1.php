<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">

  <script type="text/javascript" charset="utf-8"></script>
</head>
<body>
<?php
$a  = array("a","b","c","c" );
$b = array_count_values($a);
foreach ($b as $key => $value) {
  echo $key. "=>" .$value;
}
/*
for($i = 0;$i <= 3; $i++)
{
  $b[$i] = 1;
  echo $a[$i];
}
*/





?>
</body>
</html>
