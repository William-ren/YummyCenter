<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shop`;");
E_C("CREATE TABLE `xiaozu_shop` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL COMMENT '用户ID',
  `shortname` varchar(10) DEFAULT NULL COMMENT '店铺短地址',
  `shopname` varchar(150) NOT NULL COMMENT '店铺名称',
  `shoplogo` varchar(150) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL COMMENT '联系电话',
  `address` varchar(150) DEFAULT NULL COMMENT '联系地址',
  `point` int(10) NOT NULL DEFAULT '5' COMMENT '评分',
  `cx_info` text COMMENT '促销信息',
  `intr_info` text COMMENT '介绍信息',
  `notice_info` text COMMENT '公告信息',
  `starttime` varchar(100) DEFAULT NULL COMMENT '营业时间',
  `is_open` int(1) NOT NULL DEFAULT '0' COMMENT '是否营业',
  `is_onlinepay` int(1) NOT NULL DEFAULT '1' COMMENT '是否开启在线支付：默认为1开启，0不开启',
  `is_daopay` int(1) NOT NULL DEFAULT '1' COMMENT '是否开启到付：默认为1开启，0不开启',
  `is_pass` int(1) NOT NULL DEFAULT '0' COMMENT '是否通过审核',
  `is_recom` int(1) NOT NULL DEFAULT '0' COMMENT '是否是推荐店铺',
  `maphone` varchar(12) DEFAULT NULL,
  `addtime` int(12) DEFAULT NULL,
  `pointcount` int(5) NOT NULL DEFAULT '1',
  `psservicepoint` int(11) NOT NULL DEFAULT '5' COMMENT '配送服务评分',
  `psservicepointcount` int(11) NOT NULL DEFAULT '1' COMMENT '配送服务评论次数',
  `yjin` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '佣金比例当为0时调用网站设置',
  `lat` decimal(9,6) NOT NULL DEFAULT '0.000000' COMMENT '地图左坐标',
  `lng` decimal(9,6) NOT NULL DEFAULT '0.000000' COMMENT '地图右坐标',
  `shopbacklogo` varchar(255) DEFAULT NULL COMMENT '商家默认背景图片',
  `sort` int(20) NOT NULL DEFAULT '999' COMMENT '排序',
  `email` varchar(50) DEFAULT NULL,
  `areaid1` int(20) NOT NULL DEFAULT '0',
  `areaid2` int(20) NOT NULL DEFAULT '0',
  `areaid3` int(20) NOT NULL DEFAULT '0',
  `otherlink` varchar(255) DEFAULT NULL COMMENT '其他链接地址',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `IMEI` varchar(255) DEFAULT NULL,
  `shoptype` int(2) NOT NULL DEFAULT '0',
  `noticetype` varchar(100) DEFAULT NULL,
  `machine_code` varchar(255) DEFAULT NULL COMMENT '打印2机器码',
  `mKey` varchar(255) DEFAULT NULL COMMENT '打印2打印密匙',
  `pradiusa` int(1) NOT NULL DEFAULT '3',
  `admin_id` int(20) NOT NULL DEFAULT '0',
  `sellcount` int(10) DEFAULT '0',
  `goodattrdefault` varchar(25) NOT NULL,
  `ruzhutype` int(11) NOT NULL DEFAULT '0',
  `qiyeimg` varchar(150) NOT NULL,
  `zmimg` varchar(150) NOT NULL,
  `fmimg` varchar(150) NOT NULL,
  `foodtongimg` varchar(150) DEFAULT NULL,
  `jkzimg` varchar(150) DEFAULT NULL,
  `sqimg` varchar(150) DEFAULT NULL,
  `qtshuoming` varchar(255) DEFAULT NULL,
  `wxhui_ewmurl` text NOT NULL COMMENT '闪惠制作二维码url',
  `goodlistmodule` int(1) NOT NULL DEFAULT '0' COMMENT '商品列表模板默认为0   ',
  `shoplicense` varchar(150) NOT NULL COMMENT '营业执照',
  `virtualsellcounts` int(11) DEFAULT NULL COMMENT '店铺虚拟总销量',
  `psblink` varchar(50) NOT NULL DEFAULT '' COMMENT '配送宝链接',
  `psbaccid` varchar(50) NOT NULL DEFAULT '' COMMENT '配送宝商家id',
  `psbkey` varchar(50) NOT NULL DEFAULT '' COMMENT '配送宝key',
  `psbcode` varchar(50) NOT NULL DEFAULT '' COMMENT '配送宝code',
  `psbversion` varchar(50) NOT NULL DEFAULT '' COMMENT '配送宝版本',
  `is_selfsitecx` int(1) DEFAULT '0' COMMENT '是否允许店铺自行设置促销规则  1允许  0不允许',
  `isforyou` int(2) NOT NULL DEFAULT '0' COMMENT '是否显示在优选商家里面 1是  0否',
  `is_autopreceipt` int(2) DEFAULT '0' COMMENT '是否开启自动接单  0未开启 1开启',
  `ordercount` int(11) DEFAULT NULL COMMENT '店铺订单总数 订单完成该值自动增加',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=889 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shop` values('884','17302','',0xe58589e59088e69797e888b0e5ba97,NULL,0x3135323336393738343531,0xe58d97e5ae81e5b882,'10',NULL,0xe6aca2e8bf8ee58589e4b8b4e58589e59088e69797e888b0e5ba97efbc81efbc81efbc81,0xe6aca2e8bf8ee58589e4b8b4e58589e59088e69797e888b0e5ba97efbc81efbc81efbc81,0x30313a30312d32333a3030,'1','0','0','1','1',0x3135323336393738343531,'1507338025','2','10','2','10.00','22.810427','108.363075',NULL,'999',0x73686f704071712e636f6d,'0','0','0','','1538874025','','0',NULL,NULL,NULL,'10','450100','6',0xe4bbbd,'0','','','',NULL,NULL,NULL,NULL,'','0','',NULL,'','','','','','0','1','1',NULL);");
E_D("replace into `xiaozu_shop` values('885','17306','',0x74657374,0x2f75706c6f61642f757365722f32303137313032333131323332393634342e676966,0x3133333737333135333534,0x3133333737333135333534,'5',NULL,0x746573743c6272202f3e,0x31323334,0x30353a30302d31383a3030,'1','0','0','1','1',0x3133333737333135333534,'1508722942','1','5','1','10.00','22.817746','108.366370',NULL,'999',0x334071712e636f6d,'0','0','0','','1540258942','','0',NULL,NULL,NULL,'10','450100','0',0x71,'0','','','',NULL,NULL,NULL,NULL,'','0','',NULL,'','','','','','0','0','1',NULL);");
E_D("replace into `xiaozu_shop` values('886','17307','',0x746573743031,0x2f75706c6f61642f757365722f32303137313032353130323334323333322e6a7067,0x3233333335323232,0x7465737474657374,'5',NULL,NULL,NULL,0x30333a30302d31393a3030,'1','0','0','1','1',0x3133333737333135333535,'1508729479','1','5','1','10.00','22.824158','108.320540',NULL,'999',0x31403136332e636f6d,'0','0','0','','1540265479','','1',NULL,NULL,NULL,'10','450100','0',0x32,'0','','','',NULL,NULL,NULL,NULL,'','0','',NULL,'','','','','','0','0','0',NULL);");
E_D("replace into `xiaozu_shop` values('887','17308','',0xe6b187e699afe88b91,0x2f75706c6f61642f757365722f32303137313032353130353234323637382e676966,0x3135383333363435343131,0x6875696a79,'5',NULL,0xe5ba97e993bae4bb8be7bb8d3c6272202f3e,0xe5ba97e993bae585ace5918a7728efbe9fd094efbe9f2977,0x30323a30332d32323a3030,'1','0','0','1','1',0x3135383735323635343132,'1508899918','1','5','1','10.00','22.811658','108.364979',NULL,'999',0x687569403136332e636f6d,'0','0','0','','1540435918','','1',NULL,NULL,NULL,'4','450100','0',0x6765,'0','','','',NULL,NULL,NULL,NULL,'','0','',NULL,'','','','','','0','0','1',NULL);");
E_D("replace into `xiaozu_shop` values('888','17313','',0x2e2e2e2e2e,0x2f75706c6f61642f757365722f32303137313032363134353833323430332e676966,0x3133333737333135333536,0x67e9878ce8848ae88289,'5',NULL,0x636f6f6ce79a84e5ba97e993bae4bb8be7bb8d,0x636f6f6ce79a84e5ba97e993bae585ace5918a,0x30383a30302d31343a33307c31353a30302d31393a3030,'1','0','0','1','1',0x3133333737333135333536,'1508985525','1','5','1','10.00','22.823674','108.320358',NULL,'999',0x353336323534403136332e636f6d,'0','0','0','','1540521525','','1',NULL,NULL,NULL,'300','450100','0',0xe58fb7,'0','','','',NULL,NULL,NULL,NULL,'','0',0x2f75706c6f61642f757365722f32303137313032363130333831363634332e6a7067,NULL,'','','','','','0','0','1',NULL);");

require("../../inc/footer.php");
?>