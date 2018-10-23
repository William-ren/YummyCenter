<?php 

/**
  关键字搜索   
 */
class searchkey
{
	 private $mysql;//数据库连接
   private $error; //错误提示
   private $id;//
   private $type; //搜索类型
   private $goid; //ID
   private $keycontent; //搜索内容
   private $firstM; //转换汉字首字母连接  其他为空
   private $keytoword;//转换结果 包含汉字转换拼音   其他 转换小写  如果汉字中包含大小写则没转换；
   private $typearray = array('1','2','3','4','5');// 1外卖  2订台  3 商城   '4'=>普通商品 5= 商城商品
   private $acount;//数量
   private $shopid;//店铺ID  默认为0
   
	 
	 function __construct($sqls){ 	 
	    $this->mysql = $sqls;  
	    $this->firstM = '';
   }
    //设置数据
   function setdata($type='',$goid=0,$keycontent='',$shopid=0){
   	 $this->type=$type;
   	 $this->goid = $goid;
   	 $this->keycontent = $keycontent;  
	   $this->error = ''; 
	   $this->acount = 0;
   	 $this->tracert();
   	 $this->shopid = $shopid;
   }
   //转换传入字符串为搜索字符
   function tracert(){
   	 
   	 if(preg_match("/([\x81-\xfe][\x40-\xfe])/", $this->keycontent, $match)) {
           $this->Pinyin($this->keycontent); 
     } else {
        $this->keytoword = strtolower($this->keycontent);
     }
     $this->Pinyin($this->keycontent); 
   }
   function Restring(){//返回转换后的字符串
     return $this->keytoword;
   }
   function Refstring(){//首字母
   	 return $this->firstM;
   }
   function Reid(){//返回ID
      return $this->id;
   }
   function Reacount(){//返回ID
      return $this->acount;
   }
   function error(){
   	return $this->error;
  }
   function save(){
   	   if(!in_array($this->type,$this->typearray)){
   	   	   $this->error = '类型不能为空';
   	   	return false;
   	   }elseif($this->goid <  1){
   	   	    $this->error = '对应操作ID不能为空';
   	   	return false;
   	   }elseif(empty($this->keycontent)){
   	   	 $this->error = '搜索关键字不能为空';
   	   	 return false;
   	   }else{
   	   	 //写数据
   	   	 //首先删除数据  然后插入数据;
   	   	 $this->mysql->delete(Mysite::$app->config['tablepre'].'searkey',"type =".$this->type." and goid = ".$this->goid."");//type
   	   	 $data['type'] = $this->type;
   	   	 $data['goid'] = $this->goid;
   	   	 $data['title'] = $this->keycontent;
   	   	 
   	   	 $data['keycontent'] = $this->keytoword;
   	   	 $this->mysql->insert(Mysite::$app->config['tablepre'].'searkey',$data); 
   	   	 
   	   	 
   	   	 //当汉字首字母索引 不为空时
   	   	 if(!empty($this->firstM)){
   	   	 	 $data['keycontent'] = $this->firstM;
   	   	 	 $this->mysql->insert(Mysite::$app->config['tablepre'].'searkey',$data); 
   	   	 }
   	   	 return true;
   	   }
   }
   function del(){
   	  if(!empty($this->type)){
   	    $this->mysql->delete(Mysite::$app->config['tablepre'].'searkey',"type =".$this->type." and goid = ".$this->goid."");//删除搜索值
   	  }else{
   	  	 $this->mysql->delete(Mysite::$app->config['tablepre'].'searkey',"goid = ".$this->goid."");//goid的所有值
   	  }
   }
   //查询结果数组
   function search($pagenum=0,$pagesize=10){ 
   	  if(empty($this->keycontent)){ 
   	    return array();
   	  }elseif(!in_array($this->type,$this->typearray)){
   	  	return array();
   	  }else{//keycontent REGEXP '"."^".$this->keytoword."'
   	  	if($this->shopid > 0){
   	  		$querydata =   $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."searkey where keycontent REGEXP '".$this->keytoword."'  and type=".$this->type."  GROUP BY goid ORDER BY goid ASC limit ".$pagenum." ,".$pagesize." ");
   	      $this->acount = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."searkey where keycontent REGEXP '".$this->keytoword."' and type=".$this->type."   GROUP BY goid ");
   	      return $querydata;
   	  	}else{
   	      $querydata =   $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."searkey where keycontent REGEXP '".$this->keytoword."'  and type=".$this->type." GROUP BY goid ORDER BY goid ASC limit ".$pagenum." ,".$pagesize." ");
   	      $this->acount = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."searkey where keycontent REGEXP '".$this->keytoword."' and type=".$this->type." GROUP BY goid ");
   	      return $querydata;
   	   }
   	  }
   }  
   function Pinyin($_String, $_Code='UTF8'){ 
      $this->firstM = '';
      $_DataKey = "a|ai|an|ang|ao|ba|bai|ban|bang|bao|bei|ben|beng|bi|bian|biao|bie|bin|bing|bo|bu|ca|cai|can|cang|cao|ce|ceng|cha".

                      "|chai|chan|chang|chao|che|chen|cheng|chi|chong|chou|chu|chuai|chuan|chuang|chui|chun|chuo|ci|cong|cou|cu|".

                      "cuan|cui|cun|cuo|da|dai|dan|dang|dao|de|deng|di|dian|diao|die|ding|diu|dong|dou|du|duan|dui|dun|duo|e|en|er".

                      "|fa|fan|fang|fei|fen|feng|fo|fou|fu|ga|gai|gan|gang|gao|ge|gei|gen|geng|gong|gou|gu|gua|guai|guan|guang|gui".

                      "|gun|guo|ha|hai|han|hang|hao|he|hei|hen|heng|hong|hou|hu|hua|huai|huan|huang|hui|hun|huo|ji|jia|jian|jiang".

                      "|jiao|jie|jin|jing|jiong|jiu|ju|juan|jue|jun|ka|kai|kan|kang|kao|ke|ken|keng|kong|kou|ku|kua|kuai|kuan|kuang".

                      "|kui|kun|kuo|la|lai|lan|lang|lao|le|lei|leng|li|lia|lian|liang|liao|lie|lin|ling|liu|long|lou|lu|lv|luan|lue".

                      "|lun|luo|ma|mai|man|mang|mao|me|mei|men|meng|mi|mian|miao|mie|min|ming|miu|mo|mou|mu|na|nai|nan|nang|nao|ne".

                      "|nei|nen|neng|ni|nian|niang|niao|nie|nin|ning|niu|nong|nu|nv|nuan|nue|nuo|o|ou|pa|pai|pan|pang|pao|pei|pen".

                      "|peng|pi|pian|piao|pie|pin|ping|po|pu|qi|qia|qian|qiang|qiao|qie|qin|qing|qiong|qiu|qu|quan|que|qun|ran|rang".

                      "|rao|re|ren|reng|ri|rong|rou|ru|ruan|rui|run|ruo|sa|sai|san|sang|sao|se|sen|seng|sha|shai|shan|shang|shao|".

                      "she|shen|sheng|shi|shou|shu|shua|shuai|shuan|shuang|shui|shun|shuo|si|song|sou|su|suan|sui|sun|suo|ta|tai|".

                      "tan|tang|tao|te|teng|ti|tian|tiao|tie|ting|tong|tou|tu|tuan|tui|tun|tuo|wa|wai|wan|wang|wei|wen|weng|wo|wu".

                      "|xi|xia|xian|xiang|xiao|xie|xin|xing|xiong|xiu|xu|xuan|xue|xun|ya|yan|yang|yao|ye|yi|yin|ying|yo|yong|you".

                      "|yu|yuan|yue|yun|za|zai|zan|zang|zao|ze|zei|zen|zeng|zha|zhai|zhan|zhang|zhao|zhe|zhen|zheng|zhi|zhong|".

                      "zhou|zhu|zhua|zhuai|zhuan|zhuang|zhui|zhun|zhuo|zi|zong|zou|zu|zuan|zui|zun|zuo";

      $_DataValue = "-20319|-20317|-20304|-20295|-20292|-20283|-20265|-20257|-20242|-20230|-20051|-20036|-20032|-20026|-20002|-19990".

                      "|-19986|-19982|-19976|-19805|-19784|-19775|-19774|-19763|-19756|-19751|-19746|-19741|-19739|-19728|-19725".

                      "|-19715|-19540|-19531|-19525|-19515|-19500|-19484|-19479|-19467|-19289|-19288|-19281|-19275|-19270|-19263".

                      "|-19261|-19249|-19243|-19242|-19238|-19235|-19227|-19224|-19218|-19212|-19038|-19023|-19018|-19006|-19003".

                      "|-18996|-18977|-18961|-18952|-18783|-18774|-18773|-18763|-18756|-18741|-18735|-18731|-18722|-18710|-18697".

                      "|-18696|-18526|-18518|-18501|-18490|-18478|-18463|-18448|-18447|-18446|-18239|-18237|-18231|-18220|-18211".

                      "|-18201|-18184|-18183|-18181|-18012|-17997|-17988|-17970|-17964|-17961|-17950|-17947|-17931|-17928|-17922".

                      "|-17759|-17752|-17733|-17730|-17721|-17703|-17701|-17697|-17692|-17683|-17676|-17496|-17487|-17482|-17468".

                      "|-17454|-17433|-17427|-17417|-17202|-17185|-16983|-16970|-16942|-16915|-16733|-16708|-16706|-16689|-16664".

                      "|-16657|-16647|-16474|-16470|-16465|-16459|-16452|-16448|-16433|-16429|-16427|-16423|-16419|-16412|-16407".

                      "|-16403|-16401|-16393|-16220|-16216|-16212|-16205|-16202|-16187|-16180|-16171|-16169|-16158|-16155|-15959".

                      "|-15958|-15944|-15933|-15920|-15915|-15903|-15889|-15878|-15707|-15701|-15681|-15667|-15661|-15659|-15652".

                      "|-15640|-15631|-15625|-15454|-15448|-15436|-15435|-15419|-15416|-15408|-15394|-15385|-15377|-15375|-15369".

                      "|-15363|-15362|-15183|-15180|-15165|-15158|-15153|-15150|-15149|-15144|-15143|-15141|-15140|-15139|-15128".

                      "|-15121|-15119|-15117|-15110|-15109|-14941|-14937|-14933|-14930|-14929|-14928|-14926|-14922|-14921|-14914".

                      "|-14908|-14902|-14894|-14889|-14882|-14873|-14871|-14857|-14678|-14674|-14670|-14668|-14663|-14654|-14645".

                      "|-14630|-14594|-14429|-14407|-14399|-14384|-14379|-14368|-14355|-14353|-14345|-14170|-14159|-14151|-14149".

                      "|-14145|-14140|-14137|-14135|-14125|-14123|-14122|-14112|-14109|-14099|-14097|-14094|-14092|-14090|-14087".

                      "|-14083|-13917|-13914|-13910|-13907|-13906|-13905|-13896|-13894|-13878|-13870|-13859|-13847|-13831|-13658".

                      "|-13611|-13601|-13406|-13404|-13400|-13398|-13395|-13391|-13387|-13383|-13367|-13359|-13356|-13343|-13340".

                      "|-13329|-13326|-13318|-13147|-13138|-13120|-13107|-13096|-13095|-13091|-13076|-13068|-13063|-13060|-12888".

                      "|-12875|-12871|-12860|-12858|-12852|-12849|-12838|-12831|-12829|-12812|-12802|-12607|-12597|-12594|-12585".

                      "|-12556|-12359|-12346|-12320|-12300|-12120|-12099|-12089|-12074|-12067|-12058|-12039|-11867|-11861|-11847".

                      "|-11831|-11798|-11781|-11604|-11589|-11536|-11358|-11340|-11339|-11324|-11303|-11097|-11077|-11067|-11055".

                      "|-11052|-11045|-11041|-11038|-11024|-11020|-11019|-11018|-11014|-10838|-10832|-10815|-10800|-10790|-10780".

                      "|-10764|-10587|-10544|-10533|-10519|-10331|-10329|-10328|-10322|-10315|-10309|-10307|-10296|-10281|-10274".

                      "|-10270|-10262|-10260|-10256|-10254";

      $_TDataKey   = explode('|', $_DataKey);

      $_TDataValue = explode('|', $_DataValue);

      $_Data = array_combine($_TDataKey, $_TDataValue);

      arsort($_Data);

      reset($_Data);

      if($_Code!= 'gb2312') $_String = $this->_U2_Utf8_Gb($_String);

      $_Res = '';

      for($i=0; $i < strlen($_String); $i++) {

              $_P = ord(substr($_String, $i, 1));

              if($_P>160) {

                      $_Q = ord(substr($_String, ++$i, 1)); $_P = $_P*256 + $_Q - 65536;
                       
              } 
              $_Res .= $this->_Pinyin($_P, $_Data);

      }
       
      $this->keytoword=preg_replace("/[^a-z0-9]*/", '', $_Res);

   } 
   function _Pinyin($_Num, $_Data){
   
         if($_Num>0 && $_Num<160 ){
                 
                 return chr($_Num);
   
         }elseif($_Num<-20319 || $_Num>-10247){
   
                 return '';
   
         }else{
   
                 foreach($_Data as $k=>$v){ 
                 	if($v<=$_Num) break; 
                 	
                  
                 }
                 
                 $this->firstM .= substr( $k, 0, 1 ); 
                 return $k;
   
         }
   
   }
   //转换编码
   function _U2_Utf8_Gb($_C){
   
         $_String = '';
   
         if($_C < 0x80){
   
                 $_String .= $_C;
   
         }elseif($_C < 0x800) {
   
                 $_String .= chr(0xC0 | $_C>>6);
   
                 $_String .= chr(0x80 | $_C & 0x3F);
   
         }elseif($_C < 0x10000){
   
                 $_String .= chr(0xE0 | $_C>>12);
   
                 $_String .= chr(0x80 | $_C>>6 & 0x3F);
   
                 $_String .= chr(0x80 | $_C & 0x3F);
   
         }elseif($_C < 0x200000) {
   
                 $_String .= chr(0xF0 | $_C>>18);
   
                 $_String .= chr(0x80 | $_C>>12 & 0x3F);
   
                 $_String .= chr(0x80 | $_C>>6 & 0x3F);
   
                 $_String .= chr(0x80 | $_C & 0x3F);
   
         } 

       if(function_exists(mb_convert_encoding)){
           return mb_convert_encoding($_String, 'GB2312','UTF-8');
       }else if(function_exists(iconv)){
           return iconv('UTF-8',$_String, 'GB2312');
       }else{
           return ' ';
       }
   
   }

}
?>