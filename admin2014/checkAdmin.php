<?php

class chkinput{
	var $name;
	var $pwd;

	function chkinput($x,$y)
	{
		$this->name=$x;
		$this->pwd=$y;
	}

	function checkinput()
	{
	    require_once("../config/deco.php"); //引入类文件
	   // echo $db->mysql_server(1);exit;
		$sql=$db->query("select * from admin where username='".$this->name."'");
		$info=$db->fetch_array($sql);

		if($info==false)
		{
			echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
			exit;
		}
		else
		{
			if($info['pwd'] == md5($this->pwd)){
				session_start();
				$_SESSION['admin']=$info['username'];//注册SESSION全局变量
				//echo $_SESSION['admin'];exit;
				header("location:admin_main.php");
			}
			else
			{
				echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
				exit;
			}

		}
	}
}

$obj=new chkinput(trim($_POST['name']),trim($_POST['pass']));
$obj->checkinput();

?>
