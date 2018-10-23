<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_wxcomment`;");
E_C("CREATE TABLE `xiaozu_wxcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '微信用户uid',
  `usercontent` varchar(500) NOT NULL COMMENT '发表主题',
  `userimg` varchar(500) NOT NULL COMMENT '图片集',
  `addtime` varchar(20) NOT NULL COMMENT '添加时间',
  `cityname` varchar(25) NOT NULL,
  `areaname` varchar(25) NOT NULL,
  `streetname` varchar(25) NOT NULL,
  `is_top` int(11) NOT NULL DEFAULT '0',
  `is_show` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=773 DEFAULT CHARSET=utf8 COMMENT='微信一起说主表'");
E_D("replace into `xiaozu_wxcomment` values('772','17310',0x61736464666667676768686a6b,'',0x31353038393835353734,'','','','0','1');");

require("../../inc/footer.php");
?>