<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_wxuserjubao`;");
E_C("CREATE TABLE `xiaozu_wxuserjubao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_wxuserjubao` values('34','15515','706');");
E_D("replace into `xiaozu_wxuserjubao` values('41','0','750');");
E_D("replace into `xiaozu_wxuserjubao` values('43','11646','757');");
E_D("replace into `xiaozu_wxuserjubao` values('24','6039','443');");
E_D("replace into `xiaozu_wxuserjubao` values('42','16818','753');");

require("../../inc/footer.php");
?>