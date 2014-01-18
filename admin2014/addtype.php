<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加菜单类别</title>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<?php
$leibie=@$_POST['leibie'];
require_once("../config/deco.php"); //引入类文件
if(@$_POST['submit']){
$sql=$db->query("select * from type where typename='".$leibie."'");
$info=$db->fetch_array($sql);
if($info!=false){
 echo"<script>alert('该类型已存在!');window.location.href='addtype.php';</script>";
exit;
}
$db->query("insert into type(typename) values ('$leibie')");
echo"<script>alert('类型添加成功!');window.location.href='typemain.php';</script>";
}
?>
</head>
<script language="javascript">
 function chkinput(form){if(form.leibie.value==""){alert('请输入新增菜单类别名!');form.leibie.select();return(false);}return(true);}
</script>
<body>
<div class="main">
<form name="form1" method="post" action="" onSubmit="return chkinput(this);">
<table>
  <tr>
    <td colspan="2"><div class="main-title">添加菜单类别</div></td>
  </tr>
        <tr>
          <td>类别名称：</td>
          <td><div align="left">
              &nbsp;
              <input type="text" name="leibie" class="inputcss" size="40">
          </div></td>
        </tr>
  <tr>
    <td colspan="2">
        <input name="submit" type="submit" class="buttoncss" id="submit" value="添加">&nbsp;&nbsp;
        <input type="button" onClick="history.back();" value="返回" class="buttoncss">
    </td>
  </tr>
</table>
</form>
</div>
</body>
</html>
