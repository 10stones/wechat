<?php
define("TOKEN", "weixin");

class wechatCallbackapiTest
{
	public function valid()
	{
		$echoStr = $_GET["echostr"];

		if($this->checkSignature())
		{
			echo $echoStr;
			exit;
		}
	}
	
	public function makeresponseMsg()
	{
		
	}
}



?>