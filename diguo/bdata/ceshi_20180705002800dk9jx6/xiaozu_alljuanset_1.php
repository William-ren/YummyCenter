<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_alljuanset`;");
E_C("CREATE TABLE `xiaozu_alljuanset` (
  `id` int(2) NOT NULL,
  `name` text COMMENT '优惠券名称',
  `type` int(2) DEFAULT NULL COMMENT '优惠券类型1关注微信 2注册送 3充值送 4下单发红包 5邀请好友',
  `status` int(2) DEFAULT '0' COMMENT '状态 0关闭 1开启',
  `costtype` int(2) DEFAULT '1' COMMENT '面值类型 1固定面值 2随机面值',
  `paytype` varchar(20) DEFAULT NULL COMMENT '支持类型 1 货到支付 2在线支付 1,2 都支持',
  `timetype` int(2) DEFAULT '1' COMMENT '有效期类型  1领取后几天后失效 2固定时间段',
  `days` int(3) DEFAULT NULL COMMENT '有效天数',
  `starttime` int(11) DEFAULT NULL COMMENT '有效时间开始值',
  `endtime` int(11) DEFAULT NULL COMMENT '有效时间结束值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_alljuanset` values('1',0xe585b3e6b3a8e98081e4bc98e683a0e588b8,'1','1','2',0x312c32,'1','3','1504341572','1504641572');");
E_D("replace into `xiaozu_alljuanset` values('2',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'2','1','1',0x312c32,'1','3','1504281600','1504713599');");
E_D("replace into `xiaozu_alljuanset` values('3',0xe58585e580bce98081e4bc98e683a0e588b8,'3','1','2',0x312c32,'1','3','1504341572','1504641572');");
E_D("replace into `xiaozu_alljuanset` values('4',0xe4b88be58d95e98081e4bc98e683a0e588b8,'4','1','2',0x312c32,'1','3','1504281600','1504713599');");
E_D("replace into `xiaozu_alljuanset` values('5',0xe98280e8afb7e5a5bde58f8be98081e7baa2e58c85,'5','1','2',0x312c32,'1','3','1504341572','1504641572');");

require("../../inc/footer.php");
?>