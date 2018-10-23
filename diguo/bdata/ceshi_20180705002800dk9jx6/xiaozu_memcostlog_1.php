<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_memcostlog`;");
E_C("CREATE TABLE `xiaozu_memcostlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户uid',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `cost` decimal(10,2) NOT NULL COMMENT '剩余金额',
  `bdtype` int(1) NOT NULL COMMENT '变动类型 1为增加 2为减少',
  `bdcost` decimal(10,2) NOT NULL COMMENT '本次充值/扣除金额',
  `curcost` decimal(10,2) NOT NULL COMMENT '当前金额',
  `bdliyou` varchar(255) NOT NULL COMMENT '变动原因',
  `czuid` int(11) NOT NULL COMMENT '操作用户uid',
  `czusername` varchar(30) NOT NULL COMMENT '操作用户名称',
  `addtime` int(11) NOT NULL COMMENT '操作日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5630 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_memcostlog` values('5628','17305',0x776d72,'0.00','1','1000.00','1000.00',0xe7aea1e79086e59198e79bb4e68ea5e6938de4bd9ce58f98e58aa8,'1',0x61646d696e,'1507339150');");
E_D("replace into `xiaozu_memcostlog` values('5629','17305',0x776d72,'1000.00','2','27.00','973.00',0xe4b88be58d95e4bd99e9a29de6b688e8b4b9,'17305',0x776d72,'1507339159');");

require("../../inc/footer.php");
?>