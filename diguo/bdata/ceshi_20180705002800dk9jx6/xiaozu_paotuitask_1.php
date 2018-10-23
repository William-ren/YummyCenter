<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_paotuitask`;");
E_C("CREATE TABLE `xiaozu_paotuitask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dno` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `addtime` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 未处理  1已接受 2 已完成3取消订单',
  `ordertype` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_paotuitask` values('9','','6',0xe5a1abe58699e682a8e79a84e8b791e885bfe99c80e6b182efbc8ce5a682e99c80e8a681e8b4ade4b9b0e4bb80e4b988e4b89ce8a5bfe38081e99c80e8a681e98081e4bb80e4b988e8b4a7e38081e99c80e8a681e58a9ee4bb80e4b988e4ba8be7ad89,0xe69d8ee5b08fe5a790,0xe98391e5b79ee5b882e4b8ade58e9fe58cba,0x3138333336303330303030,'1437611287','2','3',0x3132372e302e302e31e69cace69cbae59cb0e59d80);");
E_D("replace into `xiaozu_paotuitask` values('10',0x3134333736313333373736323733,'6',0xe5a4a7e79a84e69292e68993e7ae97e79a84e69292e79a84e890a8e8bebee79a84e890a8e8bebe,0x73616464736164,0x316464736164617364617364,0x3138333336303930373937,'1437613377','0','3',0x3132372e302e302e31e69cace69cbae59cb0e59d80);");
E_D("replace into `xiaozu_paotuitask` values('11',0x3134333736313536323737363337,'6',0x65646177657761,0xe69d8ee5b08fe5a790,0x33323131323231323231,0x3138333336303930373937,'1437615627','1','3',0x3132372e302e302e31e69cace69cbae59cb0e59d80);");

require("../../inc/footer.php");
?>