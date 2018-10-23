<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_shophui`;");
E_C("CREATE TABLE `xiaozu_shophui` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '规则名称',
  `limittype` int(1) NOT NULL COMMENT '是否指定具体时间1否2指定星期3指定小时',
  `limitweek` varchar(255) NOT NULL COMMENT '具体时间：周几',
  `limittimes` text NOT NULL COMMENT '限制每天具体时间',
  `mjlimitcost` int(11) NOT NULL COMMENT '每满费用金额',
  `limitzhekoucost` int(11) NOT NULL COMMENT '折扣限制金额',
  `controltype` int(1) NOT NULL COMMENT '规则类型：1赠，3折扣，2减费用',
  `controlcontent` int(20) DEFAULT NULL COMMENT '限制内容填写赠品ID，折扣率，费用等大于0',
  `starttime` int(11) NOT NULL COMMENT '开始时间',
  `endtime` int(11) NOT NULL COMMENT '结束时间',
  `status` tinyint(1) NOT NULL COMMENT '状态1有效 2无效',
  `shopid` int(20) NOT NULL COMMENT '店铺id',
  `signid` int(20) NOT NULL,
  `cattype` int(1) NOT NULL DEFAULT '1' COMMENT '1外卖 2订台',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_shophui` values('73',0xe997aae683a0e6a087e9a298,'2',0x322c34,0x31322d3136,'100','0','2','1','1508860800','1509465599','1','884','0','0');");
E_D("replace into `xiaozu_shophui` values('74',0x3f,'1','','','0','0','4','0','1506960000','1509638399','1','887','0','1');");

require("../../inc/footer.php");
?>