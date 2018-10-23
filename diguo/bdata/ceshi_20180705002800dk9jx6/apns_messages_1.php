<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `apns_messages`;");
E_C("CREATE TABLE `apns_messages` (
  `pid` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `clientid` varchar(64) NOT NULL,
  `fk_device` int(9) unsigned NOT NULL,
  `message` varchar(255) NOT NULL,
  `delivery` datetime NOT NULL,
  `status` enum('queued','delivered','failed') CHARACTER SET latin1 NOT NULL DEFAULT 'queued',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  KEY `clientid` (`clientid`),
  KEY `fk_device` (`fk_device`),
  KEY `status` (`status`),
  KEY `created` (`created`),
  KEY `modified` (`modified`),
  KEY `message` (`message`),
  KEY `delivery` (`delivery`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='Messages to push to APNS'");
E_D("replace into `apns_messages` values('1','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:07:50','failed','2016-12-19 15:07:50','2016-12-19 15:11:58');");
E_D("replace into `apns_messages` values('2','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:08:10','failed','2016-12-19 15:08:10','2016-12-19 15:23:31');");
E_D("replace into `apns_messages` values('3','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:11:51','delivered','2016-12-19 15:11:51','2016-12-19 15:57:01');");
E_D("replace into `apns_messages` values('4','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:22:43','failed','2016-12-19 15:22:43','2016-12-19 16:21:52');");
E_D("replace into `apns_messages` values('5','','2',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:22:43','delivered','2016-12-19 15:22:43','2016-12-19 15:57:02');");
E_D("replace into `apns_messages` values('6','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:23:28','failed','2016-12-19 15:23:28','2016-12-19 16:26:20');");
E_D("replace into `apns_messages` values('7','','2',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:23:28','failed','2016-12-19 15:23:28','2017-08-18 04:14:52');");
E_D("replace into `apns_messages` values('8','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:56:58','failed','2016-12-19 15:56:58','2017-08-18 04:14:54');");
E_D("replace into `apns_messages` values('9','','2',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 15:56:58','queued','2016-12-19 15:56:58','2016-12-19 15:56:58');");
E_D("replace into `apns_messages` values('10','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 16:21:51','queued','2016-12-19 16:21:51','2016-12-19 16:21:51');");
E_D("replace into `apns_messages` values('11','','2',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 16:21:51','queued','2016-12-19 16:21:51','2016-12-19 16:21:51');");
E_D("replace into `apns_messages` values('12','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 16:26:19','queued','2016-12-19 16:26:19','2016-12-19 16:26:19');");
E_D("replace into `apns_messages` values('13','','2',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2016-12-19 16:26:19','queued','2016-12-19 16:26:19','2016-12-19 16:26:19');");
E_D("replace into `apns_messages` values('14','','1',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2017-08-18 04:14:51','queued','2017-08-18 04:14:51','2017-08-18 04:14:51');");
E_D("replace into `apns_messages` values('15','','2',0x7b22617073223a7b22616c657274223a224d6573736167652072656365697665642066726f6d20426f62227d2c2261636d6532223a5b2262616e67222c227768697a225d7d,'2017-08-18 04:14:51','queued','2017-08-18 04:14:51','2017-08-18 04:14:51');");

require("../../inc/footer.php");
?>