<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<?php 
require_once("../config/deco.php"); //引入类文件
if($_POST['deleteBtn']){

 while(list($name,$value)=each($_POST))
  {
      $db->query("delete from web_admin where Id='".$value."'",$conn);
  }
  echo "<script>alert('删除成功!');window.location.href='changePwd.php';</script>";
}
?>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<script src="css/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	if(top.checkBoxList)top.checkBoxList($(".checkBoxList-item"),$(".checkBoxList-btn"));
});
</script>
</head>
<body>
<div class="main">
<?php
       require_once("../config/deco.php"); //引入类文件
       $sql=$db->query("select count(*) as total from web_admin ",$conn);
	   $info=$db->fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本站暂无管理员!";
	   }
	   else
	   {echo $info[authority];
?>
<form name="form1" method="post" action="">
<table><tr><td>
<div align="left"><input name="button" type="button" class="buttoncss-del" id="button" onClick="javascript:window.location='addAdmin.php';" value="添加管理员"></div>
</td></tr></table>
<table>
  <tr>
    <td colspan="5"><div class="main-title">管理员列表</div></td>
  </tr>
       <?php
	     $pagesize=10;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if(($_GET[page])==""){
			    $page=1;
			}else{
			    $page=intval($_GET[page]);
			}
             $sql1=$db->query("select * from web_admin order by Id asc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
	   ?>
	   <tr class="main-tit">
          <td>用户名</td>
          <td>密码</td>
          <td>操作</td>
        </tr>
       <?php
	      while($info1=$db->fetch_array($sql1))
		     {
	   ?>
	   <tr>
          <td><?php echo $info1[userName];?></td>
         <td>
		 <input name="pwd" value="<?php echo $info1[password];?>" type="password"/>		 
        </td>
          <td>
		    <input name="button" type="button" class="buttoncss" id="button"
			onClick=""
			value="修改">          
          <input type="checkbox" class="checkBoxList-item" name="<?php echo $info1[Id];?>" value=<?php echo $info1[Id];?>></td>
        </tr>
		<?php
	        }
		?>
  <tr>
    <td colspan="7"><div class="main-bottom">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="删除选项" name="deleteBtn" class="buttoncss-del checkBoxList-btn">
	
    </div></td>
  </tr>
</table>
<?php
   }
?>
</form>
</div>
</body>
</html>
