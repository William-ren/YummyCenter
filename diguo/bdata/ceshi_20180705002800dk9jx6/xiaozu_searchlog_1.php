<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_searchlog`;");
E_C("CREATE TABLE `xiaozu_searchlog` (
  `uid` int(11) NOT NULL COMMENT '用户UID',
  `searchval` varchar(255) NOT NULL COMMENT '搜索关键词',
  `searchtime` int(11) NOT NULL COMMENT '搜索时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_searchlog` values('165',0xe9bb84e78496e9b8a1,'1452428178');");
E_D("replace into `xiaozu_searchlog` values('165',0xe7baa2e783a7e88289,'1452428191');");
E_D("replace into `xiaozu_searchlog` values('165',0xe88a92e69e9c,'1452428337');");
E_D("replace into `xiaozu_searchlog` values('166',0xe9b8a1e68e92,'1452428338');");
E_D("replace into `xiaozu_searchlog` values('2162',0xe782b8e985b1e99da2,'1452430108');");
E_D("replace into `xiaozu_searchlog` values('153',0xe7899be88289e99da2,'1455679198');");
E_D("replace into `xiaozu_searchlog` values('153',0xe6b0b4e69e9c,'1455679143');");
E_D("replace into `xiaozu_searchlog` values('153',0xe9a5aee69699,'1455678936');");
E_D("replace into `xiaozu_searchlog` values('166',0xe9b29ce88ab1,'1452431550');");
E_D("replace into `xiaozu_searchlog` values('17311',0xe5908ce59f8ee5a496e58d96,'1508981541');");
E_D("replace into `xiaozu_searchlog` values('17310',0xe280a6,'1509002938');");
E_D("replace into `xiaozu_searchlog` values('17310',0x2e,'1509002943');");

require("../../inc/footer.php");
?>