<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_appmudel`;");
E_C("CREATE TABLE `xiaozu_appmudel` (
  `name` varchar(100) NOT NULL COMMENT '模块名称--固定写',
  `imgurl` varchar(255) NOT NULL COMMENT '模块图标 ',
  `is_display` int(1) NOT NULL COMMENT ' 0不在首页展示   1在首页展示',
  `cnname` varchar(100) NOT NULL COMMENT '中文名称（统一录入 无ID 仅name关键字）',
  `ctlname` varchar(100) NOT NULL COMMENT 'ctlname',
  `is_install` int(1) DEFAULT '0' COMMENT '0.APP完全不显示，1APP上显示',
  `orderid` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_appmudel` values(0x7761696d6169,0x2f75706c6f61642f676f6f64732f32303135313230393137323332313436302e706e67,'1',0xe5a496e58d96,'','1','1');");
E_D("replace into `xiaozu_appmudel` values(0x6d61726b6574,0x2f75706c6f61642f676f6f64732f32303135313230393137323332373932382e706e67,'1',0xe8b685e5b882,'','0','2');");
E_D("replace into `xiaozu_appmudel` values(0x6469616e636169,0x2f75706c6f61642f676f6f64732f32303135313230393137323333343838302e706e67,'1',0xe782b9e88f9c,'','1','3');");
E_D("replace into `xiaozu_appmudel` values(0x64696e67746169,0x2f75706c6f61642f676f6f64732f32303135313230393137323333393631382e706e67,'1',0xe8aea2e58fb0,'','1','4');");
E_D("replace into `xiaozu_appmudel` values(0x70616f747569,0x2f75706c6f61642f676f6f64732f32303135313230393137343533363838372e706e67,'1',0xe8b791e885bf,'','0','5');");
E_D("replace into `xiaozu_appmudel` values(0x67696674,0x2f75706c6f61642f676f6f64732f32303136303132363133353835333130392e706e67,'1',0xe7a4bce59381,'','1','2');");
E_D("replace into `xiaozu_appmudel` values(0x636f6c6c656374,0x2f75706c6f61642f676f6f64732f32303136303131303133353532383238362e706e67,'1',0xe694b6e8978f,'','1','1');");
E_D("replace into `xiaozu_appmudel` values(0x6e657775736572,0x2f75706c6f61642f676f6f64732f32303136303131303133353534333434392e706e67,'1',0xe68891e698afe696b0e6898b,'','1','3');");

require("../../inc/footer.php");
?>