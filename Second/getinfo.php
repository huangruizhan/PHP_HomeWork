<!DOCTYPE html>
<html>
<head>
  <title>HelloWord</title>
  <meta charset="utf-8">

  <script type="text/javascript" charset="utf-8"></script>
</head>
<body>
  <div>
    <h1>请输入你的信息</h1>
    <form>
      姓名：<?php echo $_POST["name"]; ?><br>
      性别：<?php
  //      $sex = isset($_POST["sex"])?$_POST["sex"];
            if (isset($_POST['sex']))
            {

              echo $_POST["sex"];
            }
?><br>
      出生年月:<?php echo $_POST["y"] . $_POST["m"]; ?><br>
      爱好：<?php
                if (isset($_POST['ah']))
              {

                $str =  $_POST["ah"];
                $ahh = implode(",",$str);
                print_r($ahh);
              }

            ?><br>
      地址：<?php echo $_POST["ad"]; ?><br>
      电话：<?php echo $_POST["tel"]; ?><br>
      QQ：<?php echo $_POST["qq"]; ?><br>
      自我评价：<?php echo $_POST["self"]; ?><br>
    </form>

  </div>
</body>
</html>
