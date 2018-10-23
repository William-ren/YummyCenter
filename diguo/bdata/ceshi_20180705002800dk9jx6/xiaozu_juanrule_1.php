<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_juanrule`;");
E_C("CREATE TABLE `xiaozu_juanrule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '名称',
  `type` int(1) NOT NULL COMMENT '营销类型 1充值  2下单成功分享优惠券  3会员中心推广优惠券',
  `juantotalcost` decimal(12,2) DEFAULT NULL COMMENT '充值赠送优惠券总金额',
  `juannum` int(11) NOT NULL COMMENT '送多少张优惠券(type3固定为1张)',
  `jiancostmin` decimal(8,2) NOT NULL COMMENT '满---最小',
  `jiancostmax` decimal(8,2) NOT NULL COMMENT '满---最大',
  `jiacostmin` decimal(8,2) NOT NULL COMMENT '减---最小',
  `jiacostmax` decimal(8,2) NOT NULL COMMENT '减---最大',
  `endtime` int(11) NOT NULL COMMENT '失效时间',
  `paytype` varchar(20) DEFAULT NULL COMMENT '(0,1) 0支持货到付款1支持在线支付',
  `is_open` int(1) NOT NULL DEFAULT '1' COMMENT '是否启用默认1开启',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `orderid` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='分享优惠券规则类型'");
E_D("replace into `xiaozu_juanrule` values('14',0xe58585e580bc3530e980813130,'1','5.00','0','20.00','50.00','1.00','5.00','1578990324',0x312c32,'1','1492676724','4');");
E_D("replace into `xiaozu_juanrule` values('24',0xe6989fe6989f,'2','0.00','1000','0.00','0.00','0.00','0.00','1500984159',0x312c32,'0','1500120159','0');");
E_D("replace into `xiaozu_juanrule` values('20',0x78696164616e,'2','0.00','1','1.00','1.00','1.00','1.00','1498809565',0x312c32,'1','1497427165','1');");
E_D("replace into `xiaozu_juanrule` values('12',0xe68ea8e5b9bfe4bc98e683a0e588b8,'3','0.00','1','20.00','20.00','5.00','5.00','1578990203',0x312c32,'1','1492676603','2');");
E_D("replace into `xiaozu_juanrule` values('13',0xe585b3e6b3a8e5beaee4bfa1e9a286e58f96e4bc98e683a0e588b8,'4','0.00','1','30.00','50.00','5.00','8.00','1578990239',0x312c32,'1','1492676639','3');");
E_D("replace into `xiaozu_juanrule` values('15',0x323030e5878f313030,'1','100.00','0','20.00','100.00','2.00','5.00','2147397268',0x312c32,'1','1492744468','0');");
E_D("replace into `xiaozu_juanrule` values('16',0xe585b3e6b3a8e5beaee4bfa1e9a286e58f963130e58583e7baa2e58c85,'4','0.00','6','20.00','20.00','10.00','10.00','1504807786',0x312c32,'1','1496167786','1');");
E_D("replace into `xiaozu_juanrule` values('17',0xe4b88be58d95e68890e58a9fe58886e4baabe7baa2e58c85,'2','0.00','5','10.00','10.00','2.00','2.00','1504807885',0x312c32,'1','1496167885','1');");
E_D("replace into `xiaozu_juanrule` values('18',0x35302d35,'1','50.00','0','20.00','20.00','5.00','5.00','1582810636',0x312c32,'1','1496497036','1');");
E_D("replace into `xiaozu_juanrule` values('19',0xe58585e580bc31303030e980813330,'1','1000.00','0','20.00','20.00','10.00','10.00','1496756857',0x312c32,'1','1496497657','10');");
E_D("replace into `xiaozu_juanrule` values('22',0xe58886e4baabe68ea8e5b9bfe98081e4bc98e683a0e58db7,'3','0.00','1','5.00','5.00','5.00','5.00','1502868067',0x32,'1','1497684067','1');");
E_D("replace into `xiaozu_juanrule` values('25',0xe982aee694bfe582a8e89384,'2','0.00','1000','0.00','0.00','0.00','0.00','1500206673',0x312c32,'0','1500120273','0');");
E_D("replace into `xiaozu_juanrule` values('26',0xe6b1bde8bda6e6b885e6b497e5ba97,'2','0.00','10','0.00','0.00','0.00','0.00','1500206832',0x312c32,'0','1500120432','0');");
E_D("replace into `xiaozu_juanrule` values('27',0x787878,'2','0.00','1','10.00','50.00','3.00','5.00','1504516503',0x312c32,'1','1500196503','0');");
E_D("replace into `xiaozu_juanrule` values('28',0xe4b88be58d95e5908ee58886e4baabe69c89e7a4bc,'2','0.00','10000','1.00','1.00','1.00','1.00','1502710267',0x32,'1','1502451067','1');");

require("../../inc/footer.php");
?>