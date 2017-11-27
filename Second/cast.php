<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">


</head>
<body>
  <div>

    <form>
        <input type = "button" value = "查看信息"></input>
        <p>标题：</p><?php echo $_POST["title"]; ?><br />
        <p>类别：</p><?php echo $_POST["active"]; ?><br />
        <p>内容：</p><?php echo $_POST["artist"]; ?><br />

    </form>

  </div>


</body>
</html>
