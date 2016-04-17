<?php
header('Content-Type: text/html; charset=UTF-8');

define( "WB_AKEY" , '983593773' );
define( "WB_SKEY" , '272686b8cbe785bc265c7bbb04682c6e' );
define( "WB_CALLBACK_URL" , 'http://open.bestaust.cn/callback.php' );
//调试输出函数
function debug($val,$dump =false, $exit=true)
{
	//自动获取调试函数名称$func
	if ($dump) {
		$func ='var_dump';
	}else{
		$func =(is_array($val) || is_object($val) )? 'print_r' : 'printf';
	}
//输出到html
	header("Content-type:text/html;charset=UTF-8");
	echo '<pre>debug output:<hr />';
	$func($val);
	echo '</pre>';
	if($exit) exit;
}