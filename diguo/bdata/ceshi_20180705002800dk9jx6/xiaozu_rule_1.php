<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_rule`;");
E_C("CREATE TABLE `xiaozu_rule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '规则名称',
  `type` int(1) NOT NULL COMMENT '默认1，购物车总价',
  `limittype` int(1) NOT NULL COMMENT '是否指定具体时间1否2指定星期3指定小时',
  `limittime` varchar(255) NOT NULL COMMENT '具体时间：周几，或者具体时间',
  `limitcontent` text NOT NULL COMMENT '限制内容购物车总价',
  `controltype` int(1) NOT NULL COMMENT '规则类型：1赠，3折扣，2减费用',
  `controlcontent` text COMMENT '限制内容填写赠品ID，折扣率，费用等大于0',
  `starttime` int(11) NOT NULL COMMENT '开始时间',
  `endtime` int(11) NOT NULL COMMENT '结束时间',
  `status` tinyint(1) NOT NULL COMMENT '状态1有效 2无效',
  `shopid` text,
  `presenttitle` varchar(255) DEFAULT NULL COMMENT '赠品标题',
  `signid` int(20) NOT NULL,
  `cattype` int(1) NOT NULL DEFAULT '1' COMMENT '1外卖 2订台',
  `supporttype` varchar(150) NOT NULL COMMENT '支持类型：1首单有效，2在线支付有效',
  `supportplatform` varchar(150) NOT NULL COMMENT '支持平台：1pc端，2微信端，3触屏端，4客户端（安卓苹果）',
  `shopbili` int(3) DEFAULT '0' COMMENT '促销金额中平台承担的比例',
  `parentid` int(1) DEFAULT '0' COMMENT '商家设置的为0   平台设置的为1',
  `cityid` int(20) DEFAULT '0' COMMENT '促销规则的隶属分站',
  `imgurl` varchar(255) DEFAULT NULL COMMENT '活动图标地址',
  `creattime` int(11) DEFAULT NULL COMMENT '活动创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=521 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_rule` values('516',0xe6bba13230e8b5a0e98081e78ea9e585b731e4b8aa,'1','1','',0x3230,'1',NULL,'0','0','1',0x383834,0xe78ea9e585b731e4b8aa,'0','1',0x31,0x322c332c34,'0','1','410100',0x2f75706c6f61642f676f6f64732f32303137303932363231343833333939332e706e67,'1507293473');");
E_D("replace into `xiaozu_rule` values('517',0xe6bba13130e5878f323be6bba13230e5878f353be6bba13330e5878f3130,'1','1','',0x31302c32302c3330,'2',0x322c352c3130,'0','0','1',0x383834,NULL,'0','1',0x31,0x312c322c332c34,'50','1','410100',0x2f75706c6f61642f676f6f64732f32303137303932363231343834333634332e706e67,'1507338882');");
E_D("replace into `xiaozu_rule` values('519',0xe6bba13130e4baab38e68a98e4bc98e683a0,'1','2',0x332c342c35,0x3130,'3',0x3830,'0','0','1',0x383837,NULL,'0','1',0x31,0x312c322c332c34,'0','0','0',0x2f75706c6f61642f676f6f64732f32303137303932363231343835323232332e706e67,'1508901931');");

require("../../inc/footer.php");
?>