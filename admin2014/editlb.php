<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/forms.css"/>
<?php 
//引入在线编辑器 
include("FCKeditor/fckeditor.php") ; 
require_once("../config/deco.php"); //引入类文件
if(@$_POST['btnupdate']){

$leibie=$_POST['leibie'];


$sql=$db->query("update type set typename='$leibie' where typeid='".$_POST['id']."'");
echo "<script>alert('修改成功!');window.location.href='news.php';</script>";
}
?> 
</head>
<?php
  require_once("../config/deco.php"); //引入类文件
 $sql=$db->query("select * from type where typeid='".$_GET['lb']."'");      
 $info=$db->fetch_array($sql);
?>
<script language="javascript">
  function chkinput(form){if(form.title.value==""){alert("请输入主题!");form.title.select();return(false);}
  //if(form.EditorDefault.value==""){alert("请输入内容!");form.EditorDefault.select();return(false);}
  return(true);}
</script>
<body>
<div class="main">
<table>
  <tr>
    <td colspan="2"><div class="main-title">查看修改信息</div></td>
  </tr>
       <form name="form1" method="post" action="" onSubmit="return chkinput(this)">
	
     <tr>
          <td>类别名称：</td>
          <td><div align="left">
              &nbsp;
              <input type="text" name="leibie" class="inputcss" size="40" value="<?php echo $info['typename'];?>">
          </div></td>
        </tr>
      <tr>
        <td colspan="2"><input type="hidden" name="id" value="<?php echo $_GET['lb'];?>"><input type="submit" value="更改" name="btnupdate" class="buttoncss">&nbsp;&nbsp;<input type="button" onClick="history.back();" value="返回" class="buttoncss"></td>
      </tr>
	  </form>
</table>
</div>
</body>
</html>
