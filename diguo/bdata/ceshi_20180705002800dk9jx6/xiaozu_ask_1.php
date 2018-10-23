<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_ask`;");
E_C("CREATE TABLE `xiaozu_ask` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `shopid` int(20) NOT NULL DEFAULT '0' COMMENT '当为网站留言时此值为0',
  `content` varchar(250) NOT NULL,
  `addtime` int(11) NOT NULL,
  `typeid` int(2) NOT NULL,
  `replycontent` varchar(250) DEFAULT NULL,
  `replytime` int(11) NOT NULL DEFAULT '0',
  `replyname` varchar(255) DEFAULT NULL COMMENT '回复者',
  `is_show` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>