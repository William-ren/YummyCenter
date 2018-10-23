<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_address`;");
E_C("CREATE TABLE `xiaozu_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL COMMENT '完整地址：选择地址与详细地址',
  `phone` varchar(15) NOT NULL,
  `otherphone` varchar(15) DEFAULT NULL,
  `contactname` varchar(50) DEFAULT NULL,
  `default` int(1) NOT NULL DEFAULT '1',
  `areaid1` int(20) NOT NULL DEFAULT '0' COMMENT '区域1ID',
  `areaid2` int(20) NOT NULL DEFAULT '0' COMMENT '区域2ID',
  `areaid3` int(20) NOT NULL DEFAULT '0' COMMENT '区域3ID',
  `sex` smallint(1) NOT NULL DEFAULT '0' COMMENT '1时是男性，值为2时是女性，值为0时是未知',
  `bigadr` varchar(255) NOT NULL COMMENT '选择的地址',
  `detailadr` varchar(255) NOT NULL COMMENT '详细地址',
  `lat` decimal(9,6) NOT NULL COMMENT '地址坐标',
  `lng` decimal(9,6) NOT NULL COMMENT '地址坐标',
  `addtime` int(11) NOT NULL COMMENT '时间',
  `tag` int(1) DEFAULT NULL COMMENT '标签/1家2公司3学校0无',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3139 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_address` values('3135','17305',0x776d72,0xe98391e5b79ee5a4a7e5ada628e59cb0e99381e7ab99293132,0x3135323336393738343536,'',0xe5a496e58d96e4baba,'1','0','0','0','0',0xe98391e5b79ee5a4a7e5ada628e59cb0e99381e7ab9929,0x3132,'34.807581','113.541443','1507339118','1');");
E_D("replace into `xiaozu_address` values('3136','17309',0xe6aca7e998b3e6b5b7e6b88520203138363737313732383834,0xe99d92e7a780e58cbae58d97e6b996e6b187e98791e88b9128e58d97e5ae81e59bbde99985e5a4a7e98592e5ba97e4b89c2938e6a5bc3848,0x3138363737313732383834,'',0xe6aca7e6b5b7e6b885,'1','0','0','0','0',0xe99d92e7a780e58cbae58d97e6b996e6b187e98791e88b9128e58d97e5ae81e59bbde99985e5a4a7e98592e5ba97e4b89c29,0x38e6a5bc3848,'22.810354','108.363373','1508901935','1');");
E_D("replace into `xiaozu_address` values('3137','17311',0x62616279,0xe58d97e5ae81e5b882e4babae6b091e694bfe5ba9ce6b58be8af95e8afafe98081,0x3135313336353235363336,'',0xe6b58be8af95e8afafe98081,'1','0','0','0','0',0xe58d97e5ae81e5b882e4babae6b091e694bfe5ba9c,0xe6b58be8af95e8afafe98081,'22.817746','108.366370','1508981967','1');");
E_D("replace into `xiaozu_address` values('3138','17310',0x3131313131313131,0xe99d92e7a780e58cbae98791e6b4b2e8b7af28e58d97e5ae81e5b882e69599e882b2e5b180e4b89c29313031,0x3133343534363132343536,'',0x63786a,'1','0','0','0','0',0xe99d92e7a780e58cbae98791e6b4b2e8b7af28e58d97e5ae81e5b882e69599e882b2e5b180e4b89c29,0x313031,'22.809713','108.365967','1508985080','1');");

require("../../inc/footer.php");
?>