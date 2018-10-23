<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 00:54:25
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\adminpage\system\otherset.html" */ ?>
<?php /*%%SmartyHeaderCode:189685b3cfbc1b72006-87632218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c603dfa487607166b2184e145f13fe6b493f82b' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\system\\otherset.html',
      1 => 1506432319,
      2 => 'file',
    ),
    '4ffb5de90628426c692e9b7a4ce1e1bb8bc712d6' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\public\\admin.html',
      1 => 1505877233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189685b3cfbc1b72006-87632218',
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
  'unifunc' => 'content_5b3cfbc1f3bd93_59978578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cfbc1f3bd93_59978578')) {function content_5b3cfbc1f3bd93_59978578($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wwwroot\\ceshi.52jscn.com\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js"></script>
 
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
   	        	 	   <div class="showtop_t" id="positionname">网站限制</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	 
	 <div style="width:auto;overflow-x:hidden;overflow-y:auto"> 
         
          <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/system/module/saveotherset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">
                  <tbody>
                  	<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">是否开启在线支付</td>
                      <td><input type="checkbox" name="open_acout" id="open_acout" value="1" <?php if ($_smarty_tpl->tpl_vars['open_acout']->value==1){?>checked<?php }?>>勾选开启&nbsp;&nbsp;&nbsp;(PC端、微信端、APP端同时生效)</td>
                    </tr>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">是否开启货到付款</td>
                      <td><input type="checkbox" name="is_daopay" id="is_daopay" value="1" <?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==1){?>checked<?php }?>>勾选开启&nbsp;&nbsp;&nbsp;(PC端、微信端、APP端同时生效)</td>
                    </tr>                   
                    
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">用户注册发送验证码</td>
                      <td><input type="checkbox" name="regestercode" id="regestercode" value="1"  <?php if ($_smarty_tpl->tpl_vars['regestercode']->value==1){?>checked<?php }?>>勾选允许&nbsp;&nbsp;&nbsp;(PC端、微信端、APP端同时生效)</td>
                    </tr>
                    
					 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">微信端登录方式</td>
                        <td><input type="radio" name="wxLoginType"   value="0"  <?php if ($_smarty_tpl->tpl_vars['wxLoginType']->value==0){?>checked<?php }?>>自动登录（微信接口） 
                       <input type="radio" name="wxLoginType"   value="1"  <?php if ($_smarty_tpl->tpl_vars['wxLoginType']->value==1){?>checked<?php }?>>其他登录方式  &nbsp;&nbsp;&nbsp;（仅微信端和触屏端有效）</td>
                    </tr>
					
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td class="left">是否开启前台促销规则</td>
                        <td><input type="checkbox" name="open_wxcx" id="open_wxcx" value="1" <?php if ($_smarty_tpl->tpl_vars['open_wxcx']->value==1){?>checked<?php }?>>勾选开启,商家列表显示促销信息 &nbsp;&nbsp;&nbsp;（微信端、APP端同时生效）</td>
                    </tr>        
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">下单成功后通知买家</td>
                      <td>
                      	<input type="checkbox" name="allowedsendbuyer" id="allowedsendbuyer" value="1" <?php if ($_smarty_tpl->tpl_vars['allowedsendbuyer']->value==1){?>checked<?php }?>>短信通知 
                      	</td>
                    </tr>
                    <!-- <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">订单是否需要商家确认制作</td>
                      <td>
                      	<input type="checkbox" name="allowed_is_make" id="allowed_is_make" value="1" <?php if ($_smarty_tpl->tpl_vars['allowed_is_make']->value==1){?>checked<?php }?>>勾选后 商家必须确认制作  不勾选：订单则默认通过制作                      	</td>
                    </tr> -->
                    
					<tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">商家制作后是否支持申请退款</td>                      					  
                      	<td><input type="radio" name="allowreback"   value="1"  <?php if ($_smarty_tpl->tpl_vars['allowreback']->value==1){?>checked<?php }?>> 是（支持退款） 
                       <input type="radio" name="allowreback"   value="0"  <?php if ($_smarty_tpl->tpl_vars['allowreback']->value==0){?>checked<?php }?>> 否（不支持退款） &nbsp&nbsp&nbsp&nbsp该设置只对在线支付订单有效 </td>      
                    </tr>
					 
                   
				   <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">管理员后台审核订单</td>
                      <td><input type="checkbox" name="man_ispass" id="man_ispass" value="1"  <?php if ($_smarty_tpl->tpl_vars['man_ispass']->value==1){?>checked<?php }?>>勾选审核,开启后管理员审核通过商家才能看到订单并同时发送通知(只针对货到支付，若是在线支付 支付成功后自动发送通知)</td>
                    </tr>                   
					 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">是否是提交苹果审核</td>
                      <td><input type="checkbox" name="ios_waiting" id="ios_waiting" value="1"  <?php if ($_smarty_tpl->tpl_vars['ios_waiting']->value==1){?>checked<?php }?>>勾选表示提交审核中,IOS程序限制距离无效
                      	</td>
                    </tr>
					 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                      <td class="left">平台采购店铺id</td>
                      <td><input type="text" name="plateshopid" id="plateshopid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plateshopid']->value)===null||$tmp==='' ? '0' : $tmp);?>
" class="skey" style="width:50px;"></td>
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
        </div> 
        
        
   
    </div> 
 
   	        	 	
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