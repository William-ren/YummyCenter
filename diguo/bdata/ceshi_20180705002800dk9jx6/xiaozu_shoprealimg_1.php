<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shoprealimg`;");
E_C("CREATE TABLE `xiaozu_shoprealimg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) NOT NULL,
  `img` varchar(250) NOT NULL,
  `imgname` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=209 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shoprealimg` values('206','171',0x2f75706c6f61642f73686f707265616c696d672f32303137313032353131313830333133342e676966,0x32303137313032353131313830333133342e676966);");
E_D("replace into `xiaozu_shoprealimg` values('207','172',0x2f75706c6f61642f73686f707265616c696d672f32303137313032363135313531323933392e6a7067,0x32303137313032363135313531323933392e6a7067);");
E_D("replace into `xiaozu_shoprealimg` values('208','171',0x2f75706c6f61642f73686f707265616c696d672f32303137313032363136313835373735312e6a7067,0x32303137313032363136313835373735312e6a7067);");

require("../../inc/footer.php");
?>