<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shophuiorder`;");
E_C("CREATE TABLE `xiaozu_shophuiorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户uid',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `buyorderphone` varchar(100) NOT NULL,
  `dno` varchar(25) NOT NULL COMMENT '买单号',
  `shopid` int(11) NOT NULL COMMENT '店铺ID',
  `shopname` varchar(255) NOT NULL COMMENT '店铺名称',
  `xfcost` decimal(10,2) NOT NULL COMMENT '消费金额',
  `yhcost` decimal(10,2) NOT NULL COMMENT '优惠金额',
  `sjcost` decimal(10,2) NOT NULL COMMENT '实际支付金额',
  `givejifen` varchar(30) NOT NULL,
  `huiid` int(11) NOT NULL COMMENT '闪慧ID',
  `huiname` varchar(255) NOT NULL COMMENT '闪慧名称',
  `huitype` int(1) NOT NULL COMMENT '2是每满减 3是折扣',
  `huilimitcost` decimal(10,2) NOT NULL COMMENT '最低达到金额限制',
  `huicost` decimal(10,2) NOT NULL COMMENT '减金额',
  `paytype` int(11) NOT NULL COMMENT '1是微信支付',
  `paystatus` int(1) NOT NULL DEFAULT '0' COMMENT '0是未付1是已付',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0是未完成是已完成',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `completetime` int(11) NOT NULL DEFAULT '0' COMMENT '支付买单完成时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=993 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>