<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_goodscx`;");
E_C("CREATE TABLE `xiaozu_goodscx` (
  `goodsid` int(20) NOT NULL,
  `cxzhe` int(3) NOT NULL DEFAULT '0',
  `cxstarttime` int(12) NOT NULL DEFAULT '0',
  `ecxendttime` int(12) NOT NULL DEFAULT '0',
  `cxstime1` int(8) NOT NULL DEFAULT '0',
  `cxetime1` int(8) NOT NULL DEFAULT '0',
  `cxstime2` int(8) NOT NULL DEFAULT '0',
  `cxetime2` int(8) NOT NULL DEFAULT '0',
  `cxnum` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>