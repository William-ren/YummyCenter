<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `xx_positionkey`;");
E_C("CREATE TABLE `xx_positionkey` (
  `datatype` int(1) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `datacode` varchar(100) CHARACTER SET utf8 NOT NULL,
  `datacontent` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lat` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `lng` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1");

require("../../inc/footer.php");
?>