<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_oauth`;");
E_C("CREATE TABLE `xiaozu_oauth` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `addtime` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_oauth` values('13','16803',0x3846434539373645443733414444434431364237413130423935434442453234,0x4134443738313337364437314635304445443836463933303445324644333937,0x7171,'1505984664');");
E_D("replace into `xiaozu_oauth` values('14','13653',0x3346393043424136344434304642424546304330433342333741303441454341,0x4343454143463841324639433835453630343145463441323235413933354530,0x7171,'1506154748');");
E_D("replace into `xiaozu_oauth` values('15','11642',0x3235414531383037413035333332324337313144373732444132343338384242,0x4130344133424544453636304237363836353933353731463631324337353241,0x7171,'1506160973');");
E_D("replace into `xiaozu_oauth` values('16','16863',0x3341424434424135434339413634323539383131343532343733343735363545,0x3045443232343036314434383538333733363731303246464139374441413532,0x7171,'1506176386');");
E_D("replace into `xiaozu_oauth` values('17','4245','',0x4437413242423137373232354134444343333333344343303243414135313338,0x7171,'1506215554');");
E_D("replace into `xiaozu_oauth` values('18','16989','',0x3436463034363532464334334530304537333836413042373835454143333938,0x7171,'1506481145');");
E_D("replace into `xiaozu_oauth` values('19','17037',0x3835454341453337463730393338344531383144363942343839343041323144,0x3441323541413346393031334243454541413742373645423631344545383941,0x7171,'1506651809');");
E_D("replace into `xiaozu_oauth` values('20','17043',0x4631383332354246384136433530373034443431414638423934313933333139,0x3044453737373739424437423230444443413846463332303434303935353533,0x7171,'1506661853');");
E_D("replace into `xiaozu_oauth` values('21','17050','',0x3046353130373531424142383045333145463345304432304136424433333333,0x7171,'1506676386');");
E_D("replace into `xiaozu_oauth` values('22','17119','',0x4141353233454144463937444141343243433133373333343531453733454431,0x7171,'1506724388');");
E_D("replace into `xiaozu_oauth` values('23','17120','',0x3742353131463144444536343546444230354143324441394438423634324536,0x7171,'1506726107');");
E_D("replace into `xiaozu_oauth` values('24','13247','',0x3044423242314545364543463835353038314230313837304444413842423532,0x7171,'1506735218');");
E_D("replace into `xiaozu_oauth` values('25','17168','',0x3637334545343438453537433744443744394344453833373045313533373531,0x7171,'1506760818');");
E_D("replace into `xiaozu_oauth` values('26','17030','',0x3731384634313635333530373843323638374432423131383143303635423334,0x7171,'1506792188');");
E_D("replace into `xiaozu_oauth` values('27','17195','',0x3632303745393938313234333642394530304338354242333338353431303545,0x7171,'1506858727');");
E_D("replace into `xiaozu_oauth` values('28','17200','',0x4445364532363346423546413539324635434439464245383933453841353231,0x7171,'1506871337');");

require("../../inc/footer.php");
?>