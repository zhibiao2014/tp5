<?php
namespace app\demo\controller;

class UserType
{
	public function index(){
// 		Hook::add('app_init',function(){ echo 'Hello,world!';});
		Hook::add('app_init','demo\\behavior\\Test');
		Hook::listen('app_init');
		echo "151";
	}
}