<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_extendcate`;");
E_C("CREATE TABLE `xiaozu_extendcate` (
  `goodsid` int(20) NOT NULL,
  `catid` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>