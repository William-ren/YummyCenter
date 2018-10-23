<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_cxruleset`;");
E_C("CREATE TABLE `xiaozu_cxruleset` (
  `id` int(2) NOT NULL,
  `name` text COMMENT '活动类型',
  `imgurl` varchar(255) DEFAULT NULL COMMENT '活动图标地址',
  `supportorder` int(2) DEFAULT '1' COMMENT '支持订单类型  1支持全部订单 2只支持在线支付订单',
  `supportplat` varchar(50) DEFAULT '1,2,3,4' COMMENT '支持平台 1pc 2微信 3触屏 4app',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_cxruleset` values('1',0xe6bba1e8b5a0e6b4bbe58aa8,0x2f75706c6f61642f676f6f64732f32303137303932363231343833333939332e706e67,'1',0x322c332c34);");
E_D("replace into `xiaozu_cxruleset` values('2',0xe6bba1e5878fe6b4bbe58aa8,0x2f75706c6f61642f676f6f64732f32303137303932363231343834333634332e706e67,'1',0x312c322c332c34);");
E_D("replace into `xiaozu_cxruleset` values('3',0xe68a98e689a3e6b4bbe58aa8,0x2f75706c6f61642f676f6f64732f32303137303932363231343835323232332e706e67,'1',0x312c322c332c34);");
E_D("replace into `xiaozu_cxruleset` values('4',0xe5858de9858de98081e8b4b9,0x2f75706c6f61642f676f6f64732f32303137303932363231343930363635322e706e67,'1',0x312c322c332c34);");
E_D("replace into `xiaozu_cxruleset` values('5',0xe9a696e58d95e7ab8be5878f,0x2f75706c6f61642f676f6f64732f32303137303932363231343931353531382e706e67,'1',0x312c322c332c34);");

require("../../inc/footer.php");
?>