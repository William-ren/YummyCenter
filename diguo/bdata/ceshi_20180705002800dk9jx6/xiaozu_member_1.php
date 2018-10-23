<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_member`;");
E_C("CREATE TABLE `xiaozu_member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(250) NOT NULL,
  `creattime` int(11) NOT NULL,
  `logintime` int(11) NOT NULL,
  `usertype` int(1) NOT NULL COMMENT '0.普通会员，1开店商家',
  `score` int(5) NOT NULL DEFAULT '0' COMMENT '积分',
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '账号余额',
  `loginip` varchar(30) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '账号是否可用',
  `safepwd` varchar(100) DEFAULT NULL COMMENT '支付密码',
  `group` int(2) DEFAULT '5',
  `is_bang` int(1) NOT NULL DEFAULT '0',
  `parent_id` int(20) DEFAULT '0',
  `total` int(6) DEFAULT '0',
  `admin_id` int(20) NOT NULL DEFAULT '0',
  `sex` int(11) NOT NULL,
  `wxopenid` text NOT NULL,
  `temp_password` varchar(50) DEFAULT NULL,
  `shopid` int(11) NOT NULL DEFAULT '0',
  `shopcost` decimal(8,2) DEFAULT '0.00',
  `backacount` varchar(100) DEFAULT NULL,
  `md_flag` int(1) NOT NULL DEFAULT '0' COMMENT '分钟数',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=17316 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_member` values('17305',0x6531306164633339343962613539616262653536653035376632306638383365,0x3132333231324071712e636f6d,0x776d72,0x3135323336393738343132,'','1507338712','1511430817','0','117','973.00',0x3131372e3133362e32352e3739,'','0',NULL,'5','0','0','27','450100','0','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17302',0x6531306164633339343962613539616262653536653035376632306638383365,0x73686f704071712e636f6d,0x73686f70,0x3135323336393738343531,'','1507338025','1507338025','0','10','0.00',0x3132372e302e302e31,'','0',NULL,'3','0','0','0','450100','0','',NULL,'0','20.60',NULL,'0');");
E_D("replace into `xiaozu_member` values('17306',0x6531306164633339343962613539616262653536653035376632306638383365,0x334071712e636f6d,0x74657374,0x3133333737333135333534,'','1508722942','1508722942','0','10','0.00',0x3131332e31362e36302e323438,'','0',NULL,'3','0','0','0','450100','0','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17307',0x6531306164633339343962613539616262653536653035376632306638383365,0x31403136332e636f6d,0x746573743031,0x3133333737333135333535,'','1508729479','1508729479','0','10','0.00',0x3131332e31362e36302e323438,'','0',NULL,'3','0','0','0','450100','0','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17308',0x6531306164633339343962613539616262653536653035376632306638383365,0x687569403136332e636f6d,0x687569687569,0x3135383735323635343132,'','1508899918','1508899918','0','10','0.00',0x3131332e31362e36302e323438,'','0',NULL,'3','0','0','0','450100','0','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17309',0x6262663333323336316431613239373332323137346235376263313532656461,'',0xe6aca7e998b3e6b5b7e6b88520203138363737313732383834,'','','1508901831','1508901831','0','0','0.00','',0x687474703a2f2f77782e716c6f676f2e636e2f6d6d686561642f5133617548677a777a4d356548547a42435a79566a714256384751476756537769634b6a71754969625563493755474647686d464b3255772f30,'0',NULL,'10','0','0','0','0','1','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17310',0x6638646133323534656437616266366236343337323334313662303739343336,0x3236393131383339354071712e636f6d,0x3131313131313131,0x3133333434343332323232,'','1508980187','1508980187','0','0','0.00','',0x687474703a2f2f77782e716c6f676f2e636e2f6d6d686561642f68526f6d6f715735594277325538776b526962716b454a696333655641316d70654839723674615952356665302f30,'0',NULL,'2','0','0','0','451200','1','',NULL,'888','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17311',0x6433383337633036353236633534666266363866313464373938663931386538,'',0x62616279,'','','1508981536','1508981536','0','0','0.00','',0x687474703a2f2f77782e716c6f676f2e636e2f6d6d686561642f5133617548677a777a4d3739777236464b736b4f62743966686a77565956476963646378727646577545664d767a7836354633303767772f30,'0',NULL,'10','0','0','0','0','2','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17312',0x3233336134363332663131353662393363366138393564376237303933363561,'',0xe4ba94e5a4a7e59388e59388,'','','1508983227','1508983227','0','0','0.00','',0x687474703a2f2f77782e716c6f676f2e636e2f6d6d686561642f5133617548677a777a4d3643474f38375a656a734b396670377769615654374c70706d69636268686c7865735949797269616e4e52594a38772f30,'0',NULL,'10','0','0','0','0','1','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17313',0x6531306164633339343962613539616262653536653035376632306638383365,'',0x636f6f6c,0x3133333737333135333536,'','1508985525','1509001075','0','20','0.00',0x3131332e31362e35362e313635,'','0',NULL,'3','0','0','0','450100','0','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17314',0x6531306164633339343962613539616262653536653035376632306638383365,0x314071712e636f6d,0x707331,0x3133333737333135333537,'','1509004843','1509004843','0','10','0.00',0x3131332e31362e35362e313635,'','0',NULL,'2','0','0','0','450100','0','',NULL,'0','0.00',NULL,'0');");
E_D("replace into `xiaozu_member` values('17315',0x6166366132356566383639326138646264376232343338393738356432663264,'',0xe58faae9a1bee4b98be997b4,'','','1509006720','1509006720','0','0','0.00','',0x687474703a2f2f77782e716c6f676f2e636e2f6d6d686561642f4b52696336437370426b56476b4e6869637332565045623478364c477030395262776275784d677150324768512f30,'0',NULL,'10','0','0','0','0','1','',NULL,'0','0.00',NULL,'0');");

require("../../inc/footer.php");
?>