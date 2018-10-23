<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_alljuan`;");
E_C("CREATE TABLE `xiaozu_alljuan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `type` int(2) DEFAULT NULL COMMENT '优惠券类型1关注微信 2注册送 3充值送 4下单发红包 5邀请好友',
  `name` text COMMENT '优惠券名称',
  `cost` int(5) DEFAULT '0' COMMENT '固定面值',
  `costmax` int(5) DEFAULT '0' COMMENT '随机面值上限',
  `costmin` int(5) DEFAULT '0' COMMENT '随机面值下限',
  `limitcost` int(5) DEFAULT '0' COMMENT '限制满金额',
  `starttime` int(11) DEFAULT NULL COMMENT '有效时间开始值',
  `endtime` int(11) DEFAULT NULL COMMENT '有效时间结束值',
  `paytype` varchar(20) DEFAULT NULL COMMENT '支持类型 1 货到支付 2在线支付 1,2 都支持',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_alljuan` values('1','1',0xe585b3e6b3a8e98081e4bc98e683a0e588b8,'5','10','3','20','1504341572','1504641572',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('2','1',0xe585b3e6b3a8e98081e4bc98e683a0e588b8,'6','11','4','21','1504341572','1504641572',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('3','1',0xe585b3e6b3a8e98081e4bc98e683a0e588b8,'7','12','5','22','1504341572','1504641572',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('27','2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'5','0','0','80','1504281600','1504713599',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('26','2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'5','0','0','50','1504281600','1504713599',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('25','2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'5','0','0','20','1504281600','1504713599',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('18','4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'0','12','5','22','1504281600','1504713599',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('17','4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'0','11','4','21','1504281600','1504713599',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('16','4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'0','10','3','20','1504281600','1504713599',0x312c32);");
E_D("replace into `xiaozu_alljuan` values('10','5',0xe98280e8afb7e5a5bde58f8be98081e7baa2e58c85,'5','10','3','20','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('11','5',0xe98280e8afb7e5a5bde58f8be98081e7baa2e58c85,'6','11','4','21','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('12','5',0xe98280e8afb7e5a5bde58f8be98081e7baa2e58c85,'7','12','5','22','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('13','3',0xe58585e580bce98081e4bc98e683a0e588b8,'5','10','3','20','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('14','3',0xe58585e580bce98081e4bc98e683a0e588b8,'6','11','4','21','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('15','3',0xe58585e580bce98081e4bc98e683a0e588b8,'7','12','5','22','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('4','2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'5','10','3','20','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('5','2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'6','11','4','21','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('6','2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'7','12','5','22','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('7','4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'5','10','3','20','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('8','4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'6','11','4','21','1504341572','1504641572',0x31);");
E_D("replace into `xiaozu_alljuan` values('9','4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'7','12','5','22','1504341572','1504641572',0x31);");

require("../../inc/footer.php");
?>