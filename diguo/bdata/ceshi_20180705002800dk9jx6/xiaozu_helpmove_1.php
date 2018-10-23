<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_helpmove`;");
E_C("CREATE TABLE `xiaozu_helpmove` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '帮我买物品类型',
  `imgurl` varchar(200) NOT NULL COMMENT '图片路径',
  `isnotsee` int(1) NOT NULL DEFAULT '0' COMMENT '是否隐藏 1隐藏 0不隐藏',
  `orderid` int(10) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_helpmove` values('1',0xe9b29ce88ab1e89b8be7b395,0x2f75706c6f61642f676f6f64732f32303137303432373232313034353939322e706e67,'0','1');");
E_D("replace into `xiaozu_helpmove` values('2',0xe9a490e9a5ae,0x2f75706c6f61642f676f6f64732f32303137303432373232303935333537322e706e67,'0','2');");
E_D("replace into `xiaozu_helpmove` values('3',0xe69e9ce894ace7949fe9b29c,0x2f75706c6f61642f676f6f64732f32303137303432373232303934333739362e706e67,'0','3');");
E_D("replace into `xiaozu_helpmove` values('4',0xe69687e4bbb6e5a4b9,0x2f75706c6f61642f676f6f64732f32303137303432373232313132343132302e706e67,'0','4');");
E_D("replace into `xiaozu_helpmove` values('5',0xe794b5e5ad90e4baa7e59381,0x2f75706c6f61642f676f6f64732f32303137303432373232313230323938342e706e67,'0','5');");
E_D("replace into `xiaozu_helpmove` values('6',0xe992a5e58c99,0x2f75706c6f61642f676f6f64732f32303137303432373232313330383231322e706e67,'0','6');");
E_D("replace into `xiaozu_helpmove` values('7',0xe69c8de9a5b0,0x2f75706c6f61642f676f6f64732f32303137303432373232313531353635312e706e67,'0','7');");
E_D("replace into `xiaozu_helpmove` values('8',0xe585b6e4bb96,0x2f75706c6f61642f676f6f64732f32303137303432373232313632343336362e706e67,'0','8');");

require("../../inc/footer.php");
?>