<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_mobile`;");
E_C("CREATE TABLE `xiaozu_mobile` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) NOT NULL,
  `addtime` int(12) NOT NULL,
  `code` varchar(50) NOT NULL,
  `is_send` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_mobile` values('1',0x3135373338383332373132,'1449109151',0x3137323136,'1');");
E_D("replace into `xiaozu_mobile` values('2',0x3133343237313339313236,'1456577448',0x3535323834,'0');");
E_D("replace into `xiaozu_mobile` values('3',0x3138333230333633353636,'1456682692',0x3831323239,'0');");
E_D("replace into `xiaozu_mobile` values('4',0x3138353330303134303836,'1464146539',0x3330363435,'0');");
E_D("replace into `xiaozu_mobile` values('5',0x3133343334363637313034,'1464163592',0x3433353038,'0');");
E_D("replace into `xiaozu_mobile` values('6',0x3133343334363637313034,'1464163826',0x3833323735,'0');");
E_D("replace into `xiaozu_mobile` values('7',0x3133343334363637313034,'1464163985',0x3237333632,'0');");
E_D("replace into `xiaozu_mobile` values('8',0x3133343334363637313034,'1464224931',0x3136363035,'0');");
E_D("replace into `xiaozu_mobile` values('9',0x3138313532353335313131,'1465976046',0x3635303635,'0');");
E_D("replace into `xiaozu_mobile` values('10',0x3135393838393939393838,'1472458456',0x3733313533,'0');");
E_D("replace into `xiaozu_mobile` values('11',0x3138363933343334373335,'1472458547',0x3233393937,'1');");
E_D("replace into `xiaozu_mobile` values('12',0x3138363933343334373335,'1472458739',0x3435303835,'0');");
E_D("replace into `xiaozu_mobile` values('13',0x3133343836343436363134,'1472548171',0x3330393139,'1');");
E_D("replace into `xiaozu_mobile` values('14',0x3133323232323232323232,'1473065184',0x3630343736,'0');");

require("../../inc/footer.php");
?>