<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_positionkey`;");
E_C("CREATE TABLE `xiaozu_positionkey` (
  `datatype` int(1) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `datacode` varchar(100) NOT NULL,
  `datacontent` varchar(100) NOT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  FULLTEXT KEY `datacode` (`datacode`),
  FULLTEXT KEY `datacontent` (`datacontent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_positionkey` values('2','883',0x6775616e67686571696a69616e6469616e,0xe58589e59088e69797e888b0e5ba97,0x33342e3830323333,0x3131332e353433383036);");
E_D("replace into `xiaozu_positionkey` values('2','883',0x6768716a64,0xe58589e59088e69797e888b0e5ba97,0x33342e3830323333,0x3131332e353433383036);");
E_D("replace into `xiaozu_positionkey` values('2','884',0x686373,0xe6b2b3e6b1a0e5b882,0x32322e383130343237,0x3130382e333633303735);");
E_D("replace into `xiaozu_positionkey` values('2','885',0x74657374,0x74657374,0x32322e383137373436,0x3130382e3336363337);");
E_D("replace into `xiaozu_positionkey` values('2','885',0x3133333737333135333534,0x3133333737333135333534,0x32322e383137373436,0x3130382e3336363337);");
E_D("replace into `xiaozu_positionkey` values('2','884',0x6865636869736869,0xe6b2b3e6b1a0e5b882,0x32322e383130343237,0x3130382e333633303735);");
E_D("replace into `xiaozu_positionkey` values('2','884',0x6775616e67686571696a69616e6469616e,0xe58589e59088e69797e888b0e5ba97,0x32322e383130343237,0x3130382e333633303735);");
E_D("replace into `xiaozu_positionkey` values('2','884',0x6768716a64,0xe58589e59088e69797e888b0e5ba97,0x32322e383130343237,0x3130382e333633303735);");
E_D("replace into `xiaozu_positionkey` values('2','886',0x746573743031,0x746573743031,0x32322e383234313538,0x3130382e3332303534);");
E_D("replace into `xiaozu_positionkey` values('2','887',0x6875696a696e677975616e,0xe6b187e699afe88b91,0x32322e383131363538,0x3130382e333634393739);");
E_D("replace into `xiaozu_positionkey` values('2','887',0x686a79,0xe6b187e699afe88b91,0x32322e383131363538,0x3130382e333634393739);");
E_D("replace into `xiaozu_positionkey` values('2','888',0x6c6a72,0x67e9878ce8848ae88289,0x32322e383233363734,0x3130382e333230333538);");
E_D("replace into `xiaozu_positionkey` values('2','888',0x676c696a69726f75,0x67e9878ce8848ae88289,0x32322e383233363734,0x3130382e333230333538);");
E_D("replace into `xiaozu_positionkey` values('2','888',0x2e2e2e2e2e,0x2e2e2e2e2e,0x32322e383233363734,0x3130382e333230333538);");

require("../../inc/footer.php");
?>