<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shoptx`;");
E_C("CREATE TABLE `xiaozu_shoptx` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cost` decimal(7,2) NOT NULL DEFAULT '0.00',
  `type` int(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(12) NOT NULL,
  `shopid` int(20) NOT NULL,
  `shopuid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `yue` double(8,2) NOT NULL,
  `jsid` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19963 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shoptx` values('19962','20.60','3','2','1507339378','884','17302',0xe8aea2e58d95e7bb93e7ae97e8bdace585a5e4bd99e9a29d,'20.60','1');");

require("../../inc/footer.php");
?>