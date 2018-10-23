<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_task`;");
E_C("CREATE TABLE `xiaozu_task` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `taskname` varchar(100) NOT NULL,
  `tasktype` int(1) NOT NULL,
  `taskusertype` int(1) NOT NULL,
  `tasklimit` text NOT NULL,
  `start_id` int(20) NOT NULL,
  `end_id` int(20) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  `othercontent` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_task` values('12',0xe5a496e58d96e4baba,'2','1','','0','0',0xe6aca2e8bf8ee4bdbfe794a8e5a496e58d96e4baba3c6272202f3e,'0',0xe7bea4e58f91e79fade4bfa1e6a0b9e68daee69da1e4bbb6efbc9a);");
E_D("replace into `xiaozu_task` values('14',0xe5a496e58d96e7babf,'2','1','','0','0',0xe79a84e5a48de59088e882a5e8bf98e58f91e8bf98e58f91,'0',0xe7bea4e58f91e79fade4bfa1e6a0b9e68daee69da1e4bbb6efbc9a);");
E_D("replace into `xiaozu_task` values('15',0xe6b58be8af95,'2','2',0x3135393338313639313630,'0','0',0xe7b3bbe7bb9fe6b58be8af95,'0',0xe7bea4e58f91e79fade4bfa1e68c87e5ae9ae5afb9e8b1a13a3135393338313639313630);");
E_D("replace into `xiaozu_task` values('16',0x313233313233,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x3231333132333132,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('17',0x323133,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x313233,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('18',0x3231333233,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x313233313233,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('19',0x323133,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x313233,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('21',0x32323232323232323232323232323232,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x3131313131313131313131313131313131313131313131,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('22',0x6a6a6a6a,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x6a6a6a,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('23',0x3131313131313131313131313131,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x313131313131,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('24',0x3232323232323232323232,'1','2',0x3735323931343332314071712e636f6d,'0','0',0x32323232323232,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a3735323931343332314071712e636f6d);");
E_D("replace into `xiaozu_task` values('26',0x3131313131313131313131,'1','2',0x333237313739343632314071712e636f6d,'0','0',0x333237313739343632314071712e636f6d,'2',0xe7bea4e58f91e982aee4bbb6e68c87e5ae9ae5afb9e8b1a13a333237313739343632314071712e636f6d);");
E_D("replace into `xiaozu_task` values('36',0x313233,'2','2',0x3138363035313037333033,'0','0',0x3132333132333c6272202f3e,'0',0xe7bea4e58f91e79fade4bfa1e68c87e5ae9ae5afb9e8b1a13a3138363035313037333033);");

require("../../inc/footer.php");
?>