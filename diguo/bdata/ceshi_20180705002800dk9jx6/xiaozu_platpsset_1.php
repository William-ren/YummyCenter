<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_platpsset`;");
E_C("CREATE TABLE `xiaozu_platpsset` (
  `cityid` int(12) NOT NULL COMMENT '城市ID',
  `locationradius` int(5) NOT NULL COMMENT '配送半径',
  `radiusvalue` text NOT NULL COMMENT '配送设置序列化值',
  `psycostset` int(1) NOT NULL COMMENT '配送员提成设置 1固定提成 2 比例提成',
  `psycost` decimal(10,2) NOT NULL COMMENT '配送员固定提成金额',
  `psybili` varchar(10) NOT NULL COMMENT '配送员固定提成比例',
  `waimai_psrange` text NOT NULL COMMENT '平台配送范围坐标集',
  `pttopsb` int(1) DEFAULT '2',
  `ptpsblink` varchar(100) DEFAULT NULL,
  `ptpsbaccid` varchar(10) DEFAULT NULL,
  `ptpsbkey` varchar(100) DEFAULT NULL,
  `ptpsbcode` varchar(100) DEFAULT NULL,
  `wxkefu_open` int(1) DEFAULT '0',
  `wxkefu_ewm` text,
  `wxkefu_phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='平台配送设置表'");
E_D("replace into `xiaozu_platpsset` values('410100','10',0x613a31303a7b693a303b733a313a2231223b693a313b733a313a2231223b693a323b733a313a2231223b693a333b733a313a2231223b693a343b733a313a2231223b693a353b733a313a2231223b693a363b733a313a2231223b693a373b733a313a2231223b693a383b733a313a2231223b693a393b733a313a2231223b7d,'1','3.00',0x3830,0x5b5b3131332e3238323030352c33342e39343237325d2c5b3131332e3039323439312c33342e39343237325d2c5b3131332e3034343432362c33342e3737353934345d2c5b3131332e3138383632312c33342e3730393336355d2c5b3131332e3737393133372c33342e3632353738335d2c5b3131332e3932383832352c33342e3531313536395d2c5b3131342e3236393430322c33342e35333133375d2c5b3131342e3231373231362c33342e3937313938345d2c5b3131342e3234303536332c33352e3039303035385d2c5b3131332e3533343639312c33352e3034323834385d5d235b5b3131332e3037313230352c33342e3631373837335d2c5b3131332e3339353330322c33342e3437383734365d2c5b3131332e3339363637352c33342e3639363934365d2c5b3131332e3339363637352c33342e3639363934365d5d235b5b3131332e3037313230352c33342e3631373837335d2c5b3131332e3339353330322c33342e3437383734365d2c5b3131332e3339363637352c33342e3639363934365d2c5b3131332e3339363637352c33342e3639363934365d5d,'1',0x687474703a2f2f64656d6f2e706569736f6e6762616f2e636f6d,0x333039,0x327a7037786131656733637471346367,0x6135373163343566343438346665393931643933633739653738353638663637,'1',0x2f75706c6f61642f676f6f64732f32303137313031373137303633363932352e6a7067,0x303737382d32323030393139);");
E_D("replace into `xiaozu_platpsset` values('450100','10',0x613a31303a7b693a303b693a303b693a313b693a303b693a323b693a303b693a333b693a303b693a343b693a303b693a353b693a303b693a363b693a303b693a373b693a303b693a383b693a303b693a393b693a303b7d,'1','0.00','0',0x5b5b3130372e3937353834322c32332e3038373631395d2c5b3130372e3838393332342c32322e3635323334355d2c5b3130382e3336343438332c32322e3534323034315d2c5b3130392e3032303931362c32322e3633383430335d2c5b3130382e3436313938372c32332e3139343935375d5d,'2','','0','','','0',0x2f75706c6f61642f676f6f64732f32303137313132333137353233353232382e706e67,0x3130303030303030303030);");

require("../../inc/footer.php");
?>