<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_admin`;");
E_C("CREATE TABLE `xiaozu_admin` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `logintime` int(11) NOT NULL,
  `loginip` varchar(30) DEFAULT NULL,
  `limit` text,
  `groupid` int(20) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=359 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_admin` values('1',0x61646d696e,0x6430333634656230643232633539623032626336633534363630363461333535,'0','1530721756',0x3132372e302e302e31,0x736974657365742c73656f5f736574736176652c6c696d69747365742c736176656c696d69747365742c666f6f746c696e6b2c73617665666f6f746c696e6b2c746f706c696e6b2c73617665746f706c696e6b2c6a666c696d69747365742c6d616e6567656c6973742c6d616e6567656164642c656469746d616e6567652c6d616e656765736176652c64656c6d616e6567652c6d656d6265726c6973742c6164646d656d6265722c656469746d656d6265722c6d656d626572736176652c64656c6d656d6265722c6f617574686c6973742c64656c6f617574682c73686f706c6973742c73686f706c697374772c73686f70747970652c61646473686f70747970652c6564697473686f70747970652c7361766573686f70747970652c64656c73686f70747970652c617265616c6973742c616464617265612c65696474617265612c73617665617265612c63787369676e2c61646463787369676e2c6564697463787369676e2c6f726465726c6973742c6f72646572746f74616c2c6d61726b6574746a2c6d61726b65746f726465722c6f72646572796a696e2c636f6d6d656e746c6973742c64656c636f6d6d6c6973742c61736b6c6973742c64656c61736b2c61736b73686f706c6973742c73696e676c656c6973742c61646473696e676c652c7361766573696e676c652c64656c73696e676c652c6164762c6164646164762c616476747970652c676966746c6973742c616464676966742c67696674747970652c61646467696674747970652c676966746c6f672c656d61696c7365742c736d737365742c73656e647461736b6c6973742c73656e647461736b2c636172646c6973742c616464636172642c6a75616e6c6973742c6164646a75616e2c6578636f6d6d2c706d65732c6c6f67696e6c6973742c7061796c6973742c6f7468657274706c2c6f72646572746f646179772c6f72646572746f6461792c6f7264657273656e642c62617365646174612c7265626b646174612c6d61726b65742c6164646d61726b65742c656469746d61726b65742c64656c6d61726b65742c6164646d61726b6574747970652c64656c6d61726b6574747970652c6c6973746d61726b6574747970652c667269656e646c696e6b2c73686f70746f706174742c77787365742c77786261636b2c77786d656e752c7072696e746c6f67,'1');");
E_D("replace into `xiaozu_admin` values('357',0xe58d97e5ae81e7ab99,0x6531306164633339343962613539616262653536653035376632306638383365,'1508308707','1508999556',0x3131332e31362e35362e313635,NULL,'4');");
E_D("replace into `xiaozu_admin` values('358',0xe6b2b3e6b1a0e5b882,0x6531306164633339343962613539616262653536653035376632306638383365,'1508308918','0',NULL,NULL,'4');");

require("../../inc/footer.php");
?>