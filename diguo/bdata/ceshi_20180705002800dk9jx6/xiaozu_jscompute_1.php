<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_jscompute`;");
E_C("CREATE TABLE `xiaozu_jscompute` (
  `id` int(2) NOT NULL,
  `type` tinytext COMMENT '公式类型',
  `pscost` int(2) DEFAULT '0' COMMENT '是否加配送费',
  `bagcost` int(2) DEFAULT '0' COMMENT '是否加打包费',
  `shopdowncost` int(2) DEFAULT '0' COMMENT '是否减促销中商家承担的部分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_jscompute` values('1',0xe5b9b3e58fb0e9858de98081e4bda3e98791,'0','0','0');");
E_D("replace into `xiaozu_jscompute` values('2',0xe59586e5aeb6e9858de98081e4bda3e98791,'0','0','0');");
E_D("replace into `xiaozu_jscompute` values('3',0xe5b9b3e58fb0e9858de98081e7bb93e7ae97,'1','0','0');");
E_D("replace into `xiaozu_jscompute` values('4',0xe59586e5aeb6e9858de98081e7bb93e7ae97,'0','0','1');");

require("../../inc/footer.php");
?>