<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_helpbuybq`;");
E_C("CREATE TABLE `xiaozu_helpbuybq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '标签名字',
  `parent_id` int(10) NOT NULL DEFAULT '0' COMMENT '所属对应类型的id',
  `orderid` int(10) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_helpbuybq` values('4',0xe5b89de8b1aa,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('5',0xe88bb9e69e9c,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('6',0xe9a699e89589,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('7',0xe99b80e5b7a2,'4','1');");
E_D("replace into `xiaozu_helpbuybq` values('8',0xe78999e588b7,'5','1');");
E_D("replace into `xiaozu_helpbuybq` values('9',0xe6849fe58692e781b5,'6','1');");
E_D("replace into `xiaozu_helpbuybq` values('10',0xe8a5bfe7939ce99c9c,'6','1');");
E_D("replace into `xiaozu_helpbuybq` values('74',0xe7939ce5ad90,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('24',0xe9bb84e9b9a4e6a5bc,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('25',0xe69e9de6b19f,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('26',0xe88c85e58fb0,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('27',0xe88081e69d91e995bf,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('28',0xe7baa2e69797e6b8a0,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('29',0xe588a9e7bea4,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('30',0xe6b19fe5b08fe799bd,'2','1');");
E_D("replace into `xiaozu_helpbuybq` values('35',0xe891a1e89084,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('36',0xe78c95e78cb4e6a183,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('37',0xe79498e89497,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('38',0xe6a998e5ad90,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('39',0xe8a5bfe7939c,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('40',0xe6a2a8e5ad90,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('41',0xe9bb84e6a183,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('42',0xe696a4,'3','1');");
E_D("replace into `xiaozu_helpbuybq` values('86',0xe6b497e58f91e6b0b4,'5',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('85',0xe4b8aa,'3',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('84',0xe4b8a4,'3',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('47',0xe68bbfe99381,'4','1');");
E_D("replace into `xiaozu_helpbuybq` values('48',0xe78999e8868f,'5','1');");
E_D("replace into `xiaozu_helpbuybq` values('49',0xe79aaee7828ee5b9b3,'6','1');");
E_D("replace into `xiaozu_helpbuybq` values('50',0xe6b3bbe7ab8be5819c,'6','1');");
E_D("replace into `xiaozu_helpbuybq` values('73',0xe6b2b9e69da1,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('96',0xe98081e8bebee5a4a7e5a3b0e98193,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('87',0xe6b290e6b5b4e99cb2,'5',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('83',0xe79b92,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('82',0xe4bbbd,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('81',0xe4b8a4,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('80',0xe696a4,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('88',0xe9a699e79a82,'5',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('89',0xe79b92,'5',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('90',0xe793b6,'5',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('91',0xe5b08fe69fb4e883a1,'6',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('92',0xe591a8e9bb91e9b8ad,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('94',0xe7899be5a5b62fe58c85,'1',NULL);");
E_D("replace into `xiaozu_helpbuybq` values('95',0xe59084e7a78de8bea3e69da120e8bea3e4b88de6adbbe4bda020e4b99fe8a68120e4b88ae781abe99abee58f97e4bda0e99c80e8a681e4b880e793b6e78e8be88081e59089,'1',NULL);");

require("../../inc/footer.php");
?>