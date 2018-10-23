<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_wxreplycomment`;");
E_C("CREATE TABLE `xiaozu_wxreplycomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '微信用户uid',
  `parentid` int(11) NOT NULL COMMENT '评论who id',
  `content` varchar(500) NOT NULL COMMENT '发表主题',
  `kejian` int(11) NOT NULL DEFAULT '0' COMMENT '0所有人可见1仅对方可见',
  `addtime` varchar(20) NOT NULL COMMENT '添加时间',
  `cityname` varchar(25) NOT NULL,
  `areaname` varchar(25) NOT NULL,
  `streetname` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=207 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>