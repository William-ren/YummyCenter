<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_product`;");
E_C("CREATE TABLE `xiaozu_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '子商品ID',
  `goodsid` int(20) NOT NULL COMMENT '主商品ID',
  `goodsname` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性描述',
  `attrids` varchar(255) NOT NULL COMMENT '包含规格值ID集，分割',
  `stock` int(5) NOT NULL DEFAULT '0' COMMENT '库存',
  `cost` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '销售价格',
  `shopid` int(20) NOT NULL DEFAULT '0',
  `bagcost` decimal(5,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1971 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>