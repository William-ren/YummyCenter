<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shopattr`;");
E_C("CREATE TABLE `xiaozu_shopattr` (
  `shopid` int(20) NOT NULL,
  `cattype` int(1) NOT NULL DEFAULT '0' COMMENT '1外卖2订台',
  `firstattr` int(20) NOT NULL DEFAULT '0',
  `attrid` int(20) NOT NULL DEFAULT '0' COMMENT '该属性ID',
  `value` varchar(255) DEFAULT NULL COMMENT '值'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shopattr` values('584','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('734','1','369','370',0xe697a5e794a8e799bee8b4a7);");
E_D("replace into `xiaozu_shopattr` values('560','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('884','0','213','401',0xe9babbe8bea3e783ab);");
E_D("replace into `xiaozu_shopattr` values('246','0','213','302',0xe5bc82e59bbde9a38ee591b3);");
E_D("replace into `xiaozu_shopattr` values('246','0','213','336',0xe9b29ce88ab1e89b8be7b395);");
E_D("replace into `xiaozu_shopattr` values('171','0','51','72',0xe7bd91e7ab99e4b893e98081);");
E_D("replace into `xiaozu_shopattr` values('171','0','51','75',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('632','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('530','0','213','398',0xe781abe99485e9a699e99485);");
E_D("replace into `xiaozu_shopattr` values('246','0','213','340',0xe697a9e9a490e5a49ce5aeb5);");
E_D("replace into `xiaozu_shopattr` values('759','0','213','428',0xe4b88be58d88e88cb6);");
E_D("replace into `xiaozu_shopattr` values('76','0','59','195',0x2f75706c6f61642f676f6f64732f32303136303131303136333231343638392e706e67);");
E_D("replace into `xiaozu_shopattr` values('246','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('246','0','213','293',0xe4b8ade5bc8fe9a490e58e85);");
E_D("replace into `xiaozu_shopattr` values('551','0','213','338',0xe59c9fe8b1aae9a686);");
E_D("replace into `xiaozu_shopattr` values('169','0','51','112',0xe7949ce782b9e9a5aee59381);");
E_D("replace into `xiaozu_shopattr` values('77','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('77','0','51','110',0xe9b29ce88ab1e89b8be7b395);");
E_D("replace into `xiaozu_shopattr` values('581','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('489','0','213','413',0xe4ba94e98791e69d82e8b4a7);");
E_D("replace into `xiaozu_shopattr` values('489','0','213','398',0xe781abe99485e9a699e99485);");
E_D("replace into `xiaozu_shopattr` values('555','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('772','0','213','397',0xe6b5b7e9b29ce783a7e783a4);");
E_D("replace into `xiaozu_shopattr` values('582','0','213','250',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('763','0','213','401',0xe9babbe8bea3e783ab);");
E_D("replace into `xiaozu_shopattr` values('77','0','51','72',0xe7bd91e7ab99e4b893e98081);");
E_D("replace into `xiaozu_shopattr` values('77','0','51','199',0xe59c9fe8b1aae9a686);");
E_D("replace into `xiaozu_shopattr` values('77','0','51','75',0xe7be8ee9a39fe5a496e58d96);");
E_D("replace into `xiaozu_shopattr` values('76','0','51','110',0xe9b29ce88ab1e89b8be7b395);");
E_D("replace into `xiaozu_shopattr` values('76','0','51','72',0xe7bd91e7ab99e4b893e98081);");
E_D("replace into `xiaozu_shopattr` values('76','0','51','199',0xe59c9fe8b1aae9a686);");
E_D("replace into `xiaozu_shopattr` values('541','0','213','293',0xe4b8ade5bc8fe9a490e58e85);");
E_D("replace into `xiaozu_shopattr` values('180','0','51','73',0xe98081e88dafe4b88ae997a8);");
E_D("replace into `xiaozu_shopattr` values('181','0','51','205',0xe4b88ae997a8e6b497e8a1a3);");
E_D("replace into `xiaozu_shopattr` values('169','0','51','72',0xe7bd91e7ab99e4b893e98081);");
E_D("replace into `xiaozu_shopattr` values('169','0','51','199',0xe59c9fe8b1aae9a686);");
E_D("replace into `xiaozu_shopattr` values('885','0','213','401',0xe9babbe8bea3e783ab);");
E_D("replace into `xiaozu_shopattr` values('886','1','369','403',0xe894ace88f9ce7b2aee6b2b9);");
E_D("replace into `xiaozu_shopattr` values('888','1','369','408',0xe4ba94e98791e69d82e8b4a7);");
E_D("replace into `xiaozu_shopattr` values('888','1','369','370',0xe697a5e794a8e799bee8b4a7);");

require("../../inc/footer.php");
?>