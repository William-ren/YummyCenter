<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaozu_stationadmininfo`;");
E_C("CREATE TABLE `xiaozu_stationadmininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(12) NOT NULL COMMENT '分站用户UID',
  `stationname` varchar(255) NOT NULL COMMENT '分站名称',
  `stationusername` varchar(50) NOT NULL COMMENT '分站负责人',
  `stationphone` varchar(30) NOT NULL COMMENT '分站电话',
  `cityid` int(12) NOT NULL COMMENT '所属城市ID',
  `stationlnglat` varchar(100) NOT NULL COMMENT '分站坐标',
  `stationaddress` varchar(255) NOT NULL COMMENT '分站地址',
  `orderid` int(12) NOT NULL COMMENT '排序ID',
  `stationis_open` int(1) NOT NULL COMMENT '是否开启 默认0开启1关闭',
  `is_selfsitecx` int(1) DEFAULT '0' COMMENT '是否允许分站自行设置促销规则  1允许  0不允许',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8");
E_D("replace into `xiaozu_stationadmininfo` values('2','192',0xe696b0e4b9a1e5b882e58886e7ab99,0xe585b3e7bebd,0x3135383636363636363636,'410700','',0xe696b0e4b9a1e5b882e7baa2e69797e58cbae5a4a7e5ada6e59f8e,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('3','193',0xe98391e5b79ee58886e7ab99,0xe69d8ee59fb9e6aca3,0x3138383838383838383838,'410100','',0xe98391e5b79ee5b882e4b8ade58e9fe58cba,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('86','298',0xe59b9be5b9b3,0xe59b9be5b9b3,0x3135323132333435363738,'220300','',0xe59b9be5b9b3,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('72','277',0x637a,0xe7b396e9868b,0x31383838383838,'320400','',0xe5b8b8e5b79ee5a4a9e5ae81,'2','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('73','278',0x313233343536,0x313233313233,0x313233313233,'652327','',0xe59089e69ca8e890a8e5b094e58ebf,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('8','198',0xe8aeb8e6988ce7ab99,0xe69bb9e6938d,0x3138353235323532353535,'411000','',0xe8aeb8e6988ce69bb9e6938de5ba9c,'6','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('9','199',0xe8a5bfe5ae89e7ab99,0xe5bca0e9a39e,0x3138353235323532353535,'610100','',0xe8a5bfe5ae89e9bc93e6a5bc,'9','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('17','207',0xe697a0e994a1,0xe68891e9b985e9b985e9b985,0x313131313332323232323232323232323232,'320200','',0xe697a0e994a1e5b882,'1','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('74','279',0x737373,0x737373,0x313132323133323132,'650100','',0xe4ba8ce6898be79a84e688bfe5b18b,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('75','280',0x313233343536,0x313233343536,0x313233343536,'140882','',0xe7be8ee59bbd,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('76','281',0xe5a4a9e6b4a5e7ab99,0xe99988e6809d,0x3135303030303030303030,'120000','',0xe5a4a9e6b4a5e5b882,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('77','285',0xe5a4a9e5a4a9,0xe5a4a9e5a4a9,0x3135353232323232323232,'320100','',0xe5a4a7e696b9e79a84e8afb4e6b395,'1','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('82','291',0xe58d97e998b3e7ab99,0xe99988e99988,0x3133323536323331323435,'411300','',0xe5928ce5b9b3e58cba,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('79','287',0xe4b8ade5a4a7,0xe79a84,0x3132333233343333343333,'440100','',0x31,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('91','305',0xe591a8e58fa3e5b882,0xe98391e69993e5a89f,0x313130,'411600','',0x636974796964,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('112','338',0x3332313233,0x3332313233,0x3332313233,'441200','',0x3332313233,'321','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('88','300',0xe5ae81e6b3a2e5b882,0xe78e8be58588e7949f,0x3133313131313131313131,'653127','',0xe5ae81e6b3a2e5b882323335,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('84','296',0xe5ae89e998b331e7ab99,0xe5ae89e998b3,0x3135313337313737313038,'410500','',0xe5ae89e998b3e5b882e7a791e5ada6e5a4a7e98193,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('85','297',0xe99381e5b2ad,0xe99381e99381,0x3135353135353135353535,'211200','',0xe99381e5b2ade5b882e998b3e58589e5a4a7e98193313030e58fb7,'2','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('87','299',0xe5b7a9e4b989e58589e59088,0xe5b7a9e4b989e4baba,0x3133383338303137393733,'410181','',0xe6b2b3e58d97e79c81e5b7a9e4b989e5b882e696b0e58d8ee8b7af3331e58fb7,'5','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('89','302',0x6378346374,0x6378346374,0x6378346374,'450000','',0x6378346374,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('90','304',0xe585ace4b8bbe5b2ade5b882e58886e7ab99,0xe8a880e8afad,0x3133353936363336333536,'220381','',0xe585ace4b8bbe5b2ade5b882,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('92','307',0xe4b88ae6b5b7e5b882,0xe6b288e79287,0x313230,'310000','',0xe9bb84e6b5a6e58cbae4b8ade5b1b1e4b89ce4b880e8b7af3138e58fb7e5a496e6bba93138e58fb731e6a5bc,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('93','308',0x313233343536,0xe69d9ce4bc9fe58d8e,0x3135383234383930393738,'411500','',0xe4bfa1e998b3e5b882,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('94','309',0x73756e,0x73756e,0x3138363438353231343531,'440300','',0xe782b9e782b9e6bbb4e6bbb4,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('95','311',0x78696e6779616e67,0xe5bca0e4b889,0x3133363535353535353535,'410182','',0xe4baace59f8ee5a4a7e8a197203536e58fb7,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('98','314',0xe58c97e4baace5b882,0x5348454e5855414e,0x34303039303035383231,'110000','',0xe58c97e4baace5a4a7e585b4e58cbae4baa6e5ba84e88da3e58d8ee59bbde9998535e6a08b32303133e58fb7,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('97','313',0xe585b4e4bb81e58886e7ab99,0x445959,0x3132333434353634343536,'522322','',0xe585b4e4bb81e58ebf,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('99','315',0x3133393334383034383538,0x31323133,0x31323133,'360100','',0x313233,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('100','320',0xe9858de98081e5ae9d,0xe5bca0e4b889,0x3133353835353535353535,'320700','',0xe8bf9ee4ba91e6b8afe5b882e4b8ade5bf83e58cbbe999a2,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('101','322',0xe6b58ee5ae81e5b882,0xe9a9ace8b685,0x3135333135333738353138,'370800','',0xe6a281e5b1b1e58ebf,'1','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('102','323',0xe6b19fe58d97e4b8ade5bf83e58886e7ab99,0xe78e8be59bbd,0x3132333435393837383930,'140200','',0xe5a4bae58f9620202020e4ba94,'99','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('103','324',0xe6b7b1e6b3bde58886e7ab99,0xe4b8ade5a4a9,0x3133323233333039383930,'130128','',0xe6b2b1,'23','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('104','325',0xe98791e6b299e58886e7ab99,0xe69a97e7a4bae6b395,0x3138323132333133323731,'520000','',0xe79a84,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('105','326',0xe5ae9ae5b79ee7ab99,0xe5bca0e4b880,0x3133323237383930393939,'130682','',0xe5ad90e4bd8de7bdae,'34','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('106','328',0x68656c6c6f20776f7264,0xe5bca0e4b889,0x3135383332333434353637,'222400','',0xe5a4a9e6b4a5,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('107','329',0xe5bca0e58c97,0xe5ad99e69f90e69f90,0x3135383332333737353632,'130722','',0xe6b2b3e58c97e79c81e5bca0e5aeb6e58fa3e5b882e5bca0e58c97e58ebf,'15','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('108','333',0xe78fa0e6b5b7e58886e7ab99,0xe99988e680bb,0x3135373132333434333231,'440400','',0xe78fa0e6b5b7e5b882e696b0e9a699e6b4b2,'1','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('109','334',0xe99d92e5b29b,0xe6b58be8af95,0x3133353033393939313632,'370200','',0xe99d92e5b29be5b882e4babae6b091e694bfe5ba9c,'99','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('113','339',0xe68890e983bd,0xe68ea2e590ac,0x30323838363935363539,'510100','',0xe98791e7899be58cbae98791e5ba9ce59bbde99985,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('114','341',0xe681a9e696bd,0xe6b3a2e593a5,0x3135353837353838373738,'422800','',0xe681a9e696bde5b882e888aae7a9bae8b7afe993b6e6b2b3e696b0e69d91e5b08fe58cba,'4','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('115','343',0x636c79323438,0x31313233,0x313233343536,'130602','',0xe4b98ce9b281e69ca8e9bd90e5b882,'0','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('117','347',0xe69886e6988ee7ab99,0xe58898e5b08fe7be8e,0x3133353239313337383430,'530100','',0xe4ba91e58d97e79c81e69886e6988ee5b882e4ba94e58d8ee58cbae79086e5b7a5e5a4a7e5ada6e7a791e68a80e59bade58cba,'100','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('118','352',0xe585b0e5b79ee7ab99,0xe6b58be8af95,0x313233,'620100','',0xe79498e88283,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('119','354',0xe5bc80e58e9fe69e9ce69e9ce7bd91,0xe5bc80e58e9fe69e9ce69e9ce7bd91,0x3133383838383838383838,'211282','',0xe5bc80e58e9fe5b882,'1','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('120','355',0xe88081e78e8be58886e7ab99,0x57,0x3133363330323531363433,'230500','',0xe58f91e5a49ae5b09120e5b9b2e99485,'0','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('121','356',0x66756a69616e,0xe6b58be8af95313131,0x313233343536,'350000','',0xe4babae6b091e694bfe5ba9c,'41111','0','0');");
E_D("replace into `xiaozu_stationadmininfo` values('122','357',0xe58d97e5ae81e7ab99,0x6b6b,0x3133373337303234343535,'450100','',0xe69c9de998b3e5b9bfe59cba,'1','0','1');");
E_D("replace into `xiaozu_stationadmininfo` values('123','358',0xe6b2b3e6b1a0e5b882,0x6b6b,0x3133373337303234343535,'451200','',0xe983bde5ae89e58ebf,'2','0','1');");

require("../../inc/footer.php");
?>