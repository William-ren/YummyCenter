<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_goodsgg`;");
E_C("CREATE TABLE `xiaozu_goodsgg` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '规格id',
  `shoptype` int(1) NOT NULL DEFAULT '0' COMMENT '店铺类型  0餐厅  1超市',
  `name` varchar(100) NOT NULL COMMENT '规格名称/规格值得',
  `orderid` int(5) NOT NULL DEFAULT '999' COMMENT '排序ID',
  `parent_id` int(20) NOT NULL DEFAULT '0' COMMENT '0表示规格名称    1表示规格值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_goodsgg` values('156','0',0x363736,'7676','0');");
E_D("replace into `xiaozu_goodsgg` values('153','1',0xe9a29ce889b2,'5','0');");
E_D("replace into `xiaozu_goodsgg` values('154','1',0xe7bbbfe889b2,'0','153');");
E_D("replace into `xiaozu_goodsgg` values('155','1',0xe7baa2e889b2,'0','153');");
E_D("replace into `xiaozu_goodsgg` values('149','0',0xe4b880e782b9e8bea3e983bde4b88de8a681e79a84,'4','145');");
E_D("replace into `xiaozu_goodsgg` values('148','0',0xe58faae8a681e4b880e782b9e782b9e8bea3,'3','145');");
E_D("replace into `xiaozu_goodsgg` values('147','0',0xe8bea3e6a492e98082e4b8ade5b0b1e5a5bde4ba86,'0','145');");
E_D("replace into `xiaozu_goodsgg` values('146','0',0xe8a681e78ba0e8bea3e78ba0e8bea3e79a84e591a6,'1','145');");
E_D("replace into `xiaozu_goodsgg` values('145','0',0xe58fa3e591b3,'1','0');");
E_D("replace into `xiaozu_goodsgg` values('99','0',0xe8bea3,'1','0');");
E_D("replace into `xiaozu_goodsgg` values('100','0',0xe5be88e8bea3,'0','99');");
E_D("replace into `xiaozu_goodsgg` values('101','0',0xe99d9ee5b8b8e8bea3,'1','99');");
E_D("replace into `xiaozu_goodsgg` values('103','0',0xe587a0e58886e7869f,'0','0');");
E_D("replace into `xiaozu_goodsgg` values('104','0',0x35,'0','103');");
E_D("replace into `xiaozu_goodsgg` values('105','0',0x38,'0','103');");
E_D("replace into `xiaozu_goodsgg` values('106','0',0x3130,'0','103');");
E_D("replace into `xiaozu_goodsgg` values('117','0',0xe4b8ade4bbbd,'0','114');");
E_D("replace into `xiaozu_goodsgg` values('159','0',0x383838,'0','156');");
E_D("replace into `xiaozu_goodsgg` values('116','0',0xe5b08fe4bbbd,'0','114');");
E_D("replace into `xiaozu_goodsgg` values('115','0',0xe5a4a7e4bbbd,'0','114');");
E_D("replace into `xiaozu_goodsgg` values('114','0',0xe4bbbd,'1','0');");
E_D("replace into `xiaozu_goodsgg` values('113','0',0xe9babbe8bea3,'0','99');");
E_D("replace into `xiaozu_goodsgg` values('157','0',0x353435,'0','156');");
E_D("replace into `xiaozu_goodsgg` values('158','0',0x3736373637,'0','156');");

require("../../inc/footer.php");
?>