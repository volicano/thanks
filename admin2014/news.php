<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<?php 
require_once("../config/deco.php"); //引入类文件
if(@$_POST['btnDelete']){

 while(list($name,$value)=each($_POST))
  {
      $db->query("delete from news where id='".$value."'",$conn);
  }
  echo "<script>alert('删除成功!');window.location.href='news.php';</script>";
}
?>
<script src="css/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	if(top.checkBoxList)top.checkBoxList($(".checkBoxList-item"),$(".checkBoxList-btn"));
});
</script>
</head>
<body>
<div class="main">
<table><tr><td>
<div align="left">
<input name="button" type="button" id="button" onClick="javascript:window.location='addnews.php';" value="添加新闻信息">
</div></td></tr></table>
<?php
       require_once("../config/deco.php"); //引入类文件
       $sql=$db->query("select count(*) as total from news ");
	   $info=$db->fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "本站暂无该类信息!";
	   }
	   else
	   {
	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if((@$_GET['page'])==""){
			    $page=1;
			}else{
			    $page=intval($_GET[page]);
			}
           $sql1=$db->query("select * from news order by addtime desc limit ".($page-1)*$pagesize.",$pagesize");
?>
<form name="form1" method="post" action="">
<table>
  <tr>
    <td colspan="4"><div class="main-title">新闻信息</div></td>
  </tr>
      <tr class="main-tit">
        <td>复选</td>
        <td>标题</td>
        <td>时间</td>
        <td>操作</td>
      </tr>
	    <?php
		   while($info1=$db->fetch_array($sql1))
		    {
	  ?>
	  <tr>
        <td><input type="checkbox" class="checkBoxList-item" name=<?php echo $info1['id'];?> value=<?php echo $info1['id'];?>></td>
        <td><?php echo $info1['title'];?></td>
        <td><?php echo date("Y-m-d H:i:s",$info1['addtime']);?></td>
	    <td ><a href="editnews.php?id=<?php echo $info1['id'];?>">查看编辑</a></td>
	  </tr>
	  <?php
	       }
	  ?>
  <tr>
    <td colspan="4"><div class="main-bottom"><input type="submit" name="btnDelete" value="删除所选项" class="buttoncss-del checkBoxList-btn">&nbsp;&nbsp;<input type="reset" value="重新选择" class="buttoncss-del">
    &nbsp;&nbsp;&nbsp;&nbsp;
	  本站共有信息
	 <?php
		   echo $total;
		  ?>
        &nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="adminaboutus.php?id=<?php echo $id;?>&page=1" title="首页"><font size="3"> 首页 </font></a> 
		<a href="adminaboutus.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font size="3"> 前一页 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="adminaboutus.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="adminaboutus.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="adminaboutus.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="后一页"><font size="3"> 后一页 </font></a>
		 <a href="adminaboutus.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font size="3"> 尾页 </font></a>
        <?php }?>
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