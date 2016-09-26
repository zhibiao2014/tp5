<?php
namespace app\index\controller;

use think\View;

class Index
{
    public function index()
    {
 	$config=array(//正式环境
			'service'=>"commonWchatTradeRedirect",
			'partnerId'=>"20151215020009599264",
			'ckey'=>"b4baf8d0faabfe5248e39e5b7f040e41"
	); 
/*	$config=array(//测试
			'service'=>"commonWchatTradeRedirect",
			'partnerId'=>"20140411020055684571",
			'ckey'=>"c9cef22553af973d4b04a012f9cb8ea8"
	);*/
// 	$data=$this->unserialize_config($config);
	$data=$this->serialize_config($config);
	
/* 	$st='a:14:{s:7:"orderNo";s:24:"862814703850211253420470";s:7:"tradeNo";s:20:"000z00601g4cjzwuow71";s:10:"notifyTime";s:19:"2016-08-05 17:05:00";s:10:"resultCode";s:15:"EXECUTE_SUCCESS";s:4:"sign";s:32:"399b5388569b8518c94bdfb4429d4d6d";s:13:"resultMessage";s:12:"执行成功";s:10:"outOrderNo";s:20:"03600222016080537861";s:7:"version";s:3:"1.0";s:8:"protocol";s:8:"httpPost";s:7:"service";s:24:"commonWchatTradeRedirect";s:7:"success";s:4:"true";s:11:"tradeStatus";s:14:"trade_finished";s:8:"signType";s:3:"MD5";s:9:"partnerId";s:20:"20140411020055684571";}';
	$data=unserialize($st); */
	var_dump($data);exit();
    $v=new View();
    return $v->fetch('index/index');
    }
    public function unserialize_config($cfg)
    {
    	if (is_string($cfg) && ($arr = unserialize($cfg)) !== false)
    	{
    		$config = array();
    
    		foreach ($arr AS $key => $val)
    		{
    			$config[$val['name']] = $val['value'];
    		}
    
    		return $config;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function serialize_config($arr){
    	$config = array();
    	$i = 0;
    	foreach ($arr as $k => $v){
    		$config[$i]['name']=$k;
    		$config[$i]['type']="text";
    		$config[$i]['value']=$v;
    		$i++;
    	}
    	return serialize($config);
    }
}
