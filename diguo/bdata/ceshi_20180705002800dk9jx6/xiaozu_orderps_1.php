<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_orderps`;");
E_C("CREATE TABLE `xiaozu_orderps` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orderid` int(20) NOT NULL,
  `shopid` int(20) NOT NULL,
  `psuid` int(20) NOT NULL DEFAULT '0',
  `psusername` varchar(50) DEFAULT NULL,
  `psemail` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `dno` varchar(100) NOT NULL,
  `addtime` int(12) NOT NULL,
  `pstime` int(12) NOT NULL,
  `psycost` decimal(5,2) NOT NULL,
  `picktime` int(20) NOT NULL DEFAULT '0',
  `dotype` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1499 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>