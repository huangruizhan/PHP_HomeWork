<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">
  <link href="style.css" type="text/css" rel = stylesheet>
</head>
<body>
<div>
  <h1>请输入你的信息</h1>
  <form action="getinfo.php" method="post" >
    姓名：<input type="text" name="name"><br>
    性别：
      男<input type="radio" name="sex" value="男">
      女<input type="radio" name="sex" value="女">  <br>
    出生年月：
<select name = "y">
  <option value ="1993年">1993年</option>
  <option value ="1994年">1994年</option>
  <option value="1995年">1995年</option>
  <option value="1996年">1996年</option>
  <option value="1997年">1997年</option>
  <option value="1998年">1998年</option>
</select>
<select name = "m">
  <option value ="1月">1月</option>
  <option value ="2月">2月</option>
  <option value ="3月">3月</option>
  <option value ="4月">4月</option>
  <option value ="5月">5月</option>
  <option value ="6月">6月</option>
  <option value ="7月">7月</option>
  <option value ="8月">8月</option>
  <option value ="9月">9月</option>
  <option value ="10月">10月</option>
  <option value ="11月">11月</option>
  <option value ="12月">12月</option>
</select><br />
    爱好：<input type="checkbox" name="ah[]" value="看电影">看电影
        <input type="checkbox" name="ah[]" value="听音乐">听音乐
        <input type="checkbox" name="ah[]" value="演奏乐器">演奏乐器
        <input type="checkbox" name="ah[]" value="打篮球">打篮球
        <input type="checkbox" name="ah[]" value="看书">看书
        <input type="checkbox" name="ah[]" value="上网">上网<br />
    地址：<input type="text" name="ad"><br>
    电话：<input type="text" name="tel"><br>
    QQ：   <input type="text" name="qq"><br>
    自我评价：<input type="text" name="self" id="s"><br>
<input type="submit" class = "a">
  <p name = "gotsex"></p>
  </form>

</div>
</body>
</html>
