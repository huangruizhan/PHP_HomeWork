<!DOCTYPE html>
<html>
<head>
<title>HelloWord</title>
 <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
  <?php
    $sp[0] = '<tr id = "a"><td>商品名称</td><td>价格</td><td>数量</td><td>金额</td></tr>';
    $sp[1] = '<tr><td>品牌笔记本</td><td>4998元</td><td>1</td><td>588</td></tr>';
    $sp[2] = '<tr><td>高档男士衬衫</td><td>588元</td><td>1</td><td>588</td></tr>';
    $sp[3] = '<tr><td>品牌3G手机</td><td>4666元</td><td>2</td><td>9332</td></tr>';
    $sp[4] = '<tr><td>高档女士包包</td><td>698元</td><td>1</td><td>698</td></tr>';
    echo'<img src = "./images/bg.jpg" />';
    echo '<p style= "color:red ;font-weight:bold" >购物车商品信息展示</p>';
    echo '<table border = "3">';
    //echo $sp[0];
    foreach ($sp as $value) {
      echo "$value <br>";
      }
    echo '</table>';


  ?>
</body>
</html>
