<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_juan`;");
E_C("CREATE TABLE `xiaozu_juan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `card` varchar(20) NOT NULL COMMENT '优惠劵卡号',
  `card_password` varchar(10) NOT NULL COMMENT '优惠劵密码',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '状态，0未使用，1已绑定，2已使用，3无效',
  `creattime` int(11) NOT NULL COMMENT '制造时间',
  `cost` int(5) NOT NULL COMMENT '优惠金额',
  `limitcost` int(5) NOT NULL COMMENT '购物车限制金额下限',
  `endtime` int(11) NOT NULL DEFAULT '0' COMMENT '失效时间',
  `uid` int(20) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `username` varchar(100) NOT NULL DEFAULT '0' COMMENT '用户名',
  `usetime` int(11) NOT NULL DEFAULT '0' COMMENT '使用时间',
  `name` varchar(50) NOT NULL DEFAULT '优惠劵',
  `shareuid` int(11) NOT NULL COMMENT '分享者UID',
  `paytype` varchar(20) DEFAULT NULL COMMENT '(1,2) 1支持货到付款2支持在线支付',
  `type` int(1) DEFAULT NULL COMMENT '1充值2下单3推广',
  `orderid` int(11) DEFAULT NULL,
  `bangphone` varchar(20) DEFAULT NULL COMMENT '绑定手机号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30167 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_juan` values('30119',0x353734,0x6630653532,'1','1507292821','4','20','1507478399','17300',0x6365736869,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30120',0x323230,0x6563386365,'1','1507292821','10','50','1507478399','17300',0x6365736869,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30121',0x323739,0x6433393537,'1','1507292821','12','80','1507478399','17300',0x6365736869,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30127',0x323334,0x3238396466,'1','1507338025','14','80','1507564799','17302',0x73686f70,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30126',0x353937,0x3038633534,'1','1507338025','8','50','1507564799','17302',0x73686f70,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30125',0x393430,0x3864366463,'1','1507338025','2','20','1507564799','17302',0x73686f70,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30136',0x343131,0x3137643633,'1','1507338712','5','80','1507564799','17305',0x776d72,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30135',0x383930,0x3032346437,'1','1507338712','5','50','1507564799','17305',0x776d72,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30134',0x353839,0x3330626233,'1','1507338712','5','20','1507564799','17305',0x776d72,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30137',0x353631,0x3538616537,'1','1508722942','5','20','1508947199','17306',0x74657374,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30138',0x353235,0x3639343231,'1','1508722942','6','21','1508947199','17306',0x74657374,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30139',0x393537,0x3262613539,'1','1508722942','7','22','1508947199','17306',0x74657374,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30140',0x383730,0x3232666230,'1','1508722942','5','20','1508947199','17306',0x74657374,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30141',0x393737,0x6363316161,'1','1508722942','5','50','1508947199','17306',0x74657374,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30142',0x333631,0x3532373230,'1','1508722942','5','80','1508947199','17306',0x74657374,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30143',0x353734,0x6630653532,'1','1508729479','5','20','1508947199','17307',0x746573743031,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30144',0x363437,0x3330336564,'1','1508729479','6','21','1508947199','17307',0x746573743031,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30145',0x383331,0x6530656334,'1','1508729479','7','22','1508947199','17307',0x746573743031,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30146',0x383030,0x3761353339,'1','1508729479','5','20','1508947199','17307',0x746573743031,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30147',0x363335,0x3661313062,'1','1508729479','5','50','1508947199','17307',0x746573743031,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30148',0x333833,0x6265656431,'1','1508729479','5','80','1508947199','17307',0x746573743031,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30149',0x393936,0x3062386166,'1','1508899918','5','20','1509119999','17308',0x687569687569,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30150',0x343235,0x3235623238,'1','1508899918','6','21','1509119999','17308',0x687569687569,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30151',0x373237,0x6662383937,'1','1508899918','7','22','1509119999','17308',0x687569687569,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30152',0x373636,0x3935396135,'1','1508899918','5','20','1509119999','17308',0x687569687569,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30153',0x363839,0x3037613936,'1','1508899918','5','50','1509119999','17308',0x687569687569,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30154',0x313135,0x3262343439,'1','1508899918','5','80','1509119999','17308',0x687569687569,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30155',0x313135,0x3262343439,'1','1508985525','5','20','1509206399','17313',0x636f6f6c,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30156',0x313238,0x3736646336,'1','1508985525','6','21','1509206399','17313',0x636f6f6c,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30157',0x323839,0x3833396162,'1','1508985525','7','22','1509206399','17313',0x636f6f6c,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30158',0x343938,0x3035663937,'1','1508985525','5','20','1509206399','17313',0x636f6f6c,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30159',0x313530,0x3765663630,'1','1508985525','5','50','1509206399','17313',0x636f6f6c,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30160',0x373131,0x3630383135,'1','1508985525','5','80','1509206399','17313',0x636f6f6c,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30161',0x353535,0x3135646532,'1','1509004843','5','20','1509206399','17314',0x707331,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30162',0x383737,0x3335323430,'1','1509004843','6','21','1509206399','17314',0x707331,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30163',0x323738,0x3037636466,'1','1509004843','7','22','1509206399','17314',0x707331,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30164',0x333630,0x6537623234,'1','1509004843','5','20','1509206399','17314',0x707331,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30165',0x313333,0x3966633364,'1','1509004843','5','50','1509206399','17314',0x707331,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");
E_D("replace into `xiaozu_juan` values('30166',0x393330,0x3163633336,'1','1509004843','5','80','1509206399','17314',0x707331,'0',0xe6b3a8e5868ce98081e4bc98e683a0e588b8,'0',0x312c32,'2',NULL,NULL);");

require("../../inc/footer.php");
?>