<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_wxmenu`;");
E_C("CREATE TABLE `xiaozu_wxmenu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL COMMENT 'view表示连接，click事件',
  `name` varchar(255) NOT NULL COMMENT 'an钮事件名称',
  `values` text COMMENT '当type为view时跳转连接，当click为则为内容',
  `parent_id` int(20) NOT NULL DEFAULT '0' COMMENT '0一级菜单',
  `sort` int(3) NOT NULL,
  `msgtype` int(1) NOT NULL DEFAULT '0' COMMENT '0:连接1文本2图文',
  `code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_wxmenu` values('16',0x76696577,0xe8bf9be585a5e59586e59f8e,0x613a323a7b733a373a226c6a5f6c696e6b223b733a32323a22687474703a2f2f79777a2e67786e6e6a7a742e636f6d223b733a383a226c6a5f7469746c65223b733a31323a22e8bf9be585a5e59586e59f8e223b7d,'0','12','0',0x61636f756e74);");

require("../../inc/footer.php");
?>