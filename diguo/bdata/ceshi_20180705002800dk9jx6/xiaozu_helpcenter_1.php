<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_helpcenter`;");
E_C("CREATE TABLE `xiaozu_helpcenter` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `orderid` int(5) NOT NULL,
  `seo_key` varchar(255) DEFAULT NULL,
  `seo_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_helpcenter` values('2',0x343434,'1481904000',0x343434,'0',0x343434,0x343434);");
E_D("replace into `xiaozu_helpcenter` values('3',0x3131313131313131313131,'1494259200',0xe6b58be8af95,'2',0x6365736869,0x6365736869);");

require("../../inc/footer.php");
?>