<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_module`;");
E_C("CREATE TABLE `xiaozu_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cnname` varchar(100) NOT NULL,
  `install` int(1) NOT NULL DEFAULT '0' COMMENT '0表未安装1，表已安装',
  `parent_id` int(5) NOT NULL DEFAULT '0' COMMENT '上级模块',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1133 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_module` values('1',0x73797374656d,0xe7b3bbe7bb9fe7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('2',0x6d656d626572,0xe794a8e688b7e7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('3',0x73686f70,0xe5ba97e993bae7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('18',0x616e616c79736973,0xe695b0e68daee58886e69e90e6a8a1e59d97,'1','0');");
E_D("replace into `xiaozu_module` values('5',0x6f72646572,0xe8aea2e58d95e7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('7',0x6e657773,0xe58685e5aeb9e7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('1125',0x67696674,0xe7a4bce59381e7aea1e79086,'1','7');");
E_D("replace into `xiaozu_module` values('17',0x6f74686572,0xe585b6e4bb96e7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('10',0x61726561,0xe58cbae59f9fe7aea1e79086,'1','3');");
E_D("replace into `xiaozu_module` values('11',0x61736b,0xe79599e8a880e7aea1e79086,'1','7');");
E_D("replace into `xiaozu_module` values('12',0x73696e676c65,0xe58d95e9a1b5,'1','7');");
E_D("replace into `xiaozu_module` values('16',0x63617264,0xe890a5e99480e7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('14',0x616476,0xe5b9bfe5918ae7aea1e79086,'1','7');");
E_D("replace into `xiaozu_module` values('20',0x68746d6c35,0xe6898be69cbae6a8a1e59d97,'1','16');");
E_D("replace into `xiaozu_module` values('28',0x77656978696e,0xe5beaee4bfa1,'1','0');");
E_D("replace into `xiaozu_module` values('30',0x777873697465,0xe5beaee4bfa1e7bd91e7ab99,'1','28');");
E_D("replace into `xiaozu_module` values('31',0x706c617465,0xe8aea2e58fb0,'1','1');");
E_D("replace into `xiaozu_module` values('32',0x707375736572,0xe9858de98081e59198e6a8a1e59d97,'1','3');");
E_D("replace into `xiaozu_module` values('34',0x617070,0x617070,'1','28');");
E_D("replace into `xiaozu_module` values('1124',0x73686f7063656e746572,0x73686f7063656e746572,'1','17');");
E_D("replace into `xiaozu_module` values('1126',0x73746174696f6e,0xe58886e7ab99e7aea1e79086,'1','0');");
E_D("replace into `xiaozu_module` values('1127',0x7073617069,0x7073617069,'1','0');");
E_D("replace into `xiaozu_module` values('1128',0x7073617069,0xe9858de98081e5ae9d,'1','0');");
E_D("replace into `xiaozu_module` values('1129',0x6170707632,0x6170707632,'1','0');");
E_D("replace into `xiaozu_module` values('1130',0x6170707631,0x382e36617070e68ea5e58fa3,'1','0');");
E_D("replace into `xiaozu_module` values('1132',0x6170706c6574,0x6170706c6574,'1','28');");

require("../../inc/footer.php");
?>