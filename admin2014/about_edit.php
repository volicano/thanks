<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>关于我们</title>
<link rel="stylesheet" type="text/css" href="css/forms.css"/>
<?php 
//引入在线编辑器 
include("FCKeditor/fckeditor.php") ; 
require_once("../config/deco.php"); //引入类文件
if(@$_POST['btnupdate']){
$title=$_POST['title'];
$content=$_POST['EditorDefault'];
$time=time();
$sql=$db->query("update web_about set topic='$title',content='$content',dateline='$time' where id='".$_POST['id']."'");
echo "<script>alert('修改成功!');window.location.href='about_main.php';</script>";
}
?> 
</head>
<?php
  require_once("../config/deco.php"); //引入类文件
 $sql=$db->query("select * from about where id='".$_GET['id']."'");      
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
        <td >主题</td>
        <td><div align="left">
        <input type="text" id="title" name="title" size="50" class="inputcss" value="<?php echo $info['topic'];?>"></div></td>
      </tr>
      <tr>
        <td>内容</td>
        <td><div align="left">
<!--        <textarea name="EditorDefault" rows="8" cols="70"></textarea>-->
        <?php 
			$oFCKeditor = new FCKeditor('EditorDefault'); 
			// FCKeditor所在目录,这个路径一定要和上面那个引入路径一致，否则会报错:找不到fckeditor.html页面 
			$oFCKeditor->BasePath = 'FCKeditor/' ;
			$oFCKeditor->Height = '450px';
			$oFCKeditor->Width = '100%';
			$oFCKeditor->ToolbarSet='Default';
			$oFCKeditor->Value=$info['content'];
			// 将FCKeditor实例化 
			$oFCKeditor->Create() ; 
		?> 
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"><input type="submit" value="更改" name="btnupdate" class="buttoncss">&nbsp;&nbsp;<input type="button" onClick="history.back();" value="返回" class="buttoncss"></td>
      </tr>
	  </form>
</table>
</div>
</body>
</html>
