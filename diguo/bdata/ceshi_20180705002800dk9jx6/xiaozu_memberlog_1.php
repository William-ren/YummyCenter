<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_memberlog`;");
E_C("CREATE TABLE `xiaozu_memberlog` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '1积分/2资金',
  `addtype` int(1) NOT NULL DEFAULT '0' COMMENT '1增加2减少',
  `result` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '变动积分/金额数量',
  `addtime` int(12) NOT NULL DEFAULT '0',
  `content` varchar(255) DEFAULT NULL COMMENT '描述',
  `title` varchar(255) DEFAULT NULL,
  `acount` decimal(6,2) NOT NULL DEFAULT '0.00' COMMENT '账户总金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16146 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_memberlog` values('16126','17300','1','1','10.00','1507292821',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16128','17302','1','1','10.00','1507338025',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16133','17305','1','1','10.00','1507338712',0xe794a8e688b7e799bbe99986e8b5a0e98081e7a7afe588863130e680bbe7a7afe588863230,0xe6af8fe5a4a9e799bbe99986,'20.00');");
E_D("replace into `xiaozu_memberlog` values('16132','17305','1','1','10.00','1507338712',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16134','17305','2','1','1000.00','1507339150',0xe7aea1e79086e59198e79bb4e68ea5e6938de4bd9ce58f98e58aa8,0xe7aea1e79086e59198e6938de4bd9ce98791e9a29d,'1000.00');");
E_D("replace into `xiaozu_memberlog` values('16135','17305','2','2','27.00','1507339159',0xe694afe4bb98e8aea2e58d953135303733333931323831333636e5b890e58fb7e98791e9a29de5878fe5b09132372e3030e58583,0xe4bd99e9a29de694afe4bb98e8aea2e58d95,'973.00');");
E_D("replace into `xiaozu_memberlog` values('16136','17305','1','1','47.00','1507339378',0xe6b688e8b4b9e98081e7a7afe588863437,0xe6b688e8b4b9e98081e7a7afe58886,'67.00');");
E_D("replace into `xiaozu_memberlog` values('16137','17305','1','1','20.00','1507339396',0xe8af84e4bbb7e59586e59381e88eb7e5be973230e7a7afe58886,0xe8af84e4bbb7e59586e59381,'87.00');");
E_D("replace into `xiaozu_memberlog` values('16138','17305','1','1','20.00','1507339396',0xe8af84e4bbb7e59586e59381e88eb7e5be973230e7a7afe58886,0xe8af84e4bbb7e59586e59381,'87.00');");
E_D("replace into `xiaozu_memberlog` values('16139','17306','1','1','10.00','1508722942',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16140','17307','1','1','10.00','1508729479',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16141','17308','1','1','10.00','1508899918',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16142','17313','1','1','10.00','1508985525',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16143','17313','1','1','10.00','1509001075',0xe794a8e688b7e799bbe99986e8b5a0e98081e7a7afe588863130e680bbe7a7afe588863230,0xe6af8fe5a4a9e799bbe99986,'20.00');");
E_D("replace into `xiaozu_memberlog` values('16144','17314','1','1','10.00','1509004843',0xe6b3a8e5868ce98081e7a7afe588863130,0xe6b3a8e5868ce98081e7a7afe58886,'10.00');");
E_D("replace into `xiaozu_memberlog` values('16145','17305','1','1','10.00','1511430817',0xe794a8e688b7e799bbe99986e8b5a0e98081e7a7afe588863130e680bbe7a7afe58886313137,0xe6af8fe5a4a9e799bbe99986,'117.00');");

require("../../inc/footer.php");
?>