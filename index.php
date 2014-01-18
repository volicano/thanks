<?php 
include_once('include.php');//包含Smarty配置文件
require_once("config/deco.php"); //引入类文件
$title = "我的网站名称";
$sql=$db->query("select * from about where 1=1");
//$info=$db->fetch_array($sql);
if($sql){
	$i=0;
	while($arr=$db->fetch_row($sql)){
		$info[$i]=$arr;
		$i++;
	}
}


$sql1=$db->query("SELECT * FROM `server` WHERE 1 order by id asc LIMIT 0 , 3 ");
//$info=$db->fetch_array($sql);
if($sql1){
	$j=0;
	while($arr1=$db->fetch_array(@$sql1)){
		$info1[$j]=$arr1;
		$j++;
	}
}
//print_r($info1);exit;
$smarty->assign('info1',$info1);//给模板变量赋值
$smarty->assign('info',$info);//给模板变量赋值
//print_r($info);exit;
$smarty->assign('title',$title);//给模板变量赋值
//$smarty->assign('testarray',$testarray);
$smarty->display('home/index.html');//加载模板文件
?>
