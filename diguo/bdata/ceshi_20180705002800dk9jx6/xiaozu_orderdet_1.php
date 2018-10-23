<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_orderdet`;");
E_C("CREATE TABLE `xiaozu_orderdet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `order_id` int(20) NOT NULL,
  `goodsid` int(20) NOT NULL,
  `goodsname` varchar(150) NOT NULL,
  `goodscost` decimal(9,2) NOT NULL,
  `goodscount` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `shopid` int(5) NOT NULL,
  `is_send` int(11) NOT NULL DEFAULT '0' COMMENT '是否是赠品 1赠品',
  `product_id` int(20) NOT NULL DEFAULT '0',
  `have_det` int(1) NOT NULL DEFAULT '0',
  `typeid` varchar(100) DEFAULT NULL,
  `goodsattr` varchar(25) NOT NULL DEFAULT '' COMMENT '商品单位 ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27219 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_orderdet` values('27200','32903','7206',0xe58789e68b8ce69ca8e880b3,'12.00','2','1','884','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27201','32903','516',0xe78ea9e585b731e4b8aa,'0.00','1','1','884','1','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27202','32904','7206',0xe58789e68b8ce69ca8e880b3,'12.00','2','0','884','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27203','32904','516',0xe78ea9e585b731e4b8aa,'0.00','1','0','884','1','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27204','32905','7220',0xe680a1e5ae9d,'5.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27205','32905','7217',0xe69e9ce7b292e6a999efbc88e5a4a7efbc89,'12.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27206','32905','7218',0xe9b29ce6a6a8e8b186e6b586,'5.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27207','32905','7219',0xe5869ce5a4abe5b1b1e6b389,'5.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27208','32905','7225',0xe6b0b4e69e9ce586b0e6b787e6b78befbc88e58d95e4b8aaefbc89,'30.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27209','32905','7227',0x313233,'4.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27210','32906','7211',0xe7bd97e9a9ace79bbee7898c,'15.00','2','0','885','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27211','32907','7210',0xe89493e8b68ae88e93e985a5e9a5bc,'15.00','2','0','885','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27212','32908','7221',0xe58aa0e5a49ae5ae9d,'5.00','3','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27213','32908','7220',0xe680a1e5ae9d,'5.00','2','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27214','32909','7221',0xe58aa0e5a49ae5ae9d,'5.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27215','32909','7220',0xe680a1e5ae9d,'5.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27216','32909','7217',0xe69e9ce7b292e6a999efbc88e5a4a7efbc89,'12.00','1','0','887','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27217','32910','7210',0xe89493e8b68ae88e93e985a5e9a5bc,'15.00','1','0','885','0','0','0',NULL,'');");
E_D("replace into `xiaozu_orderdet` values('27218','32911','7235',0xe795aae88c8434303067,'8.00','3','0','888','0','0','0',NULL,'');");

require("../../inc/footer.php");
?>