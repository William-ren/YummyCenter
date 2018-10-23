<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shopcateadv`;");
E_C("CREATE TABLE `xiaozu_shopcateadv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shoptype` varchar(20) NOT NULL COMMENT '店铺类型',
  `cateid` int(12) NOT NULL COMMENT '分类ID',
  `title` varchar(255) NOT NULL COMMENT 'titile',
  `img` text NOT NULL COMMENT '图片',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `link` varchar(255) NOT NULL COMMENT '链接',
  `addtime` int(12) NOT NULL COMMENT '添加时间',
  `orderid` int(12) NOT NULL COMMENT '排序',
  `cityid` int(12) NOT NULL COMMENT '城市ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='店铺分类广告图'");
E_D("replace into `xiaozu_shopcateadv` values('8',0x7761696d6169,'401',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6e6f746963652f32303137313032353130303630393235362e6a7067,0xe7be8ee9a39fe5a496e58d96e7be8ee9a39fe5a496e58d96e7be8ee9a39fe5a496e58d96e7be8ee9a39fe5a496e58d96,0x687474703a2f2f6d362e7761696d616972656e2e636f6d2f696e6465782e7068703f6374726c3d77787369746526616374696f6e3d73686f7073686f7726747970656c783d776d2669643d373839,'1508897171','4','410100');");
E_D("replace into `xiaozu_shopcateadv` values('3',0x7761696d6169,'250','',0x2f75706c6f61642f6e6f746963652f32303137303231373133313830393937362e706e67,'',0x687474703a2f2f6d362e7761696d616972656e2e636f6d,'1487308698','1','110108');");
E_D("replace into `xiaozu_shopcateadv` values('4',0x7761696d6169,'292','',0x2f75706c6f61642f6e6f746963652f32303137303231373133313833313534342e706e67,'',0x687474703a2f2f6d362e7761696d616972656e2e636f6d,'1487311236','2','110108');");
E_D("replace into `xiaozu_shopcateadv` values('6',0x7761696d6169,'302',0xe7899be68e92,0x2f75706c6f61642f6e6f746963652f32303137303432343130313130313934362e6a7067,0xe5a5bde59083,0x23,'1492999954','1','411600');");
E_D("replace into `xiaozu_shopcateadv` values('7',0x7761696d6169,'250',0x313233,0x2f75706c6f61642f6e6f746963652f32303137303530373034353330333338362e706e67,0x3030313233,0x687474703a2f2f6d362e7761696d616972656e2e636f6defbc89,'1494103997','1','520400');");
E_D("replace into `xiaozu_shopcateadv` values('11',0x7761696d6169,'428',0x33,0x2f75706c6f61642f6e6f746963652f32303137313032353130303633383739302e6a7067,0x35,0x34,'1508897199','0','410100');");
E_D("replace into `xiaozu_shopcateadv` values('12',0x7761696d6169,'402','',0x2f75706c6f61642f6e6f746963652f32303137313032353130303632303930362e706e67,'','','1508897183','1','410100');");
E_D("replace into `xiaozu_shopcateadv` values('15',0x6d61726b6574,'371','',0x2f75706c6f61642f6e6f746963652f32303137303932393132353735313437332e706e67,'',0x23,'1506661081','0','411500');");
E_D("replace into `xiaozu_shopcateadv` values('16',0x6d61726b6574,'371','',0x2f75706c6f61642f6e6f746963652f32303137303932393132353934373737322e706e67,'',0x23,'1506661194','0','411500');");
E_D("replace into `xiaozu_shopcateadv` values('17',0x7761696d6169,'76',0x323232323232323232,0x2f75706c6f61642f6e6f746963652f32303137313032353130323735323939312e706e67,0x333333333333333333,0x31313131313131313131,'1508898479','0','450100');");

require("../../inc/footer.php");
?>