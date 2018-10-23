<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_paotuiset`;");
E_C("CREATE TABLE `xiaozu_paotuiset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kg` varchar(20) NOT NULL,
  `kgcost` decimal(10,2) NOT NULL,
  `addkg` varchar(20) NOT NULL,
  `addkgcost` decimal(10,2) NOT NULL,
  `km` varchar(20) NOT NULL,
  `kmcost` decimal(10,2) NOT NULL,
  `addkm` varchar(20) NOT NULL,
  `addkmcost` decimal(10,2) NOT NULL,
  `postdate` text NOT NULL COMMENT '跑腿取件或者收货时间',
  `is_ptorderbefore` int(1) NOT NULL DEFAULT '1' COMMENT '是否支持预定默认为1 支持预定',
  `pt_orderday` int(11) NOT NULL DEFAULT '1' COMMENT '预定天数 默认为1支持预定1天',
  `cityid` int(12) NOT NULL COMMENT '所属城市ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_paotuiset` values('1',0x3130,'10.00',0x31,'5.00',0x31,'1.00',0x31,'1.00',0x613a333a7b693a303b613a333a7b733a313a2273223b693a32383830303b733a313a2265223b693a33323430303b733a313a2269223b733a303a22223b7d693a313b613a333a7b733a313a2273223b693a33323430303b733a313a2265223b693a38323830303b733a313a2269223b733a303a22223b7d693a323b613a333a7b733a313a2273223b693a38323932303b733a313a2265223b693a38363232303b733a313a2269223b733a303a22223b7d7d,'1','3','410100');");

require("../../inc/footer.php");
?>