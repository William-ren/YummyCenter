<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_gift`;");
E_C("CREATE TABLE `xiaozu_gift` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `market_cost` decimal(10,2) NOT NULL,
  `score` int(7) NOT NULL DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `typeid` int(10) NOT NULL DEFAULT '0',
  `sell_count` int(5) NOT NULL DEFAULT '0' COMMENT '销售数量',
  `stock` int(6) NOT NULL DEFAULT '0' COMMENT '库存',
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_gift` values('14','3999.00','399',0xe7be8ee59bbe7438,0xe7be8ee59bbee6898be69cba,'6','11','0',0x2f75706c6f61642f676f6f64732f32303137303431323134353732363732382e6a7067);");
E_D("replace into `xiaozu_gift` values('10','3600.00','360',0xe6898be69cba,0xe5b0b1e680a5e680a5e680a5e680a5e680a5e680a5e680a5e680a5e680a5,'1','4','0',0x2f75706c6f61642f676f6f64732f32303137313032363130333531343130312e706e67);");

require("../../inc/footer.php");
?>