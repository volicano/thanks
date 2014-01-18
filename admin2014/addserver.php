<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加服务文档</title>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<?php 
//引入在线编辑器 
include("FCKeditor/fckeditor.php") ; 
require_once("../config/deco.php"); //引入类文件
if(@$_POST['subAdd']){
$title=$_POST['title'];
$type=$_POST['type'];
$content=$_POST['EditorDefault'];
$time=time();
$sql=$db->query("insert into server values(null,'$title','$content','$time','$type')");
echo "<script>alert('添加成功!');window.location.href='server.php';</script>";
}
?> 
</head>
<script language="javascript">
function chkinput(form){
	if(form.title.value==""){alert("请输入名称!");form.title.select();return(false);}
	//if(form.EditorDefault.value==""){alert("请输入饮食健康信息内容!");form.EditorDefault.select();return(false);}
	return(true);}
</script>
<body>
<?php
  require_once("../config/deco.php"); //引入类文件
 $sql1=$db->query("select * from type where 1=1");      
?>
<div class="main">
<table width="880" height="400">
  <tr>
    <td colspan="2"><div class="main-title">添加简介</div></td>
  </tr>
      <form name="form1" method="post" action="" onSubmit="return chkinput(this)">
	  <tr>
        <td>主题</td>
        <td><div align="left"><input type="text" id="title" name="title" size="50" class="inputcss"></div></td>
      </tr>
	     
	   <tr>
        <td>类型</td>
        <td><div align="left">
          <label>
          <select name="type">
		   <?php
		   while($info1=$db->fetch_array($sql1))
		    {
	  ?>
            <option value="<?php echo $info1['typeid'];?>"><?php echo $info1['typename'];?></option>
			   <?php
	       }
	  ?>
          </select>
          </label>
        </div></td>
      </tr>
	 
      <tr>
        <td>内容</div></td>
        <td><div align="left">
<!--        <textarea name="EditorDefault" rows="8" cols="70"></textarea>-->
        <?php 
			$oFCKeditor = new FCKeditor('EditorDefault'); 
			// FCKeditor所在目录,这个路径一定要和上面那个引入路径一致，否则会报错:找不到fckeditor.html页面 
			$oFCKeditor->BasePath = 'FCKeditor/' ;
			$oFCKeditor->Height = '400px';
			$oFCKeditor->Width = '90%';
			$oFCKeditor->ToolbarSet='Basic';
			// 将FCKeditor实例化 
			$oFCKeditor->Create() ; 
		?> 
        </div></td>
      </tr>
      <tr>
        <td colspan="2">
        <input type="submit" value="添加" name="subAdd" class="buttoncss">&nbsp;&nbsp;
        <input type="reset" value="重置" class="buttoncss">&nbsp;&nbsp;
        <input type="button" onClick="history.back();" value="返回" class="buttoncss">
        </td>
      </tr>
	  </form>
</table>
</div>
</body>
</html>
