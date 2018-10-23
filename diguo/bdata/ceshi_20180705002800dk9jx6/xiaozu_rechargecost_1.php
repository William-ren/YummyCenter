<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_rechargecost`;");
E_C("CREATE TABLE `xiaozu_rechargecost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` decimal(12,2) NOT NULL COMMENT '充值金额',
  `is_sendcost` int(1) NOT NULL DEFAULT '1' COMMENT '是否赠送账户余额   默认1赠送0不',
  `sendcost` decimal(12,2) NOT NULL COMMENT '赠送金额',
  `is_sendjuan` int(1) NOT NULL COMMENT '是否赠送优惠券  默认0不赠送1赠送',
  `sendjuancost` decimal(12,2) DEFAULT NULL COMMENT '赠送优惠券总额',
  `orderid` int(11) NOT NULL COMMENT '排序',
  `juanid` int(5) DEFAULT NULL COMMENT '绑定优惠券id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_rechargecost` values('16','50.00','1','1.00','1','9.00','0','13');");
E_D("replace into `xiaozu_rechargecost` values('15','200.00','0','20.00','1','7.00','0','14');");
E_D("replace into `xiaozu_rechargecost` values('18','100.00','0','10.00','1','20.00','1',NULL);");
E_D("replace into `xiaozu_rechargecost` values('19','100.00','0','10.00','1','20.00','0',NULL);");
E_D("replace into `xiaozu_rechargecost` values('20','1000.00','0','100.00','1','100.00','6',NULL);");

require("../../inc/footer.php");
?>