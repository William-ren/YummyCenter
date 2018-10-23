<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_appadv`;");
E_C("CREATE TABLE `xiaozu_appadv` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `param` varchar(255) DEFAULT NULL,
  `orderid` int(5) NOT NULL DEFAULT '0',
  `cityid` int(12) NOT NULL COMMENT '所属城市ID',
  `is_show` int(2) NOT NULL DEFAULT '1',
  `modeopt` int(2) NOT NULL DEFAULT '1',
  `link` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=301 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_appadv` values('125',0x666473,0x2f75706c6f61642f676f6f64732f32303137303630373137353733343739352e706e67,'2',0x7761696d6169,0x323530,'0','510100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('126',0xe5a496e58d96e58886e7b1bb,0x2f75706c6f61642f676f6f64732f32303137303631303131353035393239372e706e67,'2',0x7761696d6169,0x333337,'1','410102','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('145',0xe6b58be8af95,0x2f75706c6f61642f676f6f64732f32303137303830333230353435353631332e706e67,'2',0x6d61726b6574,0x333730,'12','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('100',0xe782b8e9b8a1e6b189e5a0a1,0x2f75706c6f61642f676f6f64732f32303137303932373130353134303237382e706e67,'2',0x7761696d6169,0x333937,'11','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('15',0x7031,0x2f75706c6f61642f676f6f64732f32303136303132313134303231383933312e706e67,'3','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('120',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303137303530363138323130343232382e706e67,'2',0x7761696d6169,0x323530,'1','520400','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('121',0xe5ae89e9a1bae5b08fe59083,0x2f75706c6f61642f676f6f64732f32303137303530363138323332333732392e706e67,'2',0x7761696d6169,0x333337,'2','520400','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('23',0x7032,0x2f75706c6f61642f676f6f64732f32303136303132313134303233323430342e706e67,'3','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('24',0x7033,0x2f75706c6f61642f676f6f64732f32303136303132313134303234333332342e706e67,'3','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('25',0x7034,0x2f75706c6f61642f676f6f64732f32303136303132323133353132393439372e706e67,'3','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('41',0x31,0x2f75706c6f61642f676f6f64732f32303137313032333135323230373132312e6a7067,'1','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('136',0xe9b29ce88ab1e89b8be7b395,0x2f75706c6f61642f676f6f64732f32303137303731313131313530363733392e706e67,'2',0x7761696d6169,0x333336,'1','411300','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('135',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303137303731313131313432353632382e6a7067,'2',0x7761696d6169,0x323530,'0','411300','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('127',0xe8b685e5b882e58886e7b1bb,0x2f75706c6f61642f676f6f64732f32303137303631303131353132313635352e706e67,'2',0x7761696d6169,0x333338,'2','410102','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('93',0xe7b2bee98089e7be8ee9a39f,0x2f75706c6f61642f6170702f32303137303932333135323432323631312e706e67,'2',0x7761696d6169,0x343032,'2','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('94',0xe5bfabe9a490e9809fe9a39f,0x2f75706c6f61642f6170702f32303137303932333135323435363931382e706e67,'2',0x7761696d6169,0x343031,'3','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('95',0xe781abe99485e5a496e98081,0x2f75706c6f61642f676f6f64732f32303137303932373130353132373635392e706e67,'2',0x7761696d6169,0x343037,'3','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('76',0x32,0x2f75706c6f61642f676f6f64732f32303137303932353139313234353231372e706e67,'1','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('122',0xe588b0e5ba97e6b688e8b4b9,0x2f75706c6f61642f676f6f64732f32303137303531343033333935303133342e706e67,'2',0x6c69666568656c70,0x6c69666568656c70,'5','520400','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('117',0xe7899be68e92e59296e595a1,0x2f75706c6f61642f676f6f64732f32303137303432343130313033393238332e6a7067,'2',0x7761696d6169,0x343031,'1','411600','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('98',0xe9b29ce88ab1e89b8be7b395,0x2f75706c6f61642f676f6f64732f32303137303932373130353033393634392e706e67,'2',0x7761696d6169,0x333937,'6','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('96',0xe7949ce782b9e9a5aee59381,0x2f75706c6f61642f6170702f32303137303932333135323630313438382e706e67,'2',0x7761696d6169,0x343032,'4','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('119',0xe7bd91e4b88ae88f9ce59cba,0x2f75706c6f61642f676f6f64732f32303137303530363138323032373736302e6a7067,'2',0x6d61726b6574,0x333333,'3','520400','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('118',0xe8b685e5b882e799bee8b4a7,0x2f75706c6f61642f676f6f64732f32303137303530363138313935323931352e706e67,'2',0x6d61726b6574,0x333339,'4','520400','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('116',0xe6b0b4e69e9ce5b9b2e69e9c,0x2f75706c6f61642f676f6f64732f32303137303432343130313031353239362e6a7067,'2',0x6d61726b6574,0x333333,'1','411600','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('113',0xe5908ce59f8ee8b791e885bf,0x2f75706c6f61642f6170702f32303137303932333137323231383138372e706e67,'2',0x70616f747569,0x70616f747569,'8','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('115',0xe9b29ce88ab1e89b8be7b395,0x2f75706c6f61642f676f6f64732f32303137303432343130303934393937382e6a7067,'2',0x7761696d6169,0x333337,'1','411600','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('128',0xe7b1b3e7b289e5bfabe9a490,0x2f75706c6f61642f676f6f64732f32303137303631353133323630383830302e706e67,'2',0x7761696d6169,0x333637,'1','320900','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('129',0xe698afe7949fe6adbb,0x2f75706c6f61642f676f6f64732f32303137303632303232303935323230332e6a7067,'2',0x7761696d6169,0x323530,'1','652327','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('130',0xe4bebfe588a9e5ba97,0x2f75706c6f61642f6170702f32303137303932333135323532353332392e706e67,'2',0x6d61726b65746c697374,0x6d61726b65746c697374,'2','410100','1','1',0x687474703a2f2f7777772e62616964752e636f6d);");
E_D("replace into `xiaozu_appadv` values('131',0xe5bc80e69cbae5b9bfe5918a,0x2f75706c6f61642f676f6f64732f32303137303730313130343431353735352e706e67,'6','','0','0','0','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('137',0xe7949ce782b9e9a5aee59381,0x2f75706c6f61642f676f6f64732f32303137303731313131313534303930332e706e67,'2',0x7761696d6169,0x333334,'2','411300','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('140',0xe8888ce5b096e591b3e895be,0x2f75706c6f61642f676f6f64732f32303137303731323135353930393731312e6a7067,'2',0x7761696d6169,0x343032,'0','411500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('143',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303137303732333131353130373139382e6a7067,'2',0x7761696d6169,0x343031,'0','220381','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('144',0xe6b0b4e69e9ce7949fe9b29c,0x2f75706c6f61642f676f6f64732f32303137303732333131353135313433362e706e67,'2',0x6d61726b6574,0x343033,'0','220381','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('146',0xe781abe99485e8bf87e68a8ae798be,0x2f75706c6f61642f676f6f64732f32303137303830353133343932313130302e706e67,'2',0x7761696d6169,0x343031,'1','411500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('147',0xe5b7a6e58fb3e997b4e8b685e5b882,0x2f75706c6f61642f676f6f64732f32303137303830353133343935323230352e706e67,'2',0x6d61726b6574,0x333730,'2','411500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('148',0xe69e9ce69e9ce7b2bee59381e5ba97,0x2f75706c6f61642f676f6f64732f32303137303830353133353033333938362e706e67,'2',0x6d61726b6574,0x333731,'3','411500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('149',0xe696b0e9b29ce894ace88f9c,0x2f75706c6f61642f676f6f64732f32303137303830353133353130333438352e6a7067,'2',0x6d61726b6574,0x343033,'4','411500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('150',0xe5908ce59f8ee8b791e885bf,0x2f75706c6f61642f676f6f64732f32303137303830353133353230323333372e6a7067,'2',0x70616f747569,0x70616f747569,'5','411500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('151',0xe6a1b6e8a385e6b0b4,0x2f75706c6f61642f676f6f64732f32303137303832333134303631393639322e6a7067,'2',0x7761696d6169,0x343137,'1','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('154',0xe9babbe8bea3e783ab,0x2f75706c6f61642f676f6f64732f32303137303832333134303534363837352e6a7067,'2',0x7761696d6169,0x343031,'2','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('155',0xe782b8e9b8a1,0x2f75706c6f61642f676f6f64732f32303137303832333134303634303531352e6a7067,'2',0x7761696d6169,0x333939,'3','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('156',0xe799bee8b4a7,0x2f75706c6f61642f676f6f64732f32303137303832333134303730313532302e6a7067,'2',0x6d61726b6574,0x333730,'4','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('157',0xe6b0b4e69e9c,0x2f75706c6f61642f676f6f64732f32303137303832333134303733313431352e6a7067,'2',0x6d61726b6574,0x333731,'5','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('158',0xe6b189e5a0a1e68aabe890a8,0x2f75706c6f61642f676f6f64732f32303137303832333134303735343337352e6a7067,'2',0x7761696d6169,0x333935,'6','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('159',0xe781abe99485,0x2f75706c6f61642f676f6f64732f32303137303832333134303832313531342e6a7067,'2',0x7761696d6169,0x333938,'7','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('160',0xe783a7e783a4,0x2f75706c6f61642f676f6f64732f32303137303832333134303834333533362e6a7067,'2',0x7761696d6169,0x333937,'8','110000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('162',0xe4bc91e997b2e5b08fe59083,0x2f75706c6f61642f676f6f64732f32303137303930393136333734303232302e6a7067,'2',0x7761696d6169,0x343032,'1','220381','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('163',0xe7be8ee9a39f,0x2f75706c6f61642f676f6f64732f32303137303931313135353535313933392e706e67,'2',0x7761696d6169,0x343031,'0','130722','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('164',0xe58c85e5ad90,0x2f75706c6f61642f676f6f64732f32303137303931313135353632383234362e706e67,'2',0x7761696d6169,0x333936,'1','130722','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('165',0xe59381e7898ce9a686,0x2f75706c6f61642f676f6f64732f32303137303931313135353730303730312e706e67,'2',0x6d61726b6574,0x333731,'2','130722','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('166',0xe8b791e885bf,0x2f75706c6f61642f676f6f64732f32303137303931313135353733303932352e706e67,'2',0x70616f747569,0x70616f747569,'3','130722','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('167',0x31,0x2f75706c6f61642f676f6f64732f32303137303931343134313930343837302e6a7067,'2',0x7761696d6169,0x343031,'0','520000','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('169',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('192',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6170702f32303137303932393030353230343733312e706e67,'2',0x7761696d6169,0x7765626c696e6b,'999','410100','1','2',0x68747470733a2f2f7761702e6c657761696d61692e636f6d2f696e6465782e7068703f723d73686f77646976706167652f696e6465782669643d36353831);");
E_D("replace into `xiaozu_appadv` values('193',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('194',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('195',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x343031,'999','410100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('196',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x7765626c696e6b,'88888','410100','0','2',0x687474703a2f2f767a616e2e636f6d2f73632f632d353230363235);");
E_D("replace into `xiaozu_appadv` values('176',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('177',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('178',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('179',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('180',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('181',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('182',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('183',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('184',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('185',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('186',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('187',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('188',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('189',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('190',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('191',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','410500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('197',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x6c69666568656c70,0x6c69666568656c70,'999','410100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('199',0xe7949ce782b9e9a5aee59381,0x2f75706c6f61642f676f6f64732f32303137303932373136333135363233312e6a7067,'2',0x7761696d6169,0x343238,'0','410100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('201',0xe9babbe8bea3e783ab,0x2f75706c6f61642f676f6f64732f32303137303932383131313832383131302e706e67,'2',0x7761696d6169,0x343031,'0','422800','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('202',0xe99da2e58c85e7949ce782b9,0x2f75706c6f61642f676f6f64732f32303137303932383131313833393333392e706e67,'2',0x7761696d6169,0x343032,'0','422800','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('203',0xe781abe99485e7b1bb,0x2f75706c6f61642f676f6f64732f32303137303932383131313931353235342e706e67,'2',0x7761696d6169,0x333938,'0','422800','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('204',0xe697a5e794a8e799bee8b4a7,0x2f75706c6f61642f676f6f64732f32303137303932383131313933353931352e706e67,'2',0x6d61726b6574,0x333730,'0','422800','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('205',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x343031,'999','530100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('206',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x343031,'999','530100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('207',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('208',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('209',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('210',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('211',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('212',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('213',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('214',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('215',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('216',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('217',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('218',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('219',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('220',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','530100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('221',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('222',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('223',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('224',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('225',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('226',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('227',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('228',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('229',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('230',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411500','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('231',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('232',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('233',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('234',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('235',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('236',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('237',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('238',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('239',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('240',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('241',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('242',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('243',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','411600','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('244',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('245',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('246',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('247',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('248',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('249',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('250',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('251',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','110000','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('252',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('253',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('254',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('255',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('256',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('257',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('258',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('259',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('260',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('261',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('262',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('263',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('264',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('265',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('266',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('267',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','0','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('268',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6170702f32303137313032363134333330383634302e706e67,'2',0x7761696d6169,0x343031,'999','450100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('269',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6170702f32303137313032363134333332373637382e706e67,'2',0x7761696d6169,0x343031,'999','450100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('270',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('271',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('272',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('273',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('274',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('275',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('276',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('277',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('278',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('279',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('280',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('281',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('282',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('283',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','450100','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('284',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6170702f32303137313032363039323633383335342e706e67,'2',0x7761696d6169,0x343031,'1','451200','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('285',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6170702f32303137313032363039303131333232342e706e67,'2',0x6d61726b6574,0x343033,'999','451200','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('286',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f6170702f32303137313032363039323030323236342e706e67,'2',0x70616f747569,0x70616f747569,'999','451200','1','1',0x31);");
E_D("replace into `xiaozu_appadv` values('287',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('288',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('289',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('290',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('291',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('292',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('293',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('294',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('295',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('296',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('297',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('298',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('299',0xe7be8ee9a39fe5a496e58d96,0x2f75706c6f61642f676f6f64732f32303136303130393138313633323335342e706e67,'2',0x7761696d6169,0x3736,'999','451200','0','1',0x31);");
E_D("replace into `xiaozu_appadv` values('300',0x31,0x2f75706c6f61642f676f6f64732f32303137313032363134313632393739342e706e67,'5','','0','0','0','1','1',0x31);");

require("../../inc/footer.php");
?>