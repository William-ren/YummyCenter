<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 00:54:28
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\adminpage\system\logoset.html" */ ?>
<?php /*%%SmartyHeaderCode:144145b3cfbc4764f26-03722859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d36efe56669fbeed9a22463d6f68feba34458a' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\system\\logoset.html',
      1 => 1506432213,
      2 => 'file',
    ),
    '4ffb5de90628426c692e9b7a4ce1e1bb8bc712d6' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\public\\admin.html',
      1 => 1505877233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144145b3cfbc4764f26-03722859',
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
  'unifunc' => 'content_5b3cfbc508f375_13921232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cfbc508f375_13921232')) {function content_5b3cfbc508f375_13921232($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wwwroot\\ceshi.52jscn.com\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
   	        	 	   <div class="showtop_t" id="positionname">logo设置</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	 
	
	  <div style="width:auto;overflow-x:hidden;overflow-y:auto;">   
          <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/system/module/savelogoset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">
                  <tbody>
                     
                     
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">网站LOGO</td>
                      <td>
                      	<input type="hidden" name="sitelogo" id="sitelogo" value="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
" class="skey" style="width:100px;"> 
                      	<img src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
" width=150px height=50px id="imgshowc" <?php if (empty($_smarty_tpl->tpl_vars['sitelogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;"> 
                      	<span onclick="uploadc();">上传图片</span> 
                      </td>
                    </tr>
					 </tr>
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">网站首页LOGO</td>
                        <td>
                            <input type="hidden" name="webcaption" id="webcaption" value="<?php echo $_smarty_tpl->tpl_vars['webcaption']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['webcaption']->value;?>
" width=300px height=50px id="imgwebcaption" <?php if (empty($_smarty_tpl->tpl_vars['webcaption']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadw();">上传图片</span>
                        </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">后台LOGO</td>
                      <td>
                      	<input type="hidden" name="adminlogo" id="adminlogo" value="<?php echo $_smarty_tpl->tpl_vars['adminlogo']->value;?>
" class="skey" style="width:100px;"> 
                        <?php if (empty($_smarty_tpl->tpl_vars['adminlogo']->value)){?>
                      	<img src="/templates/adminpage/public/images/admin/logo.png" width=200px height=50px id="imgshowadmin" <?php if (empty($_smarty_tpl->tpl_vars['sitelogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;"> 
                      	<?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['adminlogo']->value;?>
" width=200px height=50px id="imgshowadmin" <?php if (empty($_smarty_tpl->tpl_vars['sitelogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">      
                        <?php }?>     
                             <span onclick="uploadadmin();">上传图片</span> 
                      </td>
                   </tr>

                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">微信端背景logo</td>
                        <td>
                            <input type="hidden" name="wxbglogo" id="wxbglogo" value="<?php echo $_smarty_tpl->tpl_vars['wxbglogo']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wxbglogo']->value;?>
" width=50px height=50px id="wxbglogoshow" <?php if (empty($_smarty_tpl->tpl_vars['wxbglogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadwxbglogo();">上传图片</span>
                        </td>
                    </tr>

				    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">用户默认头像</td>
                      <td>
                      	<input type="hidden" name="userlogo" id="userlogo" value="<?php echo $_smarty_tpl->tpl_vars['userlogo']->value;?>
" class="skey" style="width:100px;">
                      	<img src="<?php echo $_smarty_tpl->tpl_vars['userlogo']->value;?>
" width=50px height=50px id="imgshow" <?php if (empty($_smarty_tpl->tpl_vars['userlogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;"> 
                      	<span onclick="uploads();">上传图片</span> 
                      </td>
                    </tr>
					 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">默认店铺头像</td>
                      <td>
                      	<input type="hidden" name="shoplogo" id="shoplogo" value="<?php echo $_smarty_tpl->tpl_vars['shoplogo']->value;?>
" class="skey" style="width:100px;"> 
                      	<img src="<?php echo $_smarty_tpl->tpl_vars['shoplogo']->value;?>
" width=50px height=50px id="imgshows" <?php if (empty($_smarty_tpl->tpl_vars['shoplogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;"> 
                      	<span onclick="uploadm();">上传图片</span> 
                      </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">登录页面logo</td>
                        <td>
                            <input type="hidden" name="loginlogo" id="loginlogo" value="<?php echo $_smarty_tpl->tpl_vars['loginlogo']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['loginlogo']->value;?>
" width=50px height=50px id="loginlogoshow" <?php if (empty($_smarty_tpl->tpl_vars['loginlogo']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadl();">上传图片</span>
                        </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">微信关注二维码</td>
                        <td>
                            <input type="hidden" name="wxewm" id="wxewm" value="<?php echo $_smarty_tpl->tpl_vars['wxewm']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wxewm']->value;?>
" width=50px height=50px id="imgwxewm" <?php if (empty($_smarty_tpl->tpl_vars['wxewm']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadwx();">上传图片</span>
                        </td>
                    </tr>

                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">APP下载二维码</td>
                        <td>
                            <input type="hidden" name="appewm" id="appewm" value="<?php echo $_smarty_tpl->tpl_vars['appewm']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['appewm']->value;?>
" width=50px height=50px id="imgappewm" <?php if (empty($_smarty_tpl->tpl_vars['appewm']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadappewm();">上传图片</span>
                        </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">注册送优惠劵图标</td>
                        <td>
                            <input type="hidden" name="regimg" id="regimg" value="<?php echo $_smarty_tpl->tpl_vars['regimg']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['regimg']->value;?>
" width=50px height=50px id="imgregimg" <?php if (empty($_smarty_tpl->tpl_vars['regimg']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadregimg();">上传图片</span>
                        </td>
                    </tr>
				  
				  <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">微信分享默认图标</td>
                        <td>
                            <input type="hidden" name="wxshare" id="wxshare" value="<?php echo $_smarty_tpl->tpl_vars['share_img']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['share_img']->value;?>
" width=50px height=50px id="imgwxshare" <?php if (empty($_smarty_tpl->tpl_vars['share_img']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadwxshare();">上传图片</span>
                        </td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">商家配送图标</td>
                        <td>
                            <input type="hidden" name="shoppsimg" id="shoppsimg" value="<?php echo $_smarty_tpl->tpl_vars['shoppsimg']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['shoppsimg']->value;?>
" width=80px height=25px id="shoppsimgshow" <?php if (empty($_smarty_tpl->tpl_vars['shoppsimg']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadshoppsimg();">上传图片</span>
                        </td>
                    </tr>

                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">网站配送图标</td>
                        <td>
                            <input type="hidden" name="psimg" id="psimg" value="<?php echo $_smarty_tpl->tpl_vars['psimg']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['psimg']->value;?>
" width=80px height=25px id="psimgshow" <?php if (empty($_smarty_tpl->tpl_vars['psimg']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadpsimg();">上传图片</span>
                        </td>
                    </tr>

                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">pc端跑腿二维码</td>
                        <td>
                            <input type="hidden" name="ptewm" id="ptewm" value="<?php echo $_smarty_tpl->tpl_vars['ptewm']->value;?>
" class="skey" style="width:100px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['ptewm']->value;?>
" width=35px height=50px id="imgptewm" <?php if (empty($_smarty_tpl->tpl_vars['ptewm']->value)){?> style="display:none;"<?php }?> style="margin-top: 15px;">
                            <span onclick="uploadptewm();">上传图片</span>
                        </td>
                    </tr>	
			 
                  </tbody>
                </table>
              </div>
              <div class="blank20"></div>
              <input type="hidden" name="tijiao" id="tijiao" value="do" class="skey" style="width:250px;">
              <input type="hidden" name="saction" id="saction" value="logoset" class="skey" style="width:250px;">
               <input type="submit" value="确认提交" class="button">  
            </form>
          </div>
         
           
         </div>
      
    

          </div> 
<script>
	var dialogs ;
 function uploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucess"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片'); 
 }
 function uploadsucess(flag,obj,linkurl){
 	 if(flag == true){
 		
		dialogs.close();
		uploads();
 	 }else{ 
 		dialogs.close();
 	 $('#userlogo').val(linkurl);
   	$('#imgshow').attr('src',linkurl);
 	  $('#imgshow').show();
   }
 } 
  function uploadwxshare(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsuceswxshare"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadsuceswxshare(flag,obj,linkurl){
        if(flag == true){
            
            dialogs.close();
            uploadw();
        }else{
            
            dialogs.close();
            $('#wxshare').val(linkurl);
            $('#imgwxshare').attr('src',linkurl);
            $('#imgwxshare').show();
        }
    }
function uploadregimg(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucesregimg"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadsucesregimg(flag,obj,linkurl){
        if(flag == true){
            
            dialogs.close();
            uploadw();
        }else{
            
            dialogs.close();
            $('#regimg').val(linkurl);
            $('#imgregimg').attr('src',linkurl);
            $('#imgregimg').show();
        }
    } 
 function uploadm(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucessm"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片'); 
 }
 function uploadsucessm(flag,obj,linkurl){
 	 if(flag == true){
 		
		dialogs.close();
		uploadm();
 	 }else{ 
 		dialogs.close();
 	 $('#shoplogo').val(linkurl);
 	$('#imgshows').attr('src',linkurl);
 	$('#imgshows').show(); 
   }
 } 
 function uploadadmin(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucessadmin"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片'); 
 }
 function uploadsucessadmin(flag,obj,linkurl){
 	 if(flag == true){
 		
		dialogs.close();
		uploadadmin();
 	 }else{ 
 		dialogs.close();
 	 $('#adminlogo').val(linkurl);
 	$('#imgshowadmin').attr('src',linkurl);
 	$('#imgshowadmin').show(); 
   }
 }   
function uploadc(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucessc"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片'); 
 }
 function uploadsucessc(flag,obj,linkurl){
 	 if(flag == true){
 		
		dialogs.close();
		uploadc();
 	 }else{ 
 		dialogs.close();
 	 	$('#sitelogo').val(linkurl);
 	  $('#imgshowc').attr('src',linkurl);
 	  $('#imgshowc').show(); 
   }
 } 
 function uploadk(){
 	 dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucessk"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片'); 
}
function uploadsucessk(flag,obj,linkurl){
 	 if(flag == true){
 		
		dialogs.close();
		uploadk();
 	 }else{ 
 		dialogs.close();
 	 	$('#html5logo').val(linkurl);
 	  $('#html5logoshow').attr('src',linkurl);
 	  $('#html5logoshow').show(); 
   }
 }

    function uploadw(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsuceswebc"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadsuceswebc(flag,obj,linkurl){
        if(flag == true){
            
            dialogs.close();
            uploadw();
        }else{
            
            dialogs.close();
            $('#webcaption').val(linkurl);
            $('#imgwebcaption').attr('src',linkurl);
            $('#imgwebcaption').show();
        }
    }
    function uploadwx(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsuceswxewm"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadsuceswxewm(flag,obj,linkurl){
        if(flag == true){
            
            dialogs.close();
            uploadw();
        }else{
            
            dialogs.close();
            $('#wxewm').val(linkurl);
            $('#imgwxewm').attr('src',linkurl);
            $('#imgwxewm').show();
        }
    }

    function uploadappewm(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucesappewm"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadsucesappewm(flag,obj,linkurl){
        if(flag == true){

            dialogs.close();
            uploadw();
        }else{
            dialogs.close();
            $('#appewm').val(linkurl);
            $('#imgappewm').attr('src',linkurl);
            $('#imgappewm').show();
        }
    }
    function uploadptewm(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadsucesptewm"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadsucesptewm(flag,obj,linkurl){
        if(flag == true){

            dialogs.close();
            uploadw();
        }else{
            dialogs.close();
            $('#ptewm').val(linkurl);
            $('#imgptewm').attr('src',linkurl);
            $('#imgptewm').show();
        }
    }

    function uploadshoppsimg(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadshoppsimga"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadshoppsimga(flag,obj,linkurl){
        if(flag == true){

            dialogs.close();
            uploadw();
        }else{
            dialogs.close();
            $('#shoppsimg').val(linkurl);
            $('#shoppsimgshow').attr('src',linkurl);
            $('#shoppsimgshow').show();
        }
    }
    function uploadpsimg(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadpsimga"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadpsimga(flag,obj,linkurl){
        if(flag == true){

            dialogs.close();
            uploadw();
        }else{
            dialogs.close();
            $('#psimg').val(linkurl);
            $('#psimgshow').attr('src',linkurl);
            $('#psimgshow').show();
        }
    }


    function uploadl(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadloginlogo"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadloginlogo(flag,obj,linkurl){
        if(flag == true){
            dialogs.close();
            uploadw();
        }else{
            dialogs.close();
            $('#loginlogo').val(linkurl);
            $('#loginlogoshow').attr('src',linkurl);
            $('#loginlogoshow').show();
        }
    }

    function uploadwxbglogo(){
        dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/adminupload/func/uploadwxbglogos"),$_smarty_tpl);?>
');
        dialogs.title('上传图片');
    }
    function uploadwxbglogos(flag,obj,linkurl){
        if(flag == true){
            dialogs.close();
            uploadw();
        }else{
            dialogs.close();
            $('#wxbglogo').val(linkurl);
            $('#wxbglogoshow').attr('src',linkurl);
            $('#wxbglogoshow').show();
        }
    }



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