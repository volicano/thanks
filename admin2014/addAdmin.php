<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once("../config/deco.php"); //引入类文件
if($_POST['submitadd']){
$title=$_POST[name];
$content=$_POST[p1];
$sql=$db->query("insert into web_admin values(null,'$title','$content')",$conn);
echo "<script>alert('管理员添加成功!');window.location.href='changePwd.php';</script>";
}
?>
<title>添加新管理员</title>
<link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<script language="javascript">
 function chkinput(form){
	 if(form.leibie.value==""){alert('请输入新增菜单类别名!');form.leibie.select();return(false);}	 
	 return(true);}
</script>
<body>
<div class="main">
<form name="form1" method="post" action="" onSubmit="return chkinput(this);">
<table>
  <tr>
    <td colspan="2"><div class="main-title">添加新管理员</div></td>
  </tr>
        <tr>
          <td>用户名：</td>
          <td><div align="left">&nbsp;<input value="" type="text" name="name" class="inputcss" size="30"></div></td>
        </tr>
        <tr>
          <td>密码：</td>
          <td><div align="left">&nbsp;<input type="password" name="p1" class="inputcss" size="30"></div></td>
        </tr>
        <tr>
          <td>确认密码：</td>
          <td><div align="left">&nbsp;<input type="password" name="p2" class="inputcss" size="30"></div></td>
        </tr>
  <tr>
    <td colspan="2">
        <input name="submitadd" type="submit" class="buttoncss" id="submit" value="确定">&nbsp;&nbsp;
        <input type="button" onClick="history.back();" value="返回" class="buttoncss">
    </td>
  </tr>
</table>
</form>
</div>
</body>
</html>
