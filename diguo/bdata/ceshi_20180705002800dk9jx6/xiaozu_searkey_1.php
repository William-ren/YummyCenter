<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_searkey`;");
E_C("CREATE TABLE `xiaozu_searkey` (
  `type` int(1) NOT NULL COMMENT '1外卖，2订台，3商城',
  `goid` int(20) NOT NULL,
  `keycontent` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  FULLTEXT KEY `keycontent` (`keycontent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_searkey` values('1','883',0x6775616e67686571696a69616e6469616e,0xe58589e59088e69797e888b0e5ba97);");
E_D("replace into `xiaozu_searkey` values('1','883',0x6768716a64,0xe58589e59088e69797e888b0e5ba97);");
E_D("replace into `xiaozu_searkey` values('1','884',0x6768716a64,0xe58589e59088e69797e888b0e5ba97);");
E_D("replace into `xiaozu_searkey` values('1','884',0x6775616e67686571696a69616e6469616e,0xe58589e59088e69797e888b0e5ba97);");
E_D("replace into `xiaozu_searkey` values('1','885',0x74657374,0x74657374);");

require("../../inc/footer.php");
?>