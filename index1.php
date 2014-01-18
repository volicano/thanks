<?php 
include_once('include.php');//包含Smarty配置文件
$smarty->assign('title','Smarty配置(Smarty 2.6.20)及简单使用图文教程');//给模板变量赋值，还可以将变量赋值给模板变量，如下；

$title = "Smarty配置(Smarty 2.6.20)及简单使用图文教程";
$smarty->assign('title',$title);//给模板变量赋值
$content = "最近做的糖尿病系统项目需要用到Smarty(不要告诉我你不知道什么是Smarty？)，很久之前学习过了的，但现在也忘的差不多了，所以再来温习温习。这里有一个好消息，就是Smarty 3.0于2008年10月17日已经开始内测了，之前很多人都担心Smarty的更新问题，现在我想大家应该可以放心使用了，相信Smarty在3.0版本会带给我们更多惊喜。";
$smarty->assign('content',$content);//给模板变量赋值

$testarray =array(array('step1'=>'1 Smarty模板使用第一步','step2'=>'1 Smarty模板使用第二步','step3'=>'1 Smarty模板使用第三步'),
array('step1'=>'2 Smarty模板使用第一步','step2'=>'2 Smarty模板使用第二步','step3'=>'2 Smarty模板使用第三步'),
array('step1'=>'3 Smarty模板使用第一步','step2'=>'3 Smarty模板使用第二步','step3'=>'3 Smarty模板使用第三步'),
array('step1'=>'4 Smarty模板使用第一步','step2'=>'4 Smarty模板使用第二步','step3'=>'4 Smarty模板使用第三步')
);

$smarty->assign('testarray',$testarray);
$smarty->display('home/index1.html');//加载模板文件
?>
