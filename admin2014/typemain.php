<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>菜单类别管理</title>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<script src="../css/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	if(top.checkBoxList)top.checkBoxList($(".checkBoxList-item"),$(".checkBoxList-btn"));
});
</script>
</head>
<body>
<div class="main">
<table><tr><td>
<div align="left"><input name="button" type="button" class="buttoncss-del" id="button" onClick="javascript:window.location='addtype.php';" value="添加新类别"></div>
</td></tr></table>
<?php
require_once("../config/deco.php"); //引入类文件
if(@$_POST['btnDelete']){
  
 while(list($name,$value)=each($_POST))
  {
      $db->query("delete from type where typeid='".$value."'");
  }
  echo "<script>alert('删除成功!');window.location.href='typemain.php';</script>";
}


$sql=$db->query("select * from type order by typeid desc");
$info=$db->fetch_array($sql);
 if($info==false)
  {
    echo "本站暂无菜单类别!";
   }
  else
  {
?>
<form name="form1" method="post" action="">
  <table>
   
    <tr>
      <td colspan="3"><div class="main-title">菜单类别管理</div></td>
    </tr>
        <tr class="main-tit">
          <td >类别名称</td>
          <td>操作</td>
          <td>删除</td>
        </tr>
		<?php
		  do
		  {
		?>
        <tr>
          <td><?php echo $info['typename'];?></td>
          <td><a href="editlb.php?lb=<?php echo $info['typeid'];?>">修改</a></td>
          <td><input type="checkbox" class="checkBoxList-item" value=<?php echo $info['typeid'];?> name="btnDelete"></td>
        </tr>
		<?php
		 }
		 while($info=$db->fetch_array($sql));
		?>
		<tr>
          <td></td>
          <td colspan="2"><input class="checkBoxList-btn" type="submit" value="删除" onclick="if(confirm('确认删除吗?')){return true;}else{return false;}"></td>
        </tr>
	
  </table></form>
<?php
 }
?>
</div>
</body>
</html>
