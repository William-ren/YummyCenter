<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_applogin`;");
E_C("CREATE TABLE `xiaozu_applogin` (
  `uid` int(20) NOT NULL,
  `channelid` varchar(100) NOT NULL,
  `addtime` int(12) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `xmuserid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>