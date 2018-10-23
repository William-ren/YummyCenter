<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_group`;");
E_C("CREATE TABLE `xiaozu_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '用户组名称',
  `type` varchar(100) NOT NULL COMMENT '前台或者后台',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_group` values('1',0xe8b685e7baa7e7aea1e79086e59198,0x61646d696e);");
E_D("replace into `xiaozu_group` values('2',0xe9858de98081e59198,0x666f6e74);");
E_D("replace into `xiaozu_group` values('3',0xe59586e5aeb6e4bc9ae59198,0x666f6e74);");
E_D("replace into `xiaozu_group` values('4',0xe58cbae59f9fe7aea1e79086e59198,0x61646d696e);");
E_D("replace into `xiaozu_group` values('5',0xe699aee9809ae4bc9ae59198,0x666f6e74);");
E_D("replace into `xiaozu_group` values('64',0xe6b58be8af95e4b88b,0x666f6e74);");
E_D("replace into `xiaozu_group` values('62',0x3132,0x666f6e74);");
E_D("replace into `xiaozu_group` values('63',0xe8aea2e58d95e7aea1e79086e59198,0x61646d696e);");

require("../../inc/footer.php");
?>