<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">

  <script type="text/javascript" charset="utf-8"></script>
</head>
<body>
<?php
$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;
$f = 6;
$g = 7;
$h = 8;
$i = 9;
$j = 10;
echo '<h1 style="text-align:center;">Table</h1>';
echo '<table border="1"   style="text-align:center;   width:500px  ;margin:0 auto;">';
	echo "<tr>"."<td>数字</td>"."<td>平方根</td>"."<td>平方</td>"."<td>立方</td>"."<td>四次方</td>"."</tr>";
	echo "<tr>"."<td>".$a."</td>"."<td>".sqrt($a)."</td>"."<td>".$a * $a."</td>"."<td>".$a * $a * $a."</td>"."<td>".$a * $a * $a * $a."</td>"."</tr>";
	echo "<tr>"."<td>$b</td>"."<td>".sqrt($b)."</td>"."<td>".$b * $b."</td>"."<td>".$b * $b * $b."</td>"."<td>".$b * $b * $b * $b."</td>"."</tr>";
  echo "<tr>"."<td>$c</td>"."<td>".sqrt($c)."</td>"."<td>".$c * $c."</td>"."<td>".$c * $c * $c."</td>"."<td>".$c * $c * $c * $c."</td>"."</tr>";
  echo "<tr>"."<td>$d</td>"."<td>".sqrt($d)."</td>"."<td>".$d * $d."</td>"."<td>".$d * $d * $d."</td>"."<td>".$d * $d * $d * $d."</td>"."</tr>";
  echo "<tr>"."<td>$e</td>"."<td>".sqrt($e)."</td>"."<td>".$e * $e."</td>"."<td>".$e * $e * $e."</td>"."<td>".$e * $e * $e * $e."</td>"."</tr>";
  echo "<tr>"."<td>$f</td>"."<td>".sqrt($f)."</td>"."<td>".$f * $f."</td>"."<td>".$f * $f * $f."</td>"."<td>".$f * $f * $f * $f."</td>"."</tr>";
  echo "<tr>"."<td>$g</td>"."<td>".sqrt($g)."</td>"."<td>".$g * $g."</td>"."<td>".$g * $g * $g."</td>"."<td>".$g * $g * $g * $g."</td>"."</tr>";
  echo "<tr>"."<td>$h</td>"."<td>".sqrt($h)."</td>"."<td>".$h * $h."</td>"."<td>".$h * $h * $h."</td>"."<td>".$h * $h * $h * $h."</td>"."</tr>";
  echo "<tr>"."<td>$i</td>"."<td>".sqrt($i)."</td>"."<td>".$i * $i."</td>"."<td>".$i * $i * $i."</td>"."<td>".$i * $i * $i * $i."</td>"."</tr>";
  echo "<tr>"."<td>$j</td>"."<td>".sqrt($j)."</td>"."<td>".$j * $j."</td>"."<td>".$j * $j * $j."</td>"."<td>".$j * $j * $j * $j."</td>"."</tr>";
echo "</table>";





?>
</body>
</html>
