<?php
namespace app\demo\controller;

class Index
{

    public function index()
    {
        $str = 'a:3:{s:6:"config";a:7:{s:6:"expire";d:24;s:11:"expire_unit";s:4:"hour";s:11:"separate_by";i:0;s:15:"level_point_all";s:2:"5%";s:15:"level_money_all";s:2:"1%";s:18:"level_register_all";i:2;s:17:"level_register_up";i:60;}s:4:"item";a:3:{i:0;a:2:{s:11:"level_point";s:3:"60%";s:11:"level_money";s:3:"60%";}i:1;a:2:{s:11:"level_point";s:3:"30%";s:11:"level_money";s:3:"30%";}i:2;a:2:{s:11:"level_point";s:2:"7%";s:11:"level_money";s:2:"7%";}}s:2:"on";i:1;}';
        $data = unserialize($str);
        // print_r($data);

        $arr = array('0'=>'取消代理','1'=>'省级代理','2'=>'市级代理','3'=>'县级代理');
        $arr = array('0'=>'取消医生','1'=>'医生');
        $form = serialize($arr);
        echo $form;

    }
    public function test(){
        $arr = [];
        var_dump($arr);
    }
}