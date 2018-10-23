<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_goodslibrarycate`;");
E_C("CREATE TABLE `xiaozu_goodslibrarycate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `orderid` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_goodslibrarycate` values('43',0xe7bb9de591b3e9b8ade88496,'13');");
E_D("replace into `xiaozu_goodslibrarycate` values('111',0xe8b49de89ebae7b1bb,'18');");
E_D("replace into `xiaozu_goodslibrarycate` values('112',0xe586b0e6b787e6b78b,'19');");
E_D("replace into `xiaozu_goodslibrarycate` values('113',0xe588bae8baab,'20');");
E_D("replace into `xiaozu_goodslibrarycate` values('54',0xe5aeb6e5baade5b8b8e5a487e88daf,'21');");
E_D("replace into `xiaozu_goodslibrarycate` values('39',0xe882afe5beb7e59fba,'0');");
E_D("replace into `xiaozu_goodslibrarycate` values('48',0xe9a5aee69699,'18');");
E_D("replace into `xiaozu_goodslibrarycate` values('49',0xe88f9ce59381,'19');");
E_D("replace into `xiaozu_goodslibrarycate` values('50',0xe58789e88f9ce7b3bbe58897,'20');");
E_D("replace into `xiaozu_goodslibrarycate` values('51',0xe9a39fe59381e99bb6e9a39f,'21');");
E_D("replace into `xiaozu_goodslibrarycate` values('106',0xe6b0b4e69e9c,'13');");
E_D("replace into `xiaozu_goodslibrarycate` values('56',0xe9b29ce88ab1e7b1bb,'1');");
E_D("replace into `xiaozu_goodslibrarycate` values('107',0xe59d9ae69e9c,'14');");
E_D("replace into `xiaozu_goodslibrarycate` values('110',0xe89b8be7b39520e78398e78499,'17');");
E_D("replace into `xiaozu_goodslibrarycate` values('109',0xe4b88be58d88e88cb6,'16');");
E_D("replace into `xiaozu_goodslibrarycate` values('108',0xe99bb6e9a39f,'15');");
E_D("replace into `xiaozu_goodslibrarycate` values('102',0xe4bebfe588a9e5ba97e7b2aee6b2b9e7b3bbe58897,'17');");
E_D("replace into `xiaozu_goodslibrarycate` values('104',0xe4bebfe588a9e5ba97e7949fe9b29ce894ace88f9c,'19');");
E_D("replace into `xiaozu_goodslibrarycate` values('114',0xe5a4a7e997b8e89fb9,'21');");
E_D("replace into `xiaozu_goodslibrarycate` values('115',0xe6b8afe5bc8fe782b9e5bf83,'22');");
E_D("replace into `xiaozu_goodslibrarycate` values('116',0xe5b08fe9be99e899be,'23');");
E_D("replace into `xiaozu_goodslibrarycate` values('117',0xe5a5b6e88cb6e5ba97e7b1bb,'21');");
E_D("replace into `xiaozu_goodslibrarycate` values('118',0x3930,'22');");

require("../../inc/footer.php");
?>