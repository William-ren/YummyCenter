<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 00:45:50
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\adminpage\app\appset.html" */ ?>
<?php /*%%SmartyHeaderCode:5255b3cf9be3bdce4-17936458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b16effd9c31aa53e6717a4be2ecf5c96f03315' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\app\\appset.html',
      1 => 1507262275,
      2 => 'file',
    ),
    '4ffb5de90628426c692e9b7a4ce1e1bb8bc712d6' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\public\\admin.html',
      1 => 1505877233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5255b3cf9be3bdce4-17936458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'adminlogo' => 0,
    'admininfo' => 0,
    'companyname' => 0,
    'website' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3cf9bf1f81f1_65870914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cf9bf1f81f1_65870914')) {function content_5b3cf9bf1f81f1_65870914($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wwwroot\\ceshi.52jscn.com\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>﻿ <html xmlns="http://www.w3.org/1999/xhtml"><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="zh-CN"> 
<meta content="all" name="robots"> 
<meta name="description" content=""> 
<meta content="" name="keywords"> 
<title>后台管理中心 </title>  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/admin1.css"> 
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/public.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>

<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
 <style>
	 #showmodule li {
		 height: 800px;
		 width: 300px;
		 margin-right: 100px;
		 float: left;
		 text-align: left;
		 margin-left: 30px;
		 margin-top: 30px;
	 }
 </style>
 
<script>
	var menu = null;
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	if(screen.width > 1359){
		
		$('.newtop').css('width',screen.width);
		$('.newmain').css('width',screen.width);
		$('.newfoot').css('width',screen.width);
	}  
	
</script> 
</head> 
<body> 
<div id="cat_zhe" class="cart_zhe" style="display:none;"></div>
<!--<div id="cat_tj" class="cart_out_cat" style="display:none;"> 数据提交中..</div>-->
<div class="newtop">
	  <div class="newadddiv">
	  <div class="newlogo">
	  	   <div class="imglogo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" target="_blank">
                          <?php if (empty($_smarty_tpl->tpl_vars['adminlogo']->value)){?>
                          <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/logo.png" style="height: 51px; width: 267px;">
                          <?php }else{ ?> 
                          <img src="<?php echo $_smarty_tpl->tpl_vars['adminlogo']->value;?>
" style="height: 51px; width: 267px;">
                          <?php }?>
                      </a></div>
	  </div>
	  <div class="newtopnav">
	  	 <ul>
	  	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_module.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  	 	<ul>
	  	
	  </div>
	</div>
</div> 
<div style="clear:both;"></div>
<div class="newmain">
	<!-- 提示导航-->
   <div class="top_nav">
	    <div class="nav2 datainfo">
	    	<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
  
	    </div>
	    <div class="nav2 positioninfo" id="positionname2">
	    	网站首页
	    </div>
	    <!-- <div class="nav2 orderinfo">
	    	您有今天有0 个订单待审核
	    </div> -->
   </div>
   <!-- 主内容区-->
   <div class="newmain_all">
   	 <!-- 主内左区-->
   	 <div class="left_content">
   	 	   <!-- 主内左区用户信息-->
   	 	   <div class="userinfo">
   	 	   	   <div class="user_area">
   	 	   	   	      <div class="user_name">
   	 	   	   	      	<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['username'];?>

   	 	   	   	      </div>
   	 	   	   	      <div class="content_url">
   	 	   	   	      	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/adminloginout"),$_smarty_tpl);?>
" class="out">退出</a> 
   	 	   	   	      	 <a onclick="modifypwd();" href="#">修改密码</a>
   	 	   	   	      </div>
   	 	   	  </div>
   	 	   	  <div class="now_name" id="nowactioninfo">
   	 	   	    	网站首页
   	 	   	    </div>
   	 	   </div>
   	 	   <!-- 主内左区导航条-->
   	 	    <div class="left_nav">
   	 	    	  <ul> 
   	 	    	  	
   	 	    	  	
   	 	    	  	 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   	 	    	 
   	 	    	     <li style="text-align:center;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" style="color:#0076cf;" target="_blank">返回网站首页</a></li>
   	 	    	  </ul>
   	 	    </div>
   	 	    <div class="left_navend">
   	 	    </div>
   	 	    <!-- 主内左区天气预报-->
   	 	    <div class="weather" id="weatherinfo" style="display:none;">
   	 	    	 <div class="todayweacher">
   	 	    	      <div class="weacher_left">
   	 	    	      	 <div id="wtoday_img"> </div>
   	 	    	      	 <div><span id="wcity" style="padding-right:5px;"></span><span id="wqihou"></span></div>
   	 	    	      </div>
   	 	    	      <div class="weacher_right" id="wwendu">
   	 	    	      	 
   	 	    	      </div>	 
   	 	    	 </div>
   	 	    	 <div style="clear:both;">
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_1" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_day"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_wendu"></div>
   	 	    	 	   	
   	 	    	 	   	</div>
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_tom" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_tday"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_twendu"></div>
   	 	    	 	   	</div>
   	 	    	 </div>
   	 	    </div>
   	 	     
   	  </div>
   	  
 
 
  
 
 
 <div class="right_content">
	<div class="show_content_m">
   	        	 <div class="show_content_m_ti">
   	        	 	   <div class="showtop_t" id="positionname">设置</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	 
	
	   <div style="width:auto;overflow-x:hidden;overflow-y:auto"> 
         
          <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">
                  <tbody>
					
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">商家端推送类型</td>
                      <td> 
                           <input type="radio" name="app_shop_fstype" value="1" checked>光合推送
							<input type="radio" name="app_shop_fstype" value="2" <?php if ($_smarty_tpl->tpl_vars['app_shop_fstype']->value==2){?>checked<?php }?>>光合推送+阿里云推送
							<input type="radio" name="app_shop_fstype" value="3" <?php if ($_smarty_tpl->tpl_vars['app_shop_fstype']->value==3){?>checked<?php }?>>阿里云推送
				   
                       </td>
                    </tr>
				  
				  
				  
					<tr class="gf" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">商家端推送key</td>
                      <td> 
                         <input type="input" name="ghtskey" id="ghtskey" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ghtskey']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> 
                       </td>
                    </tr>
                     <tr class="gf" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">推送声音</td>
                      <td> <input type="input" name="ghtsmusic" id="ghtsmusic" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ghtsmusic']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					
					
					 <tr class="ali" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">阿里云accessKeyId</td>
                      <td> <input type="input" name="app_shop_aliid" id="app_shop_aliid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app_shop_aliid']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					 <tr class="ali" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">阿里云accessKeySecret</td>
                      <td> <input type="input" name="app_shop_alikey" id="app_shop_alikey" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app_shop_alikey']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					 <tr class="ali" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">阿里云appKEY</td>
                      <td> <input type="input" name="app_shop_aliappkey" id="app_shop_aliappkey" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app_shop_aliappkey']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					 <tr class="ali" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">启动ACTIVITY</td>
                      <td> <input type="input" name="app_shop_startact" id="app_shop_startact" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app_shop_startact']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					 <tr class="ali" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">IOS证书类型</td>
                      <td>   
						<input type="radio" name="app_shop_iostype" value="0" checked>不使用ios推送
						<input type="radio" name="app_shop_iostype" value="1" <?php if ($_smarty_tpl->tpl_vars['app_shop_iostype']->value==1){?>checked<?php }?>>发布证书推送
						<input type="radio" name="app_shop_iostype" value="2" <?php if ($_smarty_tpl->tpl_vars['app_shop_iostype']->value==2){?>checked<?php }?>>开发证书推送
						</td>
                    </tr>
					
					
					
					
					
					
				  <!--
                  	<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">商家端推送KEY</td>
                      <td> 
                         <input type="input" name="appuser" id="appuser" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appuser']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> 
                       </td>
                    </tr>
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">商家端推送secret</td>
                      <td> <input type="input" name="appsecret" id="appsecret" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appsecret']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">商家端包名</td>
                      <td> <input type="input" name="xmbao" id="xmbao" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['xmbao']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">商家通知标题</td>
                      <td> <input type="input" name="xmtitle" id="xmtitle" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['xmtitle']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">商家miuiKey</td>
                      <td> <input type="input" name="miuiKey" id="miuiKey" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['miuiKey']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					
				 
					-->
					
					
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">用户端推送KEY</td>
                      <td> 
                         <input type="input" name="appuser2" id="appuser2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appuser2']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> 
                       </td>
                    </tr>  
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">用户端推送secret</td>
                      <td> <input type="input" name="appsecret2" id="appsecret2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appsecret2']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					
					
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">用户端包名</td>
                      <td> <input type="input" name="xmbao2" id="xmbao2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['xmbao2']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">用户通知标题</td>
                      <td> <input type="input" name="xmtitle2" id="xmtitle2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['xmtitle2']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">用户miuiKey</td>
                      <td> <input type="input" name="miuiKey2" id="miuiKey2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['miuiKey2']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr> 
					
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">配送员推送KEY</td>
                      <td> 
                         <input type="input" name="appuser3" id="appuser3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appuser3']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> 
                       </td>
                    </tr>
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">配送员推送secret</td>
                      <td> <input type="input" name="appsecret3" id="appsecret3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appsecret3']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr> 
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">配送端包名</td>
                      <td> <input type="input" name="xmbao3" id="xmbao3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['xmbao3']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">配送通知标题</td>
                      <td> <input type="input" name="xmtitle3" id="xmtitle3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['xmtitle3']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">配送miuiKey</td>
                      <td> <input type="input" name="miuiKey3" id="miuiKey3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['miuiKey3']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr>
					
					
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">APP用户端版本</td>
                      <td> <input type="input" name="appvison1" id="appvison1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appvison1']->value)===null||$tmp==='' ? '1' : $tmp);?>
"  class="skey" style="width:200px;">版本号请填写时间戳，起始版是1，必须和最新apk的android:versionCode 一致 要不然每次都要下载而不是最新版本 </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">安卓APP用户端下载地址</td>
                      <td> <input type="input" name="appdownload1" id="appdownload1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appdownload1']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">http://www.xxx.com/xxx.apk </td>
                    </tr>
                    
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">苹果APP用户端下载地址</td>
                      <td> <input type="input" name="appdownload1ios" id="appdownload1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appdownload1ios']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">http://itunes.apple.com/xx/app/xx?mt=8 </td>
                    </tr>
                    
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">APP商家端版本</td>
                      <td> <input type="input" name="appvison2" id="appvison2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appvison2']->value)===null||$tmp==='' ? '1' : $tmp);?>
"  class="skey" style="width:200px;">版本号请填写时间戳，起始版是1，必须和最新apk的android:versionCode 一致 要不然每次都要下载而不是最新版本 </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">安卓APP商家端下载地址</td>
                      <td> <input type="input" name="appdownload2" id="appdownload2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appdownload2']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">http://www.xxx.com/xxx.apk </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">苹果APP商家端下载地址</td>
                      <td> <input type="input" name="appdownload2ios" id="appdownload2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appdownload2ios']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">http://itunes.apple.com/xx/app/xx?mt=8  </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">APP配送端版本</td>
                      <td> <input type="input" name="appvison3" id="appvison3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appvison3']->value)===null||$tmp==='' ? '1' : $tmp);?>
"  class="skey" style="width:200px;">版本号请填写时间戳，起始版是1，必须和最新apk的android:versionCode 一致 要不然每次都要下载而不是最新版本 </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">安卓APP配送端下载地址</td>
                      <td> <input type="input" name="appdownload3" id="appdownload3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appdownload3']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">http://www.xxx.com/xxx.apk </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">苹果APP配送端下载地址</td>
                      <td> <input type="input" name="appdownload3ios" id="appdownload3" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appdownload3ios']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">http://itunes.apple.com/xx/app/xx?mt=8  </td>
                    </tr>
					
					 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">分享key</td>
                      <td> <input type="input" name="ymengkey" id="ymengkey" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ymengkey']->value)===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:200px;">请联系客服给您这个值</td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">QQ分享appid</td>
                      <td> <input type="input" name="qqshareappid" id="qqshareappid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['qqshareappid']->value)===null||$tmp==='' ? '1' : $tmp);?>
"  class="skey" style="width:200px;">自行到http://connect.qq.com/申请,资料不知道怎么填写请联系客服 </td>
                    </tr>
					 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">QQ分享key</td>
                      <td> <input type="input" name="qqsharekey" id="qqsharekey" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['qqsharekey']->value)===null||$tmp==='' ? '1' : $tmp);?>
"  class="skey" style="width:200px;"> </td>
                    </tr> 
                  </tbody>
                </table>
              </div>
              <div class="blank20"></div>
              <input type="hidden" name="tijiao" id="tijiao" value="do" class="skey" style="width:250px;">
              <input type="hidden" name="saction" id="saction" value="siteset" class="skey" style="width:250px;">
               <input type="submit" value="确认提交" class="button">  
            </form>
          </div>
 
 
		  
<script>
$(function(){
	$("[name='app_shop_fstype']").bind('click',function(){
		changechoice();
	});
     changechoice();
});
function changechoice(){
   var tempid = $("[name='app_shop_fstype']:checked").val(); 
   if(tempid == 1){
		$('.gf').show();
		$('.ali').hide(); 
   }else if(tempid == 2){
		$('.ali').show();
		$('.gf').show(); 
   }else if(tempid == 3){
		$('.ali').show();
		$('.gf').hide(); 
   }
}


var click_button = false; 
function doubleclick(){
	click_button = false;
}
function mobilechangemodule(obj){
	var url = siteurl+'/index.php?ctrl=adminpage&action=system&module=savemobiletempset&mobilemodule='+$(obj).val()+'&datatype=json&random=@random@';
	$.ajax({
		type: 'post',
		async:false,
		url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
		dataType: 'json',success: function(content) {
			if(content.error == false){
//				window.location.reload();
			}else{
				if(content.error == true)
				{
					diaerror(content.msg);
				}else{
					diaerror(content);
				}
			}
		},
		error: function(content) {
			diaerror('数据获取失败');
		}
	});
}
function lockclick(){
	 if(click_button == false){
			click_button = true;
			setTimeout("doubleclick()", 1000); 
			return true;
	 }else{
		 return false;
	 }
}
var dialogs ;
function uploads(modulename){
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/uploadapp/obj/'+modulename+'/func/uploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片');
}
function uploadsucess(flag,obj,linkurl){
	if(flag == true){
 		alert(linkurl);
		dialogs.close();
		uploads(obj);
	}else{
		dialogs.close(); 
		//提交数据并返回显示 
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/appmdimg/datatype/json"),$_smarty_tpl);?>
', {'mudulename':obj,'imgurl':linkurl} ,function (data, textStatus){  
			if(data.error == false){
				$('#module_'+obj).attr('src',linkurl);
				$('#module_'+obj).show();
			}else{
				if(data.error == true)
				{
					diaerror(data.msg); 
				}else{
					diaerror(data); 
				}
			} 
		}, 'json');  
	}
 }
$(function(){   
   $("input[name='is_display']").bind("click", function() {   
	   if(lockclick()){
		   var doselect = 0;
				if($(this).is(':checked') == true){
				doselect =1;
				} 
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/docontroladv/datatype/json"),$_smarty_tpl);?>
', {'ctrlname':'is_show','modulename':$(this).attr('data'),'modulevalue':doselect} ,function (data, textStatus){  
				if(data.error == false){
					diasucces('操作成功','');
				}else{
					if(data.error == true)
					{
						diaerror(data.msg); 
					}else{
						diaerror(data); 
					}
				} 
			}, 'json');  
		}
	});
	
	$("input[name='is_install']").bind("click", function() {  
		if(lockclick()){	
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/docontroladv/datatype/json"),$_smarty_tpl);?>
', {'ctrlname':'is_install','modulename':$(this).attr('data'),'modulevalue':$("input[name='is_install']:checked").val()} ,function (data, textStatus){  
				if(data.error == false){
					diasucces('操作成功','');
				}else{
					if(data.error == true)
					{
						diaerror(data.msg); 
					}else{
						diaerror(data); 
					}
				} 
			}, 'json');  
		}
	});
	


});


</script>
		  
		   
<script> 
function upload_gudings(modulename){
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/uploadapp/obj/'+modulename+'/func/uploadgsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片');
}
function uploadgsucess(flag,obj,linkurl){
	if(flag == true){
 		alert(linkurl);
		dialogs.close();
		upload_gudings(obj);
	}else{
		dialogs.close(); 
		//提交数据并返回显示 
			$('#'+obj).attr('src',linkurl);
			$('#'+obj).show();
		  $('#input_'+obj).val(linkurl); 
	}
 }
 function dogdsave(gdid){
	 if(lockclick()){
			var checkname =   $('#input_gname'+gdid).val();
			
			if(checkname == ''){
				alert('录入的名称不能为空');
				return false;
			}
			var checkimg = $('#input_gimg'+gdid).val();
			var orderid = $('#input_gorderid'+gdid).val();
			if(checkimg == ''){
			   alert('未选择图片');
			   return false; 
			} 	
					
			var typeid = $("select[name='input_gselect"+gdid+"']").find("option:selected").val(); //$(this).input_gselect
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/addgd/datatype/json"),$_smarty_tpl);?>
', {'imgurl':checkimg,'orderid':orderid,'typeid':typeid,'name':checkname,'appposition':2,'id':gdid} ,function (data, textStatus){  
					if(data.error == false){
						diasucces('操作成功','');
					}else{
						if(data.error == true)
						{
							diaerror(data.msg); 
						}else{
							diaerror(data); 
						}
					} 
			}, 'json'); 
	}
 }  
 function dosaveadv(gdid){
	  if(lockclick()){
		var checkname =   $('#input_aname'+gdid).val();
		if(checkname == ''){
			alert('录入的名称不能为空');
			return false;
		}
		var checkimg = $('#input_aimg'+gdid).val();
		if(checkimg == ''){
		   alert('未选择图片');
		   return false; 
		} 	
				
		 
		$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/addad/datatype/json"),$_smarty_tpl);?>
', {'imgurl':checkimg,'typeid':0,'name':checkname,'appposition':1,'id':gdid} ,function (data, textStatus){  
				if(data.error == false){
					diasucces('操作成功','');
				}else{
					if(data.error == true)
					{
						diaerror(data.msg); 
					}else{
						diaerror(data); 
					}
				} 
		}, 'json'); 
		}
 }
 function dosaveanadv(gdid){
  if(lockclick()){
	var checkname =   $('#input_anname'+gdid).val();
	if(checkname == ''){
	    alert('录入的名称不能为空');
		return false;
	}
	var checkimg = $('#input_animg'+gdid).val();
	if(checkimg == ''){
	   alert('未选择图片');
	   return false; 
	} 	
	 		
	 
    $.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/addad/datatype/json"),$_smarty_tpl);?>
', {'imgurl':checkimg,'typeid':0,'name':checkname,'appposition':3,'id':gdid} ,function (data, textStatus){  
			if(data.error == false){
				diasucces('操作成功','');
			}else{
				if(data.error == true)
				{
					diaerror(data.msg); 
				}else{
					diaerror(data); 
				}
			} 
	}, 'json');
	}
 }
 
 
//新增内容 2016/12/28
function appstartimg(gdid){
	if(lockclick()){
		var checkname =   $('#input_stname'+gdid).val();
		if(checkname == ''){
			alert('录入的名称不能为空');
			return false;
		}
		var checkimg = $('#input_stimg'+gdid).val();
		if(checkimg == ''){
			alert('未选择图片');
			return false;
		}

		$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/addad/datatype/json"),$_smarty_tpl);?>
', {'imgurl':checkimg,'typeid':0,'name':checkname,'appposition':5,'id':gdid} ,function (data, textStatus){
			if(data.error == false){
				diasucces('操作成功','');
			}else{
				if(data.error == true)
				{
					diaerror(data.msg);
				}else{
					diaerror(data);
				}
			}
		}, 'json');
	}
}

function appggsimg(gdid){
	if(lockclick()){
		var checkname =   $('#input_ggsname'+gdid).val();
		if(checkname == ''){
			alert('录入的名称不能为空');
			return false;
		}
		var checkimg = $('#input_ggsimg'+gdid).val();
		if(checkimg == ''){
			alert('未选择图片');
			return false;
		}

		$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/addad/datatype/json"),$_smarty_tpl);?>
', {'imgurl':checkimg,'typeid':0,'name':checkname,'appposition':6,'id':gdid} ,function (data, textStatus){
			if(data.error == false){
				diasucces('操作成功','');
			}else{
				if(data.error == true)
				{
					diaerror(data.msg);
				}else{
					diaerror(data);
				}
			}
		}, 'json');
	}
}
 
</script>
		  
		  
		  
		  <div style="height:40px;line-height:40px;text-align:left;font-weight:bold;border-top:1px solid #e8eef6;border-bottom:1px solid #e8eef6;padding-left:30px;margin-top:10px;background-color:#0086ae;color:#fff;">轮播设置</div>
		   <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>
                        <th align="center">轮播说明</th> 
							<th align="center">图片展示</th>  						
                        <th align="center">图片上传</th>  
							<th align="center">操作</th> 
                       </tr>
 
                    </thead> 
                     <tbody>
                    <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['appadvlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					    <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==1){?>
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
                      
                        <td align="center"><input type="hidden" name="input_aid<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><input type="text" name="input_aname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_aname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" style="width:100px;"></td> 
							<td align="center"><input type="hidden" name="input_aimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_aimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" id="aimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"   style="width:140px;height:46px;"></td> 
                        <td align="center"> <span style="cursor:pointer;" onclick="upload_gudings('aimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');">上传图片</span></td> 
                      
                        <td align="center"><a href="#"><a onclick="javascript:dosaveadv('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');" href="#" class="delurl">提交更新</a> 
							<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/delappadv/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></td>  
                      </tr> 
							<?php }?>
					  <?php } ?>
                      
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
                       
                        <td align="center"><input type="text" name="input_aname" id="input_aname" value="" style="width:100px;"></td> 
                         <td align="center"><input type="hidden" name="input_aimg" id="input_aimg"  value=""><img src="" id="aimg"   style="width:100px;height:100px;display:none;"></td> 
                        <td align="center"><span style="cursor:pointer;" onclick="upload_gudings('aimg');">上传图片</span></td> 
                        <td align="center"><a onclick="javascript:dosaveadv('');" href="#" class="delurl">提交</a></td> 
                      </tr> 
                    </tbody> 

                  </table>
              </div>
              
            </form>
          </div> 
		  
		    <div style="height:40px;line-height:40px;text-align:left;font-weight:bold;border-top:1px solid #e8eef6;border-bottom:1px solid #e8eef6;padding-left:30px;margin-top:10px;background-color:#0086ae;color:#fff;">开机动画</div>
		   <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>
                        <th align="center">开机动画</th> 
							<th align="center">图片展示</th>  						
                        <th align="center">图片上传</th>  
							<th align="center">操作</th> 
                       </tr>
 
                    </thead> 
                     <tbody>
                    <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['appadvlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					    <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==3){?>
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
                      
                        <td align="center"><input type="hidden" name="input_anid<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><input type="text" name="input_anname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_anname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" style="width:100px;"></td> 
							<td align="center"><input type="hidden" name="input_animg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_animg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" id="animg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"   style="width:80px;height:140px;"></td> 
                        <td align="center"> <span style="cursor:pointer;" onclick="upload_gudings('animg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');">上传图片</span></td> 
                      
                        <td align="center"><a href="#"><a onclick="javascript:dosaveanadv('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');" href="#" class="delurl">提交更新</a> 
							<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/delappadv/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></td>  
                      </tr> 
							<?php }?>
					  <?php } ?>
                      
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
                       
                        <td align="center"><input type="text" name="input_anname" id="input_anname" value="" style="width:100px;"></td> 
                         <td align="center"><input type="hidden" name="input_animg" id="input_animg"  value=""><img src="" id="animg"   style="width:100px;height:100px;display:none;"></td> 
                        <td align="center"><span style="cursor:pointer;" onclick="upload_gudings('animg');">上传图片</span></td> 
                        <td align="center"><a onclick="javascript:dosaveanadv('');" href="#" class="delurl">提交</a></td> 
                      </tr> 
                    </tbody> 

                  </table>
              </div>
              
            </form>
          </div> 
		  
		  
		  
		  
			<!--新增内容 2016/12/28-->
		   <div style="height:40px;line-height:40px;text-align:left;font-weight:bold;border-top:1px solid #e8eef6;border-bottom:1px solid #e8eef6;padding-left:30px;margin-top:10px;background-color:#0086ae;color:#fff;">开机图片</div>
		   <div id="tagscontent">
			   <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
			   <div>
				   <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

					   <thead>

					   <tr>
						   <th align="center">开机图片</th>
						   <th align="center">图片展示</th>
						   <th align="center">图片上传</th>
						   <th align="center">操作</th>
					   </tr>

					   </thead>
					   <tbody>
					   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['appadvlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					   <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==5){?>
					   <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">

						   <td align="center"><input type="hidden" name="input_stid<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><input type="text" name="input_stname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_stname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" style="width:100px;"></td>
						   <td align="center"><input type="hidden" name="input_stimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_stimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" id="stimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"   style="width:100px;height:100px;"></td>
						   <td align="center"> <span style="cursor:pointer;" onclick="upload_gudings('stimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');">上传图片</span></td>

						   <td align="center"><a href="#"><a onclick="javascript:appstartimg('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');" href="#" class="delurl">提交更新</a>
							   <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/delappadv/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></td>
					   </tr>
					   <?php }?>
					   <?php } ?>

					   <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff" id="tjimg">
						   <td align="center"><input type="text" name="input_stname" id="input_stname" value="" style="width:100px;"></td>
						   <td align="center"><input type="hidden" name="input_stimg" id="input_stimg"  value=""><img src="" id="stimg"   style="width:100px;height:100px;display:none;"></td>
						   <td align="center"><span style="cursor:pointer;" onclick="upload_gudings('stimg');">上传图片</span></td>
						   <td align="center"><a onclick="javascript:appstartimg('');" href="#" class="delurl">提交</a></td>
					   </tr>
					   </tbody>
					   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['appadvlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					   <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==5){?>
					   <script>
						   $("#tjimg").hide();
					   </script>
					   <?php }?>
					   <?php } ?>

				   </table>
			   </div>

			   </form>
		   </div>



		   <div style="height:40px;line-height:40px;text-align:left;font-weight:bold;border-top:1px solid #e8eef6;border-bottom:1px solid #e8eef6;padding-left:30px;margin-top:10px;background-color:#0086ae;color:#fff;">开机广告</div>
		   <div id="tagscontent">
			   <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
			   <div>
				   <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

					   <thead>

					   <tr>
						   <th align="center">开机广告</th>
						   <th align="center">图片展示</th>
						   <th align="center">图片上传</th>
						   <th align="center">操作</th>
					   </tr>

					   </thead>
					   <tbody>
					   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['appadvlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					   <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==6){?>
					   <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">

						   <td align="center"><input type="hidden" name="input_ggsid<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><input type="text" name="input_ggsname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_ggsname<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" style="width:100px;"></td>
						   <td align="center"><input type="hidden" name="input_ggsimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="input_ggsimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" id="ggsimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"   style="width:100px;height:100px;"></td>
						   <td align="center"> <span style="cursor:pointer;" onclick="upload_gudings('ggsimg<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');">上传图片</span></td>

						   <td align="center"><a href="#"><a onclick="javascript:appggsimg('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
');" href="#" class="delurl">提交更新</a>
							   <a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/delappadv/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></td>
					   </tr>
					   <?php }?>
					   <?php } ?>
					   <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff" id="ggimg">
						   <td align="center"><input type="text" name="input_ggsname" id="input_ggsname" value="" style="width:100px;"></td>
						   <td align="center"><input type="hidden" name="input_ggsimg" id="input_ggsimg"  value=""><img src=""  id="ggsimg"   style="width:100px;height:100px;display:none;"></td>
						   <td align="center"><span style="cursor:pointer;" onclick="upload_gudings('ggsimg');">上传图片</span></td>
						   <td align="center"><a onclick="javascript:appggsimg('');" href="#" class="delurl">提交</a></td>
					   </tr>
					   </tbody>
					   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['appadvlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					   <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==6){?>
					   <script>
						   $("#ggimg").hide();
					   </script>
					   <?php }?>
					   <?php } ?>

				   </table>
			   </div>

			   </form>
		   </div>



		  
		  
		  
		   <div style="height:40px;line-height:40px;text-align:left;font-weight:bold;border-top:1px solid #e8eef6;border-bottom:1px solid #e8eef6;padding-left:30px;margin-top:10px;background-color:#0086ae;color:#fff;">首页列表数据</div>
		   <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">
                  <tbody>
                  	<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">  <td   valign="top" style="padding-left:200px;"><input type="radio" name="APPindex" value="1" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['APPindex']==1){?>checked<?php }?> >推荐配送商家</td>  </tr>
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">  <td   valign="top" style="padding-left:200px;"><input type="radio" name="APPindex" value="2" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['APPindex']==2){?>checked<?php }?>>热卖配送商家</td>  </tr>
						<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">  <td   valign="top" style="padding-left:200px;"><input type="radio" name="APPindex" value="3" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['APPindex']==3){?>checked<?php }?>>新增配送商家</td>  </tr>
						<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">  <td   valign="top" style="padding-left:200px;"><input type="radio" name="APPindex" value="4" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['APPindex']==4){?>checked<?php }?>>推荐超市</td>  </tr>
						<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">  <td   valign="top" style="padding-left:200px;"><input type="radio" name="APPindex" value="5" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['APPindex']==5){?>checked<?php }?>>普通超市</td>  </tr> 
<!--                                                <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> <td><a  href="#" class="delurl">提交</a></td></tr>-->
                  </tbody>
                </table>
              </div>  
            </form>
          </div>
		  
		  
		  
		    <div style="height:40px;line-height:40px;text-align:left;font-weight:bold;border-top:1px solid #e8eef6;border-bottom:1px solid #e8eef6;padding-left:30px;margin-top:10px;background-color:#0086ae;color:#fff;">APP其他设置</div>
		   <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/saveappset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">
                  <tbody>
                  <!-- 	<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">是否开启APP货到支付</td>
                      <td> 
                         <input type="checkbox" name="apppayacount" value="1" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['apppayacount']==1){?>checked<?php }?>>开启 APP货到支付
                       </td>
                    </tr>
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">是否开启在线支付</td>
                      <td> <input type="checkbox" name="apppayonline" value="1" <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['apppayonline']==1){?>checked<?php }?>>开启 APP在线支付 </td>
                    </tr> -->
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left" valign="top">数据版本</td>
                      <td> 
                         <input type="input" name="appdataver" id="appdataver" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['appinfo']->value['appdataver'])===null||$tmp==='' ? '' : $tmp);?>
"  class="skey" style="width:50px;"> (根据此是否更新用户缓存初始为1，当用户存放临时数据和这个不一样则就自动更新缓存数据)
                       </td>
                    </tr>
                     
                  </tbody>
                </table>
              </div> 
            </form>
          </div>
		  
		  
        </div> 
        
        
   
    </div> 
<script>
$(function(){  
	$("input[name='APPindex']").click(function(){
	    if(lockclick()){
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/appindexshow/datatype/json"),$_smarty_tpl);?>
', {'type':'APPindex','APPindex':$("input[name='APPindex']:checked").val()} ,function (data, textStatus){  
				if(data.error == false){
					diasucces('操作成功','');
				}else{
					if(data.error == true)
					{
						diaerror(data.msg); 
					}else{
						diaerror(data); 
					}
				} 
			}, 'json');  
		}
	});
	$("input[name='apppayacount']").click(function(){
		  if(lockclick()){
				 $.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/appindexshow/datatype/json"),$_smarty_tpl);?>
', {'type':'apppayacount','apppayacount':$("input[name='apppayacount']:checked").val()} ,function (data, textStatus){  
					if(data.error == false){
						diasucces('操作成功','');
					}else{
						if(data.error == true)
						{
							diaerror(data.msg); 
						}else{
							diaerror(data); 
						}
					} 
				}, 'json'); 
		}
	});
	$("input[name='apppayonline']").click(function(){
			  if(lockclick()){
		$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/appindexshow/datatype/json"),$_smarty_tpl);?>
', {'type':'apppayonline','apppayonline':$("input[name='apppayonline']:checked").val()} ,function (data, textStatus){  
			if(data.error == false){
				diasucces('操作成功','');
			}else{
				if(data.error == true)
				{
					diaerror(data.msg); 
				}else{
					diaerror(data); 
				}
			} 
		}, 'json'); 
		}
	});
	$("input[name='appdataver']").change(function(e){
	 
	  if(lockclick()){
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/appindexshow/datatype/json"),$_smarty_tpl);?>
', {'type':'appdataver','appdataver':$("input[name='appdataver']").val()} ,function (data, textStatus){  
				if(data.error == false){
					diasucces('操作成功','');
				}else{
					if(data.error == true){
						diaerror(data.msg); 
					}else{
						diaerror(data); 
					}
				} 
			}, 'json');
		}
		 
	});
	document.onkeydown = function(event) {  
    var target, code, tag;  
    if (!event) {  
        event = window.event; //针对ie浏览器  
        target = event.srcElement;  
        code = event.keyCode;  
        if (code == 13) {  
            tag = target.tagName;  
            if (tag == "TEXTAREA") { return true; }  
            else { return false; }  
        }  
    }  
    else {  
        target = event.target; //针对遵循w3c标准的浏览器，如Firefox  
        code = event.keyCode;  
        if (code == 13) {  
            tag = target.tagName;  
            if (tag == "INPUT") { return false; }  
            else { return true; }   
       }  
    }  
};  
	/***  模块排序  ****/
$(".savemodulepaixu").change(function(){
		if(lockclick()){
			$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/app/module/savemodulepaixu/datatype/json"),$_smarty_tpl);?>
', {'name':$(this).attr('name'),'orderid':$(this).val()} ,function (data, textStatus){  
				if(data.error == false){
					diasucces('操作成功','');
				}else{
					if(data.error == true)
					{
						diaerror(data.msg); 
					}else{
						diaerror(data); 
					}
				} 
			}, 'json');
		}
	 
})

});
</script>  
<!--newmain 结束-->
 
   	        	 	
               <div class="show_content_m_t3">
   	        	 </div>
   	        	 
   	       </div>
   	       <!-- show_content_m结束-->


   	  </div>
   	  <!-- right_content 结束-->
   	  
   </div>
   <!-- newmain_all 结束-->
</div>	
	
<!--newmain 结束-->
















<div style="clear:both;"></div>
<div class="newfoot">
	
	  版权所有@<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['website']->value;?>

</div>	
<script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   function limitalert(){
		diaerror("您暂无权限设置,如有疑问请联系QQ：375952873  Tel：18538930577");
	}
</script>
</body>
</html>





<?php }} ?>