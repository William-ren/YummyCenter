<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 00:46:54
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\adminpage\order\adminfastfoods.html" */ ?>
<?php /*%%SmartyHeaderCode:131555b3cf9fe05a2b9-00174845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c247099792461b31becdb47f79f386122f2829a1' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\order\\adminfastfoods.html',
      1 => 1504425844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131555b3cf9fe05a2b9-00174845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'shoplist' => 0,
    'items' => 0,
    'cityname' => 0,
    'toplink' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3cf9fe254d14_26668633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cf9fe254d14_26668633')) {function content_5b3cf9fe254d14_26668633($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 快速订餐-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/commom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/shangjiaAdmin.css" /> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script> 
<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"; 
</script>
 
</head>
<body> 
	<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: -1;background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/background.png);"></div>
  <!---header start--->
	<div class="header">
    	<div class="top">
        	<div class="topLeft fl">
            	<ul class="fr">
                 <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/system/module/index"),$_smarty_tpl);?>
">返回后台管理</a></li>
                </ul>
                 <div class="cl"></div>
            </div>
            <div class="topRight fr"> 
            </div>
            <div class="cl"></div>
            
            
            <div class="shangjiaTop">
            	<div class="sjglorder">
                	
                </div>
            	
            </div>
        </div>
    	
    </div>
    <!---header end--->
   <script>
	$(function(){
		var clientWidth = document.body.clientWidth;
		/*alert(clientWidth);*/
		if( clientWidth<=1349 ){
			
			$(".content").css("width","1240px");
			$(".shopdetlist").removeClass("shopdetlistpos");
			
		}
	});
</script>
 <!------以上是公共的头部部分------->
 
  <!---content start--->
	<div class="content">
   	 	<!---content left start--->
		<div class="shopdetlist shopdetlistpos">
        	 <div class="shoptitle">商家列表</div>
        	 <div class="shoplistli" id="shopdata">
        	 	<ul>
        	 		
        	 	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shoplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			          <li data="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" class="isshow"><?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
</li> 
			        <?php } ?>
			      </ul>
        	 </div>
        	 <div class="seardiv">
        	     <input type="text" name="inputsearch" value="" class="searchinput" placeholder="商家名搜索">
        	 	
        	 </div>
        </div>	
       <!---content left end---> 
       
       
       
       
       
           <!---content right start---> 
        <div class="conRight fr" id="shopinfo" style="minheight:938px;">
        	<!---账单明细 start---> 
        	<div class="menu fl">
            	<div class="menuTitle">
                	<span>快速订餐-CART</span>
                </div>
              
                    <div class="goodshow"  style="height: 522px;">
                    
                        <div class="goodli">
                            <div class="xh"> 
                                <span>数量</span>
                            </div>
                            <div class="cm">
                                 <span>菜名</span>
                            </div>
                            <div class="dj">
                                 <span>单价</span>
                            </div>
                            <div class="je">
                                 <span>金额</span>
                            </div>
                        </div>
                        
                        <div class="cl"></div>
                    	<div class="menugoodlist" id="cartshow" style="height: 440px;">
                    		
                    		
                    		
                    		<!---
                       		 <div class="goodlist">
                            <div class="goodnum">
                               <div class="btniput">
                               <span class="right_l_btn_left" data-id="109" data-shopid="30"></span>
                               <span class="right_l_btn_nub" id="gshu_109">1</span>
                               <span class="right_l_btn_right" id="gid_109" data-price="5.00" typeid="34" data-id="109" data-shopid="30"></span>	
                               </div> 
                            </div>
                            <div class="goodname">
                                 <span>揽锅菜</span>
                            </div>
                            <div class="goodcost">
                                 <span>15</span>
                            </div>
                            <div class="goodallcost">
                                 <span>15</span>
                            </div>
                        </div>
                        --->
                        
                     
                        
                        
                        
                        </div>
                        <div class="cl"></div>
                       
                        <div class="cdjs">
                        	<span class="span1">打包费:<font color="#ec7501" size="2" style="font-weight:bold;">¥<font id="bagcost">0</font></font></span>
                            <span class="span2">小计：<font color="#ec7501" size="2" style="font-weight:bold;">¥<font id="sumcost">0</font></font></span>
                        </div>
                    </div>
               
                
                
                <div class="xxqq" >
                	<form>
                    	 
                        
                    </form>
                    
                </div>
                <div class="leftBot">
                 
                  <div class="cl"></div>
                </div>
                
            </div>
             <!---账单明细 end---> 
             
             
             <!---账单列表 start---> 
        	<div class="conList fl">
            	<div class="listTitle">
                	<ul>
                    
                       <li  class="cur curbtn" data="a">点餐</li> 
                       
                    </ul>
                  
                </div>
                
                <div class="fenlei">
                	 
                    <div class="new_caidan" id="caidanlist">
                    	<ul>
                    		<li class="on" onclick="showtype(0,this);">全部</li>
                    		 
                            
                        </ul>
                        <div class="cl"> </div>
                    </div>
                    <div class="cl"> </div>
                </div>
                
                <div class="caidanList">
                	<div class="mealsList" id="goodslist">
                    	<ul>
                    		   
                        </ul>
                  <script>
				  
                    $(function(){
						//菜单列表自动适应的最小高度
						var num = $('.fenlei li').length ;						
						var fenleiHeight = Math.ceil(num/11)*43+10;
						
						//菜单列表背景自动适应的高度
						var caidanListHeight = 830 - 42 - fenleiHeight - 50;
						$(".caidanList").css('min-height',Number(caidanListHeight));
						
											
						
						//菜单列表超出最小的高度后自动适应的高度
						var cou = $('.caidanList li').length ;
						var caidanHeight = Math.ceil(cou/7)*97;
						$(".caidanList").css('height',Number(caidanHeight));
						
						
						//右边内容自动适应的高度
						var conRightHeight = caidanHeight + fenleiHeight +50 +42 ;
						$(".conRight").css('height',Number(conRightHeight));
					
					
				});
                </script>
                        <div class="cl"></div>
                    </div>
                </div>
                
            </div>
             <!---账单列表 end---> 
              <div class="cl"></div>
        </div>
        <div class="cl"></div>
        
        <!---content right end---> 
  
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
 <script>
 
 var ditulog;
 
 function closemydilog(){
 	mydialog.close();
}

 
 function setmap(lng,lat,mymapname){ 
	 
		$('input[name="buyerlng"]').val(lng);
		$('input[name="buyerlat"]').val(lat);
		$('input[name="area"]').val(mymapname);
		
 }

 
 
 	var shopid = 0;
 	 $("input[name='inputsearch']").keyup(function(){ 
	var checkstr = $("input[name='inputsearch']").val();
	if(checkstr != '' && checkstr != null){
		var findobj  = $('#shopdata').find('li');
		for(var i=0;i<$(findobj).length;i++){
			var mystring = $(findobj).eq(i).attr('data');
			if(mystring.indexOf(checkstr) != -1){
			   $(findobj).eq(i).show();
			   $(findobj).eq(i).addClass('isshow');
			}else{
				 $(findobj).eq(i).hide();
			   $(findobj).eq(i).removeClass('isshow');
			}
		} 
	}else{
			$('#shopdata li').show();
	} 
  });
   
  $('#shopdata li').click(function(){
  	sumcost = 0;
  	allbagcost =0;
  	shopid = $(this).attr('data-id');
    $(this).addClass('cur').siblings().removeClass('cur');
    $('#shopinfo').load(siteurl+"/index.php?ctrl=order&action=fastfoodshop&shopid="+$(this).attr('data-id')); 
  });
  function showtype(typeid,obj){
  	if(typeid == 0){
  	  $('#goodslist').find('li').show();
  	  
  	}else{
  	    $('#goodslist').find('li').hide();
  	    $('#goodslist').find('.litype'+typeid).show();
  	}
  	$(obj).addClass('on').siblings().removeClass('on');
  }
  var sumcost = 0;//总价等于0
  var allbagcost = 0;
  var checkuser = true;
   
  function addtocart(goodsid,goodscost,bagcost,goodsname,product_id,count){
   var num =  $('#gshu_'+goodsid+'_'+product_id+'').html();
 
   if( count <= 0 ){
		alert("库存不足");
		return false;
	 }
  
  	var checkhtml = $('#cart_id'+goodsid+'_'+product_id).html();
 
  	if(checkhtml == undefined){
  		var newzongjiage = Number(goodscost)*1;
  		var htmls = '<div class="goodlist" id="cart_id'+goodsid+'_'+product_id+'" data="'+goodsid+'" product_id="'+product_id+'">';
          htmls += '          <div class="goodnum">';
          htmls += '             <div class="btniput">';
          htmls += '            <span class="right_l_btn_left" onclick="deltocart(\''+goodsid+'\',\''+goodscost+'\',\''+bagcost+'\',\''+product_id+'\',\''+count+'\');"></span>';
         htmls += '            <span class="right_l_btn_nub" id="gshu_'+goodsid+'_'+product_id+'">1</span>';
          htmls += '            <span class="right_l_btn_right" onclick="addtocart(\''+goodsid+'\',\''+goodscost+'\',\''+bagcost+'\',\'\',\''+product_id+'\',\''+count+'\');"></span>	';
          htmls += '           </div> ';
         htmls += '         </div>';
         htmls += '          <div class="goodname">';
         htmls += '              <span>'+goodsname+'</span>';
         htmls += '        </div>';
         htmls += '        <div class="goodcost">';
         htmls += '              <span >'+goodscost+'</span>';
         htmls += '         </div>';
         htmls += '         <div class="goodallcost">';
         htmls += '              <span id="gzj_'+goodsid+'_'+product_id+'">'+newzongjiage+'</span>';
         htmls += '          </div>';
         htmls += '    </div>'; 
         $('#cartshow').append(htmls); 
         $('#goodsdet_'+goodsid+'_'+product_id).find('.mealsok').show();
          
  	}else{
	     var gshu = $("#gshu_"+goodsid+"_"+product_id).text();
		 if( gshu >= count ){
			alert("库存不足");
			return false;
		 }
	
  		$('#gshu_'+goodsid+'_'+product_id).text(Number($('#gshu_'+goodsid+'_'+product_id).text())+1); 
  		$('#gzj_'+goodsid+'_'+product_id).text(Number($('#gzj_'+goodsid+'_'+product_id).text())+Number(goodscost)); 
  	} 
  	var tempcost = Number(goodscost)+Number(bagcost);
  	allbagcost = Number(allbagcost)+Number(bagcost);
  	$('#bagcost').text(allbagcost.toFixed(2));
  	sumcost = Number(sumcost)+Number(tempcost.toFixed(2));
  	$('#sumcost').text(sumcost.toFixed(2));
  }
  function deltocart(goodsid,goodscost,bagcost,product_id){
  	var checkhtml = $('#cart_id'+goodsid+'_'+product_id).html();
  	if(checkhtml != undefined){
  		  var shangpinzongshu = $('#gshu_'+goodsid+'_'+product_id).text(); 
  		  if(shangpinzongshu == 1){
  		     $('#cart_id'+goodsid+'_'+product_id).remove();
  		     $('#goodsdet_'+goodsid+'_'+product_id).find('.mealsok').hide(); 
  		  }else{
  		      $('#gshu_'+goodsid+'_'+product_id).text(Number($('#gshu_'+goodsid+'_'+product_id).text())-1); 
  		      $('#gzj_'+goodsid+'_'+product_id).text(Number($('#gzj_'+goodsid+'_'+product_id).text())-Number(goodscost)); 
  		  }
  	    var tempcost = Number(goodscost)+Number(bagcost);
  	allbagcost = Number(allbagcost)-Number(bagcost);
  	$('#bagcost').text(allbagcost.toFixed(2));
  	sumcost = Number(sumcost)-Number(tempcost.toFixed(2));
  	$('#sumcost').text(sumcost.toFixed(2));
  	}
  }
  function clearcart(){
     sumcost = 0;
     bagcost = 0;
     $('#bagcost').text(0);
     $('#sumcost').text(0);
     $('#cartshow').html('');
  }
  var dialogs;
  $('input[name="area"]').live("click", function() { 
		var buyerlng = '';
		var buyerlat = '';
		
		var aa = $('input[name="buyerlng"]').val();
		var bb = $('input[name="buyerlat"]').val();
		
		if(  aa != '' && aa != undefined && bb != '' && bb != undefined  ){
			buyerlng = aa;
			buyerlat = bb;
		}
		
		mydialog = art.dialog.open(siteurl+'/index.php?ctrl=area&action=ghmap&cityname=<?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
&lng='+buyerlng+'&lat='+buyerlat+'',{height:'550px',width:'850px'},false);
 	 	 mydialog.title('选择地图地址'); 
		//dialogs = art.dialog.open(siteurl+'/index.php?ctrl=order&action=areashow&shopid='+shopid,{height:'300px',width:'200px'},false);
	 	// dialogs.title('选择区域'); 
 });
 function setarea(areaname,areaid){
   dialogs.close();
   $('input[name="area"]').val(areaname);
   $('input[name="areaid"]').val(areaid);
}
$('input[name="senddate"]').live("click",function(){
   
 
	var htmls = ' <div class="showtime">';
 	   	htmls += '<div class="dialogdate">';
 	   	htmls += '   <ul id="timeday">'; 
  var orderbefore = $(this).attr('orderbefore');
  
  if(orderbefore == 1){
     orderbefore = Number($(this).attr('befortime'))+1;
  }else{
     orderbefore =1;
  }
  var temphtml = '';
  for(var i=0;i<orderbefore;i++){
  	var begindtime = $(this).attr("nowtime");
  	var begindate = new Date(begindtime.replace(/-/g,'/'));
  	var begindatetime = Number(begindate.getTime());
  	var setptime = 60*60*1000*24*i; 
  	var numtime = begindatetime+Number(setptime)
   	var d = new Date();
   	
      d.setTime(numtime);
      var mouch = Number(d.getMonth())+1;
      var riqi = d.getFullYear()+'-'+mouch+'-'+d.getDate();
          
        //    var nowhour = d.getHours();
  	   htmls += '<li data="'+riqi+'">'+riqi+'</li>';
  }
  maketime = $(this).attr('maketime');
  nowtime = $(this).attr('nowtime');
 	   	htmls += '  </ul>';
 	   	htmls += '</div>';
 	   	htmls += '  <div class="dialogmint">';
 	   	htmls += '  	<ul id="timedet">'; 
 	   	htmls += '  </ul> ';
 	   	htmls += '  </div>';
 	 	  htmls += '</div>';
  art.dialog({
    id: 'idxxxc',
    title:'设置选择时间',
    content: htmls,
    width:'200px',
    height:'400px'
  });
  $('#timeday').find('li').eq(0).trigger('click');
});
$('#timeday li').live("click",function(){
	$(this).addClass('on').siblings().removeClass('on');
	maketimenenu();
});
$('#timedet li').live("click",function(){
	var selectdate = '';
	var allobj = $('#timeday').find('li');
	for(var k=0;k<$(allobj).length;k++){
	    if($(allobj).eq(k).hasClass('on')){
	      selectdate = $(allobj).eq(k).attr('data');
	    }
	}
	var backinfo = selectdate+' '+$(this).attr('data');
	$('input[name="senddate"]').val(backinfo);
	art.dialog.list['idxxxc'].close();
});
var nowtime ='';
var maketime = '';
function maketimenenu(){
 
	////nowdate="2014-08-07" nowtime="2014-08-07 15:09:36" starttime="08:00-12:00|17:00-19:00" orderbefore="1" befortime="3" maketime="2014-08-07 15:19:36"
	var starttime =  $('input[name="senddate"]').attr('starttime');
	var allobj = $('#timeday').find('li');
	var selectdate = '';
	for(var k=0;k<$(allobj).length;k++){
	    if($(allobj).eq(k).hasClass('on')){
	      selectdate = $(allobj).eq(k).attr('data');
	    }
	}
	  
  $('#timedet').html(''); 
  var dotime = ''; 
  	dotime = starttime.split('|'); 
  for(var i=0;i<dotime.length;i++){ 
  		var splittime = dotime[i].split('-');
  		 
  		if(splittime.length > 0){
  			//寮€濮嬫椂闂�  缁撴潫鏃堕棿
  			var begindtime = selectdate+' '+splittime[0]+':00';
  			var endtime = selectdate+' '+splittime[1]+':00'; 
  			 
  			addhtml(begindtime,endtime);
  		}
  } 
}
function addhtml(begindtime,endtime){ 
	var begindate = new Date(begindtime.replace(/-/g,'/'));
	var enddate = new Date(endtime.replace(/-/g,'/'));
	var bkdate = new Date(nowtime.replace(/-/g,'/'));
	var begindates = Number(begindate.getTime());
	var enddates = Number(enddate.getTime());
	var bkdates = Number(bkdate.getTime());
	var makenewtime =  new Date(maketime.replace(/-/g,'/')); 
	if(bkdates > begindates && bkdates > enddates){ 
		 
  }else{  
  	var setptime = 15*60*1000; 
       for(var i=begindates;i<enddates;i=i+setptime){
       	 if(i > bkdates && i>makenewtime){ 
       	   var d = new Date()
            d.setTime(i);
            var nowhour = d.getHours();
            var timesee =  Number(nowhour) < 10?'0'+nowhour:nowhour;
            var nowminit = d.getMinutes();
            timesee += Number(nowminit) < 10?':0'+nowminit:':'+nowminit;
            $('#timedet').append('<li data="'+timesee+'">'+timesee+'</li>'); 
         }
	     }
	} 
}
  $(function(){
				 
 });
 function makeorder(){
   //在新仓库中打开网页
   var allobj = $('.goodlist');
   if(allobj.length < 1){
     alert('购物车中无数据');
     return false;
   }
	
	var buyerlng = $('input[name="buyerlng"]').val();
    var buyerlat = $('input[name="buyerlat"]').val();
    var pscost = $('input[name="pscost"]').val();
   
    var contactname = $('input[name="contactname"]').val();
    if(contactname == null || contactname == ""){
      alert('联系人不能为空');
      return false;
    }
    var phone = $('input[name="phone"]').val();
    if(phone == null|| phone==""){
      alert('联系电话不能为空');
      return false;
    }

     if (!phone.match(/^1[3|4|5|8][0-9]\d{4,8}$/)) {
         alert('手机格式不正确');
         return false;
     }

     if (!/^[0-9]*$/.test(pscost)) {
         alert('配送费不正确');
         return false;
     }
    var areaname = $('input[name="area"]').val();
     if(areaname == null ){
      alert('请选择地图地址');
      return false;
    }
	
	if(buyerlng == null || buyerlng == ""){
      alert('获取lng坐标失败');
      return false;
    }
	
	
	if(buyerlat == null || buyerlat == ""){
      alert('获取lat坐标失败');
      return false;
    }

     var address = $('input[name="address"]').val();
     if(address == null|| address==""){
      alert('地址详情不能为空');
      return false;
    }
     var senddate = $("select[name='minit']").find("option:selected").val(); 
     if(senddate == null|| senddate==""){
      alert('配送时间不能为空');
      return false;
    }
    
   var newids = new Array();//存放ID
   var newnum = new Array();//存放数量
   
   var productnum = new Array();
   var productids = new Array();
   for(var i=0;i<$(allobj).length;i++){
		var goodsid = $(allobj).eq(i).attr('data'); 
		var checkproduct = $(allobj).eq(i).attr('product_id');
		if(checkproduct > 0){
			productnum.push($('#gshu_'+goodsid+"_"+checkproduct).text());
			productids.push(checkproduct);
		}else{
			newids.push(goodsid);
			newnum.push($('#gshu_'+goodsid+"_"+checkproduct).text()); 
		}
   }
   //构造参数量
   var checklingk = siteurl +'/index.php?ctrl=order&action=makeorder';
   var idsm = newids.join(",");
   var num = newnum.join(",");
   var pids = productids.join(",");
   var pnum = productnum.join(",");
   address = areaname+address;
   checklingk +='&buyerlng='+buyerlng+'&pscost='+pscost+'&buyerlat='+buyerlat+'&ids='+idsm+'&nums='+num+'&pids='+pids+'&pnum='+pnum+'&shopid='+shopid+'&contactname='+contactname+'&phone='+phone+'&address='+address+'&minit='+senddate+'&remark='+$('input[name="remark"]').val()+'&datatype=json';
 

     $.post(checklingk, '' ,function (data, textStatus){
         if(data.error == false){
             var urlaa = siteurl +'/index.php?ctrl=site&action=waitpay&orderid='+data.msg;
             window.location.href= urlaa;

         }else{
             if(data.error == true)
             {
                 diaerror(data.msg);
             }else{
                 diaerror("获取数据失败");
             }
         }
     }, 'json');


 }
   //cartshow   alert($('#goodlist').html());
   //	var num=22.127456; alert( num.toFixed(2));
</script> 
   <!---
                       		 <div class="goodlist">
                            <div class="goodnum">
                               <div class="btniput">
                               <span class="right_l_btn_left" data-id="109" data-shopid="30"></span>
                               <span class="right_l_btn_nub" id="gshu_109">1</span>
                               <span class="right_l_btn_right" id="gid_109" data-price="5.00" typeid="34" data-id="109" data-shopid="30"></span>	
                               </div> 
                            </div>
                            <div class="goodname">
                                 <span>揽锅菜</span>
                            </div>
                            <div class="goodcost">
                                 <span>15</span>
                            </div>
                            <div class="goodallcost">
                                 <span>15</span>
                            </div>
                        </div>
                        --->
       
       
       
       
       
       
       
       </div>
    



<!------以下是公共的底部部分------->
 
 
  
    <div class="footer">
    	<div class="foot1">
        <center>
        	<div class="db">
        	   <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	      <?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
		  	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			         <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> | 
			    <?php } ?>
			<?php }?> 
         
            </div></center>
            <div class="cl"></div>
        </div>
        <div class="foot2">
        	<p>@2008-2012 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
</p>
        </div>
    </div>
</body>
</html>




 
 <?php }} ?>