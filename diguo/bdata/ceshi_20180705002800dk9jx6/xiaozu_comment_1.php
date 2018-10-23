<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_comment`;");
E_C("CREATE TABLE `xiaozu_comment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orderid` int(20) NOT NULL,
  `orderdetid` int(20) NOT NULL,
  `shopid` int(20) NOT NULL,
  `goodsid` int(20) NOT NULL,
  `uid` int(20) NOT NULL DEFAULT '0',
  `content` varchar(250) DEFAULT NULL,
  `addtime` int(12) NOT NULL DEFAULT '0',
  `replycontent` varchar(250) DEFAULT NULL,
  `replytime` int(11) NOT NULL DEFAULT '0',
  `point` int(1) NOT NULL COMMENT '评分',
  `is_show` int(1) NOT NULL DEFAULT '0' COMMENT '0展示，1不展示',
  `virtualname` varchar(50) DEFAULT NULL COMMENT ' 新增 虚拟评论人名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1125 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_comment` values('1123','32903','27200','884','7206','17305',0xe5be88e5a5bde59083,'1507339396',NULL,'0','5','0',NULL);");
E_D("replace into `xiaozu_comment` values('1124','32903','27201','884','516','17305',0xe5be88e5a5bde78ea9,'1507339396',0x31,'1508901292','5','0',NULL);");

require("../../inc/footer.php");
?>