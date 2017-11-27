<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">

  <script type="text/javascript" charset="utf-8"></script>
</head>
<body>
<?php
$a = array("a","b","c","c" ,"a","b","c","c" ,"d");
$b = array_count_values($a);
$c = array();
foreach ($a as $key => $value) {
  echo $value." ";
}
echo "<br />";
arsort($b);
foreach (array_slice($b,0,3) as $key => $value) {
  echo $key." ";
}
//print_r(array_slice($b,0,3));



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
