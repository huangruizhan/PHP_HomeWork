<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">


</head>
<body>
<div>
  <form action = "cast.php" method = "post" >
    <input type = "button" value = "添加消息"></input><br />
    标题：<input type="text" name = "title"><br />
    内容：<input type = "text" name = "artist" style="width: 300px;height: 100px;"><br />
    类别：
    <select name = "active" >
      <option value ="活动安排" >活动安排</option>
    </select><br />
    <input type = "submit" name = "发布"><input type = "reset" name = "重置">
  </form>

</div>


</body>
</html>
