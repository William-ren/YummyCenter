<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shopfast`;");
E_C("CREATE TABLE `xiaozu_shopfast` (
  `shopid` int(20) NOT NULL,
  `is_orderbefore` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不支持提前预定，1支持',
  `delaytime` int(5) NOT NULL DEFAULT '0' COMMENT '营业时间和下单时间补差',
  `limitcost` int(3) NOT NULL DEFAULT '0' COMMENT '起送价格',
  `limitstro` varchar(255) DEFAULT NULL COMMENT '起送说明',
  `befortime` int(1) NOT NULL DEFAULT '0' COMMENT '起送提前天数',
  `personcost` int(5) NOT NULL DEFAULT '0' COMMENT '人均消费价格',
  `sendtype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0网站配送，1自行配送',
  `is_hot` int(1) NOT NULL DEFAULT '0' COMMENT '热卖',
  `is_com` int(1) NOT NULL DEFAULT '0' COMMENT '推荐',
  `is_new` int(1) NOT NULL COMMENT '新店',
  `maketime` int(5) DEFAULT '0',
  `pradius` text,
  `pradiusvalue` text,
  `pscost` int(2) NOT NULL DEFAULT '0',
  `is_waimai` int(1) DEFAULT '1',
  `is_goshop` int(11) NOT NULL DEFAULT '0',
  `personcount` int(2) DEFAULT '0',
  `arrivetime` varchar(20) DEFAULT NULL,
  `discount` int(1) DEFAULT '0',
  `postdate` text,
  `is_hui` int(1) NOT NULL DEFAULT '0' COMMENT '管理员开启闪惠默认0为未开启 1开启',
  `is_shophui` int(1) NOT NULL DEFAULT '0' COMMENT '商家开启闪惠默认0为未开启 1开启',
  `is_shgift` int(1) NOT NULL DEFAULT '0' COMMENT '商家是否开启送积分',
  `sendgift` int(11) NOT NULL COMMENT '多少元赠送1积分',
  `is_timeduan` int(1) NOT NULL DEFAULT '0' COMMENT '是否使用时间段，默认0不使用，直接显示立即配送',
  `interval_minit` int(2) NOT NULL DEFAULT '30' COMMENT '分钟数',
  `is_sendqianjuan` int(1) NOT NULL DEFAULT '0' COMMENT '是否下单前领取代金券 默认0关闭',
  `is_sendhoujuan` int(1) NOT NULL DEFAULT '0' COMMENT '是否下单后赠送代金券 默认0关闭',
  UNIQUE KEY `shopid` (`shopid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shopfast` values('884','0','0','55','','0','0','1','0','0','0','12',0x3130,0x613a31303a7b693a303b733a313a2233223b693a313b733a313a2233223b693a323b733a313a2233223b693a333b733a313a2233223b693a343b733a313a2233223b693a353b733a313a2233223b693a363b733a313a2233223b693a373b733a313a2233223b693a383b733a313a2233223b693a393b733a313a2233223b7d,'0','0','0','0',0x3231,'0',0x613a34343a7b693a303b613a343a7b733a313a2273223b693a333636303b733a313a2265223b693a353436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a313b613a343a7b733a313a2273223b693a353436303b733a313a2265223b693a373236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a323b613a343a7b733a313a2273223b693a373236303b733a313a2265223b693a393036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a333b613a343a7b733a313a2273223b693a393036303b733a313a2265223b693a31303836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a343b613a343a7b733a313a2273223b693a31303836303b733a313a2265223b693a31323636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a353b613a343a7b733a313a2273223b693a31323636303b733a313a2265223b693a31343436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a363b613a343a7b733a313a2273223b693a31343436303b733a313a2265223b693a31363236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a373b613a343a7b733a313a2273223b693a31363236303b733a313a2265223b693a31383036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a383b613a343a7b733a313a2273223b693a31383036303b733a313a2265223b693a31393836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a393b613a343a7b733a313a2273223b693a31393836303b733a313a2265223b693a32313636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31303b613a343a7b733a313a2273223b693a32313636303b733a313a2265223b693a32333436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31313b613a343a7b733a313a2273223b693a32333436303b733a313a2265223b693a32353236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31323b613a343a7b733a313a2273223b693a32353236303b733a313a2265223b693a32373036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31333b613a343a7b733a313a2273223b693a32373036303b733a313a2265223b693a32383836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31343b613a343a7b733a313a2273223b693a32383836303b733a313a2265223b693a33303636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31353b613a343a7b733a313a2273223b693a33303636303b733a313a2265223b693a33323436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31363b613a343a7b733a313a2273223b693a33323436303b733a313a2265223b693a33343236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31373b613a343a7b733a313a2273223b693a33343236303b733a313a2265223b693a33363036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31383b613a343a7b733a313a2273223b693a33363036303b733a313a2265223b693a33373836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a31393b613a343a7b733a313a2273223b693a33373836303b733a313a2265223b693a33393636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32303b613a343a7b733a313a2273223b693a33393636303b733a313a2265223b693a34313436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32313b613a343a7b733a313a2273223b693a34313436303b733a313a2265223b693a34333236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32323b613a343a7b733a313a2273223b693a34333236303b733a313a2265223b693a34353036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32333b613a343a7b733a313a2273223b693a34353036303b733a313a2265223b693a34363836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32343b613a343a7b733a313a2273223b693a34363836303b733a313a2265223b693a34383636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32353b613a343a7b733a313a2273223b693a34383636303b733a313a2265223b693a35303436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32363b613a343a7b733a313a2273223b693a35303436303b733a313a2265223b693a35323236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32373b613a343a7b733a313a2273223b693a35323236303b733a313a2265223b693a35343036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32383b613a343a7b733a313a2273223b693a35343036303b733a313a2265223b693a35353836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a32393b613a343a7b733a313a2273223b693a35353836303b733a313a2265223b693a35373636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33303b613a343a7b733a313a2273223b693a35373636303b733a313a2265223b693a35393436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33313b613a343a7b733a313a2273223b693a35393436303b733a313a2265223b693a36313236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33323b613a343a7b733a313a2273223b693a36313236303b733a313a2265223b693a36333036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33333b613a343a7b733a313a2273223b693a36333036303b733a313a2265223b693a36343836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33343b613a343a7b733a313a2273223b693a36343836303b733a313a2265223b693a36363636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33353b613a343a7b733a313a2273223b693a36363636303b733a313a2265223b693a36383436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33363b613a343a7b733a313a2273223b693a36383436303b733a313a2265223b693a37303236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33373b613a343a7b733a313a2273223b693a37303236303b733a313a2265223b693a37323036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33383b613a343a7b733a313a2273223b693a37323036303b733a313a2265223b693a37333836303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a33393b613a343a7b733a313a2273223b693a37333836303b733a313a2265223b693a37353636303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a34303b613a343a7b733a313a2273223b693a37353636303b733a313a2265223b693a37373436303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a34313b613a343a7b733a313a2273223b693a37373436303b733a313a2265223b693a37393236303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a34323b613a343a7b733a313a2273223b693a37393236303b733a313a2265223b693a38313036303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d693a34333b613a343a7b733a313a2273223b693a38313036303b733a313a2265223b693a38323830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a303a22223b7d7d,'1','0','0','0','0','30','0','0');");
E_D("replace into `xiaozu_shopfast` values('885','0','0','0','','0','0','1','0','0','0','0',0x3130,0x613a31303a7b693a303b733a313a2230223b693a313b733a313a2230223b693a323b733a313a2230223b693a333b733a313a2230223b693a343b733a313a2230223b693a353b733a313a2230223b693a363b733a313a2230223b693a373b733a313a2230223b693a383b733a313a2230223b693a393b733a313a2230223b7d,'0','1','1','0','','0',0x613a32363a7b693a303b613a343a7b733a313a2273223b693a31383030303b733a313a2265223b693a31393830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a313b613a343a7b733a313a2273223b693a31393830303b733a313a2265223b693a32313630303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a323b613a343a7b733a313a2273223b693a32313630303b733a313a2265223b693a32333430303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a333b613a343a7b733a313a2273223b693a32333430303b733a313a2265223b693a32353230303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a343b613a343a7b733a313a2273223b693a32353230303b733a313a2265223b693a32373030303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a353b613a343a7b733a313a2273223b693a32373030303b733a313a2265223b693a32383830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a363b613a343a7b733a313a2273223b693a32383830303b733a313a2265223b693a33303630303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a373b613a343a7b733a313a2273223b693a33303630303b733a313a2265223b693a33323430303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a383b613a343a7b733a313a2273223b693a33323430303b733a313a2265223b693a33343230303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a393b613a343a7b733a313a2273223b693a33343230303b733a313a2265223b693a33363030303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31303b613a343a7b733a313a2273223b693a33363030303b733a313a2265223b693a33373830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31313b613a343a7b733a313a2273223b693a33373830303b733a313a2265223b693a33393630303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31323b613a343a7b733a313a2273223b693a33393630303b733a313a2265223b693a34313430303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31333b613a343a7b733a313a2273223b693a34313430303b733a313a2265223b693a34333230303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31343b613a343a7b733a313a2273223b693a34333230303b733a313a2265223b693a34353030303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31353b613a343a7b733a313a2273223b693a34353030303b733a313a2265223b693a34363830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31363b613a343a7b733a313a2273223b693a34363830303b733a313a2265223b693a34383630303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31373b613a343a7b733a313a2273223b693a34383630303b733a313a2265223b693a35303430303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31383b613a343a7b733a313a2273223b693a35303430303b733a313a2265223b693a35323230303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a31393b613a343a7b733a313a2273223b693a35323230303b733a313a2265223b693a35343030303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a32303b613a343a7b733a313a2273223b693a35343030303b733a313a2265223b693a35353830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a32313b613a343a7b733a313a2273223b693a35353830303b733a313a2265223b693a35373630303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a32323b613a343a7b733a313a2273223b693a35373630303b733a313a2265223b693a35393430303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a32333b613a343a7b733a313a2273223b693a35393430303b733a313a2265223b693a36313230303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a32343b613a343a7b733a313a2273223b693a36313230303b733a313a2265223b693a36333030303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d693a32353b613a343a7b733a313a2273223b693a36333030303b733a313a2265223b693a36343830303b733a313a2269223b733a303a22223b733a343a22636f7374223b733a313a2230223b7d7d,'0','0','0','0','0','30','0','0');");

require("../../inc/footer.php");
?>