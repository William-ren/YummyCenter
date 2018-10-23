<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_order`;");
E_C("CREATE TABLE `xiaozu_order` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `dno` varchar(100) NOT NULL COMMENT '订单编号',
  `shopuid` int(20) NOT NULL COMMENT '店铺UID',
  `shopid` int(20) NOT NULL COMMENT '店铺ID',
  `shopname` varchar(100) NOT NULL COMMENT '店铺名称',
  `shopphone` varchar(20) NOT NULL COMMENT '店铺电话',
  `shopaddress` varchar(150) NOT NULL COMMENT '店铺地址',
  `buyeruid` int(20) NOT NULL COMMENT '购买用户ID，0未注册用户',
  `buyername` varchar(100) NOT NULL COMMENT '购买热名称',
  `buyeraddress` varchar(150) NOT NULL COMMENT '联系地址',
  `buyerphone` varchar(20) NOT NULL COMMENT '联系电话',
  `status` int(1) NOT NULL COMMENT '状态',
  `is_acceptorder` int(1) NOT NULL DEFAULT '0' COMMENT '确认收货 0 未确认 1已确认',
  `paytype` varchar(20) NOT NULL DEFAULT '0' COMMENT '支付类型outpay货到支付，open_acout账户余额支付，other调用paylist',
  `paystatus` int(1) NOT NULL COMMENT '支付状态1已支付',
  `trade_no` varchar(50) NOT NULL COMMENT '在线支付交易号',
  `content` varchar(255) NOT NULL COMMENT '订单备注',
  `ordertype` int(1) NOT NULL DEFAULT '0' COMMENT '订餐方式1网站，2电话，3微信，4App',
  `daycode` int(10) NOT NULL DEFAULT '0' COMMENT '当天订单序号',
  `area1` varchar(255) DEFAULT NULL COMMENT '二级地址名称',
  `area2` varchar(255) DEFAULT NULL COMMENT '三级地址名称',
  `area3` varchar(255) DEFAULT NULL,
  `cxids` varchar(100) DEFAULT NULL COMMENT '促销规则ID集',
  `cxcost` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '店铺促销优惠金额',
  `yhjcost` int(5) NOT NULL DEFAULT '0' COMMENT '优惠劵优惠金额',
  `yhjids` varchar(255) DEFAULT NULL COMMENT '使用优惠劵ID集',
  `ipaddress` varchar(255) DEFAULT NULL,
  `scoredown` int(5) NOT NULL DEFAULT '0' COMMENT '积分抵扣数',
  `is_ping` int(11) NOT NULL DEFAULT '0' COMMENT '是否评价字段 1已评完 0未评',
  `isbefore` int(1) NOT NULL DEFAULT '0' COMMENT '0:普通订单，1订台订单',
  `marketcost` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '超市商品总价',
  `marketps` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '超市配送配送',
  `shopcost` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '店铺商品总价',
  `shopps` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '店铺配送费',
  `pstype` int(1) NOT NULL DEFAULT '0' COMMENT '配送方式 0：平台1：个人',
  `bagcost` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '打包费',
  `addtime` int(12) NOT NULL DEFAULT '0' COMMENT '制造时间',
  `posttime` int(12) NOT NULL DEFAULT '0' COMMENT '配送时间',
  `passtime` int(12) NOT NULL DEFAULT '0' COMMENT '审核时间',
  `sendtime` int(12) NOT NULL DEFAULT '0' COMMENT '发货时间',
  `suretime` int(12) NOT NULL DEFAULT '0' COMMENT '完成时间',
  `allcost` decimal(10,2) DEFAULT NULL,
  `buycode` varchar(50) DEFAULT NULL COMMENT '订台码',
  `othertext` text COMMENT '其他说明',
  `is_print` int(1) NOT NULL DEFAULT '0',
  `wxstatus` int(1) NOT NULL DEFAULT '0' COMMENT '1商家确认，2商家取消',
  `shoptype` int(1) DEFAULT '0',
  `is_make` int(1) NOT NULL DEFAULT '0',
  `is_reback` smallint(1) DEFAULT '0',
  `areaids` char(255) DEFAULT NULL,
  `psuid` int(20) DEFAULT NULL,
  `psusername` varchar(100) DEFAULT NULL,
  `psemail` varchar(100) DEFAULT NULL,
  `admin_id` int(20) NOT NULL DEFAULT '0',
  `is_goshop` int(1) NOT NULL DEFAULT '0' COMMENT '0:外送 1订台/到店消费/自取',
  `paytype_name` varchar(30) DEFAULT NULL COMMENT '支付类型code',
  `taxcost` decimal(10,2) NOT NULL,
  `postdate` text,
  `pttype` int(1) NOT NULL COMMENT '1为帮我送  2为帮我买',
  `ptkg` varchar(30) NOT NULL COMMENT '货 公斤 数',
  `ptkm` varchar(30) NOT NULL COMMENT '收取货 地址 两地 距离 km',
  `allkgcost` decimal(10,2) NOT NULL COMMENT '重量价格',
  `allkmcost` decimal(10,2) NOT NULL COMMENT '距离价格',
  `farecost` decimal(10,2) DEFAULT NULL COMMENT '小费价格',
  `dnos` int(11) NOT NULL DEFAULT '0',
  `shoplat` decimal(9,6) NOT NULL DEFAULT '0.000000' COMMENT '商家lat坐标',
  `shoplng` decimal(9,6) NOT NULL DEFAULT '0.000000' COMMENT '商家lng坐标',
  `buyerlat` decimal(9,6) NOT NULL DEFAULT '0.000000' COMMENT '用户lat坐标',
  `buyerlng` decimal(9,6) NOT NULL DEFAULT '0.000000' COMMENT '用户lng坐标',
  `psbflag` int(1) DEFAULT '1',
  `movegoodscost` varchar(50) NOT NULL COMMENT '帮我送物品价值',
  `movegoodstype` varchar(100) NOT NULL COMMENT '帮我送物品类型',
  `psyoverlng` decimal(9,6) DEFAULT NULL,
  `psyoverlat` decimal(9,6) DEFAULT NULL,
  `shopdowncost` varchar(30) DEFAULT '0' COMMENT '促销金额中平台承担的部分',
  `psstatus` int(2) DEFAULT NULL,
  `picktime` int(12) DEFAULT NULL,
  `addpscost` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '附加配送费',
  `is_cui` int(2) DEFAULT '0' COMMENT '是否被催单 0否 1是',
  `maketime` int(12) DEFAULT NULL COMMENT '商家接单时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32912 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_order` values('32903',0x3135303733333931323831333636,'17302','884',0xe58589e59088e69797e888b0e5ba97,0x3135323336393738343531,0xe6b2b3e58d97e79c81e794b5e5ad90e59586e58aa1e4baa7e4b89ae59bad,'17305',0xe5a496e58d96e4baba,0xe98391e5b79ee5a4a7e5ada628e59cb0e99381e7ab99293132,0x3135323336393738343536,'3','1',0x31,'1','','','5','1',NULL,NULL,NULL,0x3531372c353136,'2.00','0','',0x3132372e302e302e31,'0','1','0','0.00','0.00','24.00','3.00','1','0.00','1507339128','1507340928','1507339128','1507339376','1507339378','27.00',0x666132373839,'','0','0','0','1','0','',NULL,NULL,NULL,'410100','0',0x6f70656e5f61636f7574,'0.00',0x30393a30312d30393a3331,'0','','','0.00','0.00',NULL,'0','34.802330','113.543806','34.807581','113.541443','1','','',NULL,NULL,0x31,NULL,NULL,'2.00','0','1507339128');");
E_D("replace into `xiaozu_order` values('32904',0x3135303839303139333935343235,'17302','884',0xe58589e59088e69797e888b0e5ba97,0x3135323336393738343531,0xe58d97e5ae81e5b882,'17309',0xe6aca7e6b5b7e6b885,0xe99d92e7a780e58cbae58d97e6b996e6b187e98791e88b9128e58d97e5ae81e59bbde99985e5a4a7e98592e5ba97e4b89c2938e6a5bc3848,0x3138363737313732383834,'0','0',0x31,'0','','','3','1',NULL,NULL,NULL,0x3531372c353136,'5.00','0','',0x3131332e31362e36302e323438,'0','0','0','0.00','0.00','24.00','3.00','1','0.00','1508901939','1508903739','1508901939','0','0','22.00',0x333337316437,'','0','0','0','1','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x31313a30312d31313a3331,'0','','','0.00','0.00',NULL,'0','22.810427','108.363075','22.810354','108.363373','1','','',NULL,NULL,0x322e35,NULL,NULL,'0.00','0','1508901939');");
E_D("replace into `xiaozu_order` values('32905',0x3135303839303237313031393438,'17308','887',0xe6b187e699afe88b91,0x3135383333363435343131,0x6875696a79,'0',0x636f6f6c,0xe59889e5a3abe691a9e6a0b9e59bbde99985313233,0x3133333435353233323131,'1','0','0','0','',0x34,'7','1',NULL,NULL,NULL,0x353139,'12.20','0','',0x3131332e31362e36302e323438,'0','0','0','0.00','0.00','61.00','0.00','1','0.00','1508902710','1508934780','1508902710','0','0','48.80',0x393439353733,'','0','0','1','1','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x32303a33332d32313a3033,'0','','','0.00','0.00',NULL,'0','22.811658','108.364979','22.825769','108.318287','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0','1508902710');");
E_D("replace into `xiaozu_order` values('32906',0x3135303839383231333337393934,'17306','885',0x74657374,0x3133333737333135333534,0x3133333737333135333534,'17311',0xe6b58be8af95e8afafe98081,0xe58d97e5ae81e5b882e4babae6b091e694bfe5ba9ce6b58be8af95e8afafe98081,0x3135313336353235363336,'0','0',0x31,'0','','','3','1',NULL,NULL,NULL,'','0.00','0','',0x3137312e31352e3135382e3637,'0','0','0','0.00','0.00','30.00','0.00','1','0.00','1508982133','1508982133','1508982133','0','0','30.00',0x326463366234,'','0','0','0','0','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x30393a33302d31303a3030,'0','','','0.00','0.00',NULL,'0','22.817746','108.366370','22.817746','108.366370','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0',NULL);");
E_D("replace into `xiaozu_order` values('32907',0x3135303839383231383638383838,'17306','885',0x74657374,0x3133333737333135333534,0x3133333737333135333534,'17311',0xe6b58be8af95e8afafe98081,0xe58d97e5ae81e5b882e4babae6b091e694bfe5ba9ce6b58be8af95e8afafe98081,0x3135313336353235363336,'5','0',0x31,'0','','','3','2',NULL,NULL,NULL,'','0.00','0','',0x3137312e31352e3135382e3637,'0','0','0','0.00','0.00','30.00','0.00','1','0.00','1508982186','1508982186','1508982186','0','0','30.00',0x663431323137,'','0','0','0','0','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x30393a33302d31303a3030,'0','','','0.00','0.00',NULL,'0','22.817746','108.366370','22.817746','108.366370','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0',NULL);");
E_D("replace into `xiaozu_order` values('32908',0x3135303839383530383835333537,'17308','887',0xe6b187e699afe88b91,0x3135383333363435343131,0x6875696a79,'17310',0x63786a,0xe99d92e7a780e58cbae98791e6b4b2e8b7af28e58d97e5ae81e5b882e69599e882b2e5b180e4b89c29313031,0x3133343534363132343536,'4','0',0x31,'0','','','3','1',NULL,NULL,NULL,0x353139,'5.00','0','',0x3131332e31362e35362e313635,'0','0','0','0.00','0.00','25.00','0.00','1','0.00','1508985088','1508985088','1508985088','0','0','20.00',0x326662663131,'','0','0','1','1','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x31303a30332d31303a3333,'0','','','0.00','0.00',NULL,'0','22.811658','108.364979','22.809713','108.365967','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0','1508985088');");
E_D("replace into `xiaozu_order` values('32909',0x3135303839383930373938333138,'17308','887',0xe6b187e699afe88b91,0x3135383333363435343131,0x6875696a79,'17310',0x63786a,0xe99d92e7a780e58cbae98791e6b4b2e8b7af28e58d97e5ae81e5b882e69599e882b2e5b180e4b89c29313031,0x3133343534363132343536,'4','0',0x31,'0','','','3','2',NULL,NULL,NULL,0x353139,'4.40','0','',0x3131332e31362e35362e313635,'0','0','0','0.00','0.00','22.00','0.00','1','0.00','1508989079','1508989079','1508989079','0','0','17.60',0x366630386332,'','0','0','1','1','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x31313a33332d31323a3033,'0','','','0.00','0.00',NULL,'0','22.811658','108.364979','22.809713','108.365967','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0','1508989079');");
E_D("replace into `xiaozu_order` values('32910',0x3135303930303932383433353333,'17306','885',0x74657374,0x3133333737333135333534,0x3133333737333135333534,'17311',0xe6b58be8af95e8afafe98081,0xe58d97e5ae81e5b882e4babae6b091e694bfe5ba9ce6b58be8af95e8afafe98081,0x3135313336353235363336,'0','0',0x31,'0','','','3','3',NULL,NULL,NULL,'','0.00','0','',0x3137312e31352e3135382e3637,'0','0','0','0.00','0.00','15.00','0.00','1','0.00','1509009284','1509009284','1509009284','0','0','15.00',0x393433393965,'','0','0','0','1','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x31373a30302d31373a3330,'0','','','0.00','0.00',NULL,'0','22.817746','108.366370','22.817746','108.366370','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0','1509009284');");
E_D("replace into `xiaozu_order` values('32911',0x3135303930303933333135353430,'17313','888',0x2e2e2e2e2e,0x3133333737333135333536,0x67e9878ce8848ae88289,'17310',0x63786a,0xe99d92e7a780e58cbae98791e6b4b2e8b7af28e58d97e5ae81e5b882e69599e882b2e5b180e4b89c29313031,0x3133343534363132343536,'0','0',0x31,'0','','','3','1',NULL,NULL,NULL,'','0.00','0','',0x3131332e31362e35362e313635,'0','0','0','0.00','0.00','24.00','0.00','1','0.00','1509009331','1509009931','1509009331','0','0','24.00',0x666466643139,'','0','0','1','1','0','',NULL,NULL,NULL,'450100','0',NULL,'0.00',0x31373a30302d31373a3330,'0','','','0.00','0.00',NULL,'0','22.823674','108.320358','22.809713','108.365967','1','','',NULL,NULL,'0',NULL,NULL,'0.00','0','1509009331');");

require("../../inc/footer.php");
?>