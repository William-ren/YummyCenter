<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shoptype`;");
E_C("CREATE TABLE `xiaozu_shoptype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL COMMENT '分类名',
  `type` varchar(100) DEFAULT NULL COMMENT 'checkbox多选，radio单选，img图片，input输入框',
  `parent_id` int(20) NOT NULL DEFAULT '0' COMMENT '0表示导航明，1值',
  `cattype` int(1) NOT NULL DEFAULT '1' COMMENT '1外卖2订台3其他',
  `is_search` int(1) NOT NULL DEFAULT '0' COMMENT '0不是搜索关键字1搜索关键字',
  `is_main` int(1) NOT NULL DEFAULT '0' COMMENT '是否展示在店铺列表 0否1是',
  `is_admin` int(1) NOT NULL DEFAULT '0' COMMENT '设置类型0店铺1后台',
  `instro` varchar(255) DEFAULT NULL COMMENT '简单介绍',
  `orderid` int(10) NOT NULL DEFAULT '0' COMMENT '排序ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=429 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shoptype` values('76',0x32,'0','67','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('75',0xe7be8ee9a39fe5a496e58d96,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('58',0x3630e58886e9929f,'0','57','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('270',0xe7b4a0e88f9c,'0','269','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('148',0x3135,'0','100','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('199',0xe59c9fe8b1aae9a686,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('68',0x31,'0','67','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('150',0x3434,'0','149','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('73',0xe98081e88dafe4b88ae997a8,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('72',0xe7bd91e7ab99e4b893e98081,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('84',0x31,'0','83','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('85',0x32,'0','83','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('90',0x61,'0','89','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('91',0x62,'0','89','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('92',0x63,'0','89','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('93',0x64,'0','89','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('95',0xe69d82e8b4a7e993ba,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('96',0xe6b0b4e69e9ce5ba97,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('146',0x3132,'0','100','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('102',0xe5b9b2e6b497e5ba97,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('104',0xe5a4a7e59e8be7bbbce59088e7949fe6b4bbe8b685e5b882,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('105',0xe4bebfe588a9e5ba97,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('106',0xe5aeb6e694bf,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('107',0xe7bbb4e4bfaee782b9,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('108',0xe4bf9de6b481,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('109',0xe5b08fe697b6e5b7a5,'0','94','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('110',0xe9b29ce88ab1e89b8be7b395,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('111',0xe6b0b4e69e9ce894ace88f9c,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('112',0xe7949ce782b9e9a5aee59381,'0','51','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('299',0xe7bbbce59088e59586e8b685,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('298',0xe4ba94e98791e5ba97,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('121',0xe4bc98e683a0e6b4bbe58aa8,'0','120','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('122',0xe4b880e5a4a9e4b880,'0','120','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('124',0x3330,'0','123','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('147',0x3133,'0','100','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('128',0xe887aae58f96,'0','127','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('129',0xe588b0e5ba97e59083,'0','127','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('131',0xe887aae58f96,'0','130','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('132',0xe5a496e58d96,'0','130','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('151',0x3535,'0','149','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('143',0xe5aea2e688bf,'0','142','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('144',0xe9a490e58e85,'0','142','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('266',0x3334,'0','59','0','0','0','0',0xe8b685e697b6e8b594e4bb98,'0');");
E_D("replace into `xiaozu_shoptype` values('267',0x35,'0','59','0','0','0','0',0xe8b685e697b6e8b594e4bb98,'0');");
E_D("replace into `xiaozu_shoptype` values('333',0xe6b0b4e69e9ce5b9b2e69e9c,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('161',0xe5aeb6e694bf,'0','160','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('162',0xe7be8ee5aeb9,'0','160','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('163',0xe7be8ee4bd93,'0','160','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('164',0xe6b497e8bda6,'0','160','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('166',0xe5aeb6e694bf,'0','165','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('167',0xe7be8ee4bd93,'0','165','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('168',0xe7be8ee5aeb9,'0','165','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('169',0xe4b88ae997a8e6b497e8bda6,'0','165','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('170',0xe4b88ae997a8e58ea8e5b888,'0','165','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('172',0xe8b791e885bf,'0','165','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('174',0xe891a3e5ad90e5b7b7,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('175',0xe9ab98e59cb0e4b896e7baaae59f8e,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('176',0xe582bbe59083e8a197,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('177',0xe4b89ce9a38ee8b7af,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('178',0xe9809ae4bfa1e4b880e69da1e8a197,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('179',0xe799bee8b4a7e5a4a7e6a5bce59586e59c88,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('180',0xe4b89ce59cb0e8b7af,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('181',0xe5aeb4e5aebee6a5bc,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('182',0xe69c8de8a385e59f8e,'0','173','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('184',0xe685a2e59f8e,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('185',0xe58d8ee4b880,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('186',0xe68992e9b8a1e7be8ee9a39fe59f8e,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('187',0xe58bbfe5bf98e68891,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('188',0xe68db7e5ae89e789b9,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('189',0xe6b5b7e5b094,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('190',0xe6a2a6e789b9e5a887,'0','183','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('192',0x313233,'0','191','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('193',0x343536,'0','191','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('202',0x3330e58886e9929f,'0','200','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('274',0xe69e9c,'0','272','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('204',0x3230e58886e9929fe98081e8bebe,'0','203','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('208',0xe894ace88f9c,'0','207','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('221',0xe58fb6e88f9ce7b1bb,'0','220','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('212',0xe7b2aee6b2b9e7b1b3e99da2,'0','207','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('211',0xe6b0b4e69e9c,'0','207','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('213',0xe5a496e58d96,0x636865636b626f78,'0','0','1','1','0','','1');");
E_D("replace into `xiaozu_shoptype` values('222',0xe6a0b9e88c8ee7b1bb,'0','220','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('273',0xe88289,'0','272','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('227',0x3330e58886e9929fe98081e8bebe,'0','203','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('271',0xe88289,'0','269','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('300',0xe5b08fe58d96e993ba,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('403',0xe894ace88f9ce7b2aee6b2b9,'0','369','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('264',0x31,'0','59','0','0','0','0',0xe8b685e697b6e8b594e4bb98,'0');");
E_D("replace into `xiaozu_shoptype` values('265',0x32,'0','59','0','0','0','0',0xe8b685e697b6e8b594e4bb98,'0');");
E_D("replace into `xiaozu_shoptype` values('258',0xe98592e5ba97,'0','257','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('284',0xe891a3e5ad90e5b7b7,'0','283','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('285',0xe98791e58d8ee88cb6e59f8e,'0','283','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('286',0xe5a5a5e5beb7e4b990,'0','283','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('287',0xe5beb7e799bee5aeb6e585b7e5b9bfe59cba,'0','283','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('401',0xe9babbe8bea3e783ab,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('402',0xe99da2e58c85e78398e78499,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('307',0xe4bebfe588a9e5ba97,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('309',0xe8b685e5b882e6a8a1e5bc8f,'0','308','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('328',0xe6b0b4e69e9c,'0','327','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('339',0xe6b497e8a1a3,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('399',0xe7b2bee59381e5ba97e993ba,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('326',0xe6b0b4e9a5bae4b893e58d96,'0','325','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('371',0xe6b0b4e69e9ce8b685e5b882,'0','369','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('364',0xe6af8de5a9b4,'0','114','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('370',0xe697a5e794a8e799bee8b4a7,'0','369','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('344',0xe4ba91e58d97,'0','343','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('345',0xe5b9bfe8a5bf,'0','343','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('346',0xe59b9be5b79d,'0','343','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('347',0xe4b89ce58c97,'0','343','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('348',0xe5beb7e5b79e,'0','343','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('349',0xe5a48fe6b4a5,'0','343','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('351',0xe5b882e79bb4e5b08fe58cba,'0','350','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('352',0xe69687e58c96e8b7af,'0','350','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('353',0xe9ab98e59cb0e58d97e997a8,'0','350','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('354',0xe4b89ce59cb0e8b7af,'0','350','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('369',0xe8b685e5b882,0x636865636b626f78,'0','1','1','1','0','','0');");
E_D("replace into `xiaozu_shoptype` values('356',0xe7bbbfe88cb6,'0','355','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('357',0xe7baa2e88cb6,'0','355','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('358',0xe88ab1e88cb6,'0','355','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('359',0xe99381e8a782e99fb3,'0','355','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('360',0xe8a5bfe6b996e9be99e4ba95,'0','355','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('398',0xe781abe99485e9a699e99485,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('377',0xe5aeb6e694bfe585ace58fb8,'0','376','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('378',0xe789a9e4b89ae69c8de58aa1,'0','376','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('397',0xe6b5b7e9b29ce783a7e783a4,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('396',0xe5b79de6b998e88f9c,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('395',0xe6b189e5a0a1e68aabe890a8,'0','213','0','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('408',0xe4ba94e98791e69d82e8b4a7,'0','369','1','0','0','0','','0');");
E_D("replace into `xiaozu_shoptype` values('428',0xe4b88be58d88e88cb6,'0','213','0','0','0','0','','0');");

require("../../inc/footer.php");
?>