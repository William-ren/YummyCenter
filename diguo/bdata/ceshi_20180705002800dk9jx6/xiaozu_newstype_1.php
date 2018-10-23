<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_newstype`;");
E_C("CREATE TABLE `xiaozu_newstype` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '目录类型：1文章目录 2包含下级目录 ',
  `parent_id` int(20) NOT NULL DEFAULT '0' COMMENT '上级目录ID，0： 顶级目录',
  `displaytype` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：一个文章显示一个页面，2表示此目录文章先到到一个文章里',
  `orderid` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_newstype` values('3',0xe696b0e6898be585a5e997a8,'1','0','1','3');");
E_D("replace into `xiaozu_newstype` values('4',0xe789a9e6b581e5928ce594aee5908e,'1','0','1','4');");
E_D("replace into `xiaozu_newstype` values('12',0xe5b8b8e8a781e997aee9a298,'1','11','1','3');");
E_D("replace into `xiaozu_newstype` values('15',0xe585b3e4ba8ee68891e4bbac,'1','0','1','2');");

require("../../inc/footer.php");
?>