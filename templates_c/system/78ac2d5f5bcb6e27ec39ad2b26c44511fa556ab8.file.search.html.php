<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 01:10:15
         compiled from "D:\wwwroot\ceshi.52jscn.com\module\wxsite\template\search.html" */ ?>
<?php /*%%SmartyHeaderCode:251405b3cff77972e41-16445063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ac2d5f5bcb6e27ec39ad2b26c44511fa556ab8' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\module\\wxsite\\template\\search.html',
      1 => 1507777778,
      2 => 'file',
    ),
    '6a54229cc57321fcf921d21c56486f594caed75c' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\m7\\public\\wxsite.html',
      1 => 1506688735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251405b3cff77972e41-16445063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'color' => 0,
    'is_static' => 0,
    'Taction' => 0,
    'https' => 0,
    'lat' => 0,
    'lng' => 0,
    'sitename' => 0,
    'description' => 0,
    'signPackage' => 0,
    'sitelogo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3cff783955e6_89271851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cff783955e6_89271851')) {function content_5b3cff783955e6_89271851($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="MobileOptimized" content="320">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="HandheldFriendly" content="true">
<meta name="author" content="johnye">
<meta name="shenma-site-verification" content="f28da5e2e3fb6e2afd372a3eedfda998">
<meta name="baidu-site-verification" content="eafwEzRbnz">
<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title> 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/public1.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/newweixin.css"> 
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/index.css">
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/font-awesome.min.css">
    <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/scrllo_function.css">
<?php if ($_smarty_tpl->tpl_vars['color']->value=="green"){?>
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/green.css"> 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['color']->value=="yellow"){?>
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/yellow.css"> 
<?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquerymobile/jquery-1.6.4.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/public.js"></script>  
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/adminpage/public/js/allj.js"></script>  
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/swipe.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/iscroll.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/newiscroll.js"></script>  
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/scrllo_function.js?v=1.0.0"></script>  
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/jquery.cookie.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.lazyload.min.js" type="text/javascript" language="javascript"></script> 
  
 <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/gift.css">

 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/template.min.js"></script>    

<script>  
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var taction = "<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
"; 
	var https = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['https']->value)===null||$tmp==='' ? '' : $tmp);?>
';
    var lat = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lat']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
    var lng = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lng']->value)===null||$tmp==='' ? 0 : $tmp);?>
';
	if ( taction != 'member' &&  taction != 'login' &&  taction != 'reg'  ){
		var cururl = window.location.href;
		$.cookie('wxCurUrl', cururl);
	}
 
</script>

 <script>
 	$(function(){  		
 	   $('#loading').hide(); 
	   
	   
	   
  });
  </script>


<script> 
		var myScroll;
function loaded() {
	myScroll = new iScroll('wrapper', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false); 
document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
</script>
 

 
<?php if (!empty($_smarty_tpl->tpl_vars['https']->value)&&empty($_smarty_tpl->tpl_vars['lat']->value)&&empty($_smarty_tpl->tpl_vars['lng']->value)){?>
<iframe id="iframe1" name="iframe1" src="<?php echo $_smarty_tpl->tpl_vars['https']->value;?>
/frmeload.html" style="display:none;"></iframe>
<?php }?> 
 
</head>
<body> 
<style>
.page-app{ background:#f0f0f0;}
body{background:#f0f0f0;}
  
</style>
  
  <div class="wmr-loader" id="loading" >
 <span class="wmr-icon wmr-icon-loading"></span>
 <h1>loading</h1>
 </div>
 <style>
 .wmr-loader {
     background: #5e5e5e;
    width: 100px!important;
    height: 100px!important;
    border-radius: 8px;
     z-index: 9999999;
    position: fixed!important;
    top: 50%!important;
    left: 50%;
    border: 0;
    margin-left: -50px!important;
    margin-top: -50px!important;
}.wmr-loader .wmr-icon-loading {
    background-color: #F00;
    display: block;
    margin: 10px 0px 5px 25px;
    width: 50px;
    height: 50px;
    -webkit-border-radius: 2.25em;
    border-radius: 2.25em;
    background: url(/upload/images/newloading.gif) no-repeat center;
    text-align: center;
}.wmr-loader h1 {
    color: #fff;
    text-align: center;
}
  </style> 
 
	
<div class="toptitCon">
 <div class="toptitBox">
  <div class="toptitL"><i></i></div>
  <div class="toptitC" style="position:relative;"><input style="  background-image:none;font-size:12px" id="searchname" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['searchname']->value)===null||$tmp==='' ? '' : $tmp);?>
" type="text" placeholder="搜索商家、商品名称" >
  <img id="searchwords" style="width:15px; height:15px; top:8px; left:95%;position:absolute;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/images/059.png" />
  </div>
 </div>
</div>

	
	 
 <div id="wrapper" style="top:40px;background-color:#fff">
	<div id="scroller">
		
<div id="nowordsearch">
<!--热门搜索-->
<!-- <div class="searchtit"><i class="topsetit"></i><h3>热门搜索</h3></div>
<div class="hotsearch">
 <ul>
<?php if (!empty($_smarty_tpl->tpl_vars['searchwords']->value)){?>
<?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['searchwords']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>	 
		<?php if (!empty($_smarty_tpl->tpl_vars['items']->value)){?>
		<li class="sousuoguanjianci"><?php echo $_smarty_tpl->tpl_vars['items']->value;?>
</li>
		<?php }?>
	<?php } ?>  
<?php }?>
 
 </ul>
</div> -->
<!--历史记录开始-->
<div class="wmr_search_box">
<div class="wmr_search_title">
<h3>历史搜索</h3>
<i class="fa fa-trash-o emptyhisbg"></i>
</div>
<div class="wmr_search_txt">
	<ul>
	<?php if (!empty($_smarty_tpl->tpl_vars['searchloglist']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchloglist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	<li  class="sousuoguanjianci"><?php echo $_smarty_tpl->tpl_vars['items']->value['searchval'];?>
</li>				 
	<?php } ?>
    <?php }else{ ?>
    <span>暂无历史搜索数据</span>	
    <?php }?>	
	</ul>
</div>
</div>
<!--历史记录结束-->

<!--热门搜索开始-->
<!-- <div class="searchtit"><i class="hissetit"></i><h3>历史记录</h3></div>
<div class="hisrec">
 <ul>
 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchloglist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  <li class="sousuoguanjianci"><?php echo $_smarty_tpl->tpl_vars['items']->value['searchval'];?>
</li>
  <?php } ?>
 </ul>
</div> -->
<div class="wmr_search_box">
		<div class="wmr_search_title">
			<h3>热门搜索</h3>
		</div>
		<div class="wmr_search_txt">
			<ul>
			<?php if (!empty($_smarty_tpl->tpl_vars['searchwords']->value)){?>
			<?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['searchwords']->value), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>	 
			<?php if (!empty($_smarty_tpl->tpl_vars['items']->value)){?>			
				<li class="sousuoguanjianci"><?php echo $_smarty_tpl->tpl_vars['items']->value;?>
</li>
			<?php }?>
			<?php } ?>  
			<?php }?>		  
			</ul>
		</div>
	</div>
<!--热门搜索结束-->
</div>



<div id="havesearch" style="display:none;">


</div>
<!---------------------------------------------------------------------------搜索结束------------------------------------------------------------------------------------->




		 <div style="height:20px;"></div>
	</div>
</div> 
<script>
    var searltime;
    $("#searchname").keyup(function(){
        clearTimeout(searltime);
        searltime = setTimeout("shopsearch()",300);

    })
$("#searchwords").bind('click',function(){
    shopsearch();
});
function shopsearch(){
    var searchname = $("#searchname").val();
    if(searchname != ''){
        $("#nowordsearch").hide();
        $("#havesearch").show();
        $("#havesearch").html('');
        var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/searchresult"),$_smarty_tpl);?>
';
        $.post(url, {'searchname':searchname},function (data, textStatus){

            $('#havesearch').html(data);
            myScroll.refresh();
        }, 'html');


    }else{
        $("#havesearch").hide();
        $("#nowordsearch").show();
    }
}
$(".sousuoguanjianci").bind('click',function(){
	var searchname = $(this).text();
	if(searchname != ''){
		$("#searchname").val(searchname);
		$("#nowordsearch").hide();
		$("#havesearch").show();
			$("#havesearch").html('');
			var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/searchresult"),$_smarty_tpl);?>
'; 
					$.post(url, {'searchname':searchname},function (data, textStatus){ 					
							$('#havesearch').html(data); 
							myScroll.refresh();
						}, 'html');
		
		
	}else{
		$("#havesearch").hide();
		$("#nowordsearch").show();
	}
});


$(".emptyhisbg").bind('click',function(){
$('#loading').show();
			url = siteurl+'/index.php?ctrl=wxsite&action=qkmemsearchlog&datatype=json&random=@random@';
     	  url = url.replace('@random@', 1+Math.round(Math.random()*1000));
        $.ajax({         //script定义
                 url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
                 dataType: "json",
                 async:true,
                 data:{},
                 success:function(content) { 
                 	if(content.error ==  false){
					 
							Tmsg('清除成功');
							 
								 window.location.href=  siteurl+'/index.php?ctrl=wxsite&action=search' ;
							 
                 	}else{
                 		Tmsg(content.msg);
                 	}
                  	$('#loading').toggle();
                 
                 },
                 error:function(){
                  $('#loading').toggle();
                 }
        }); 
	 
});
</script>
 
 
 
 
     <div class="bottom-bar-warp">
        <div class="bottom-bar" id="bottom-bar">
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/index"),$_smarty_tpl);?>
');"  ><i  class="icon icon_home"></i><div class="text" style="margin-top:-8px;">首页</div></div>
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/order"),$_smarty_tpl);?>
');" ><i class="icon icon_user"></i><div class="text" style="margin-top:-8px;">我的订单</div></div>
     
            <div class="bbar-btn tap-click" onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/togethersay"),$_smarty_tpl);?>
');"  ><i class="icon icon_order"></i><div class="text" style="margin-top:-8px;">一起说</div></div>
            <div class="bbar-btn"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/member"),$_smarty_tpl);?>
');"><i class="icon icon_phone" style="margin-top: 8px;"></i></a><a class="text"  style="margin-top:-10px;">个人中心</div>
        </div>
    </div>




    
<?php if ($_smarty_tpl->tpl_vars['color']->value=="green"){?>
<script>
	$(function(){
		if( taction  == 'index' ){          	
			$(".icon_home").next().css('color','#00cd85');			
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#00cd85');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#00cd85');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#00cd85');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['color']->value=="yellow"){?>
<script>
	$(function(){
		if( taction  == 'index' ){          	
			$(".icon_home").next().css('color','#ff7600 ');			
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#ff7600 ');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#ff7600 ');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#ff7600 ');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['color']->value=="red"||empty($_smarty_tpl->tpl_vars['color']->value)){?>
<script>
	$(function(){
		if( taction  == 'index' ){          	
			$(".icon_home").next().css('color','#ff6e6e');			
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#ff6e6e');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#ff6e6e');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#ff6e6e');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>
<?php }?>
<script>
 var sharetitle = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sitename']->value)===null||$tmp==='' ? '' : $tmp);?>
';
 var sharedesc = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['description']->value)===null||$tmp==='' ? '' : $tmp);?>
';
 var shareimgUrl = '<?php if (!empty($_smarty_tpl->tpl_vars['signPackage']->value['shareimg'])){?><?php echo $_smarty_tpl->tpl_vars['signPackage']->value['shareimg'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
<?php }?>';
 var sharelink = '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['signPackage']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
';
</script>
<?php if (is_array($_smarty_tpl->tpl_vars['signPackage']->value)&&$_smarty_tpl->tpl_vars['Taction']->value!='togethersay'&&$_smarty_tpl->tpl_vars['Taction']->value!='togethersaydata'&&$_smarty_tpl->tpl_vars['Taction']->value!='fabiaozhuti'){?> 
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" language="javascript"></script> 
<script> 
    wx.config({
      debug: false,
      appId: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
',
      timestamp: <?php echo $_smarty_tpl->tpl_vars['signPackage']->value['timestamp'];?>
,
      nonceStr: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['nonceStr'];?>
',
      signature: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['signature'];?>
',
      jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone'
      ] 
  }); 
 // alert('<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
');
 wx.ready(function(){
	//分享到朋友圈
	wx.onMenuShareTimeline({
		title: sharetitle, // 分享标题
		link: sharelink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
		imgUrl: shareimgUrl, // 分享图标
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
	//分享给朋友
	wx.onMenuShareAppMessage({
		title: sharetitle, // 
		desc: sharedesc, // 
		link: sharelink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
		imgUrl: shareimgUrl, // 分享图标
		type: 'link', // 分享类型,music、video或，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function () { 
			// 用户确认分享后执行的回调函数
			//Tmsg(shareimgUrl);
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
			//Tmsg('取消分享');
		}
	}); 
	wx.onMenuShareQQ({
		title: sharetitle, // 分享标题
		desc: sharedesc, // 分享描述
		link: sharelink, // 分享链接
		imgUrl: shareimgUrl, // 分享图标
		success: function () { 
		   // 用户确认分享后执行的回调函数
		},
		cancel: function () { 
		   // 用户取消分享后执行的回调函数
		}
	});
	
	wx.onMenuShareWeibo({
		title: sharetitle, // 分享标题
		desc: sharedesc, // 分享描述
		link: sharelink, // 分享链接
		imgUrl: shareimgUrl, // 分享图标
		success: function () { 
		   // 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	}); 
	wx.onMenuShareQZone({
		title: sharetitle, // 分享标题
		desc: sharedesc, // 分享描述
		link: sharelink, // 分享链接
		imgUrl: shareimgUrl, // 分享图标
		success: function () { 
		   // 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
});
wx.error(function(res){ 
	 alert(res.errMsg);
});




</script> 
<?php }?>  
</body>
</html>
 <?php }} ?>