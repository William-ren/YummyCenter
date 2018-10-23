<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_orderstatus`;");
E_C("CREATE TABLE `xiaozu_orderstatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL COMMENT '订单ID',
  `statustitle` varchar(255) NOT NULL COMMENT '状态',
  `ststusdesc` varchar(255) NOT NULL COMMENT '状态描述',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40818 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_orderstatus` values('40800','32903',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1507339128');");
E_D("replace into `xiaozu_orderstatus` values('40801','32903',0xe59ca8e7babfe694afe4bb98e68890e58a9f,0xe8aea2e58d95e5b7b2e59ca8e7babfe694afe4bb98e68890e58a9f,'1507339159');");
E_D("replace into `xiaozu_orderstatus` values('40802','32903',0xe59586e5aeb6e5b7b2e68ea5e58d95,0xe59586e5aeb6e6ada3e59ca8e58786e5a487e59586e59381,'1507339159');");
E_D("replace into `xiaozu_orderstatus` values('40803','32903',0xe59586e5aeb6e5b7b2e58f91e8b4a7,0xe59586e59381e5b7b2e7bb8fe58786e5a487e5a5bd,'1507339376');");
E_D("replace into `xiaozu_orderstatus` values('40804','32903',0xe5b7b2e5ae8ce68890e8aea2e58d95,0xe8afb7e8af84e4bbb7e8aea2e58d95,'1507339378');");
E_D("replace into `xiaozu_orderstatus` values('40805','32903',0xe5b7b2e5ae8ce68890e8aea2e58d95,0xe5b7b2e8af84e4bbb7,'1507339396');");
E_D("replace into `xiaozu_orderstatus` values('40806','32904',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1508901939');");
E_D("replace into `xiaozu_orderstatus` values('40807','32905',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e5b7b2e68f90e4baa4efbc8ce8afb7e7ad89e5be85e59586e5aeb6e7a1aee8aea4,'1508902710');");
E_D("replace into `xiaozu_orderstatus` values('40808','32905',0xe59586e5aeb6e5b7b2e68ea5e58d95,0xe59586e5aeb6e6ada3e59ca8e58786e5a487e59586e59381,'1508902710');");
E_D("replace into `xiaozu_orderstatus` values('40809','32906',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1508982133');");
E_D("replace into `xiaozu_orderstatus` values('40810','32907',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1508982186');");
E_D("replace into `xiaozu_orderstatus` values('40811','32908',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1508985088');");
E_D("replace into `xiaozu_orderstatus` values('40812','32908',0xe887aae58aa8e585b3e997ade8aea2e58d95,0xe59ca8e7babfe694afe4bb98e8aea2e58d95efbc8ce69caae694afe4bb98e887aae58aa8e585b3e997ad,'1508985988');");
E_D("replace into `xiaozu_orderstatus` values('40813','32909',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1508989079');");
E_D("replace into `xiaozu_orderstatus` values('40814','32909',0xe887aae58aa8e585b3e997ade8aea2e58d95,0xe59ca8e7babfe694afe4bb98e8aea2e58d95efbc8ce69caae694afe4bb98e887aae58aa8e585b3e997ad,'1508989979');");
E_D("replace into `xiaozu_orderstatus` values('40815','32907',0xe59586e5aeb6e58f96e6b688e8aea2e58d95,0xe8aea2e58d95e5b7b2e8a2abe58f96e6b688,'1509007607');");
E_D("replace into `xiaozu_orderstatus` values('40816','32910',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1509009284');");
E_D("replace into `xiaozu_orderstatus` values('40817','32911',0xe8aea2e58d95e5b7b2e68f90e4baa4,0xe8aea2e58d95e69caae694afe4bb98efbc8ce8afb7e58f8ae697b6e5ae8ce68890e59ca8e7babfe694afe4bb98,'1509009331');");

require("../../inc/footer.php");
?>