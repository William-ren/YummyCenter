<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_helpbuy`;");
E_C("CREATE TABLE `xiaozu_helpbuy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '帮我买物品类型',
  `description` varchar(50) DEFAULT NULL COMMENT '帮我买物品类型描述',
  `imgurl` varchar(200) NOT NULL COMMENT '图片路径',
  `isnotsee` int(1) NOT NULL DEFAULT '0' COMMENT '是否隐藏 1隐藏 0不隐藏',
  `orderid` int(10) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_helpbuy` values('1',0xe4b9b0e5b08fe59083,0xe7be8ee591b3e59ca8e8baabe69781,0x2f75706c6f61642f676f6f64732f32303137303630353134323831343237342e6a7067,'0','2');");
E_D("replace into `xiaozu_helpbuy` values('2',0xe4b9b0e7839fe98592,0xe98082e9878fe69bb4e680a1e68385,0x2f75706c6f61642f676f6f64732f32303137303431333135333931373534392e706e67,'0','0');");
E_D("replace into `xiaozu_helpbuy` values('3',0xe4b9b0e6b0b4e69e9c,0xe5a49ae59083e581a5e5bab7e8bf98e5878fe882a5e59388e59388e59388,0x2f75706c6f61642f676f6f64732f32303137303432373232303132393635362e706e67,'0','3');");
E_D("replace into `xiaozu_helpbuy` values('4',0xe4b9b0e59296e595a1,0xe58d88e5908ee5a5bde998b3e58589,0x2f75706c6f61642f676f6f64732f32303137303432373232303232313434302e706e67,'0','4');");
E_D("replace into `xiaozu_helpbuy` values('5',0xe4b9b0e697a5e794a8,0xe5ae85e4babae4bebfe588a9e5ba97,0x2f75706c6f61642f676f6f64732f32303137303432373232303331313739362e706e67,'0','5');");
E_D("replace into `xiaozu_helpbuy` values('6',0xe4b9b0e88dafe59381,0xe88dafe588b0e79785e999a4,0x2f75706c6f61642f676f6f64732f32303137303432373232303335353239352e706e67,'0','1');");

require("../../inc/footer.php");
?>