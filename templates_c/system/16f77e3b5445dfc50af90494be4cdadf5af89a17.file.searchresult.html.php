<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 01:10:23
         compiled from "D:\wwwroot\ceshi.52jscn.com\module\wxsite\template\searchresult.html" */ ?>
<?php /*%%SmartyHeaderCode:84265b3cff7fd5b1c0-29551619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f77e3b5445dfc50af90494be4cdadf5af89a17' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\module\\wxsite\\template\\searchresult.html',
      1 => 1504745814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84265b3cff7fd5b1c0-29551619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shopsearchlist' => 0,
    'items' => 0,
    'shoplogo' => 0,
    'shoppsimg' => 0,
    'psimg' => 0,
    'itv' => 0,
    'goodssearchlist' => 0,
    'shopinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3cff80c4f372_23032579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cff80c4f372_23032579')) {function content_5b3cff80c4f372_23032579($_smarty_tpl) {?>	<div class="searchtit"><i class="topsetit"></i><h3>商家</h3></div>

	<div class="nearbyreCon" style="margin-top:0px;">
	<div class="nearbyreBox">
	<?php if (!empty($_smarty_tpl->tpl_vars['shopsearchlist']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shopsearchlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	
				<ul class="nearbyre"  data-supplierid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  > 
			 

					<?php if ($_smarty_tpl->tpl_vars['items']->value['shoptype']==0){?>
				 		 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/wm/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
">
					<?php }else{ ?>
					 	<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/mk/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
">
					<?php }?>

				  <li class="nearbyreLimg"><img class="scrollLoading"  src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"></li>  
			  	<li class="nearbyreRco"> 
			  	 <ul class="nearbyrecommend">  
				  	  <li><h3><?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
</h3></li>  
				 
				 <?php if ($_smarty_tpl->tpl_vars['items']->value['opentype']==3){?>
				 		<li class="nerestate" style="margin-top: 8px;"><i class="nerejs"></i></li> 
				  <?php }?>
				<?php if ($_smarty_tpl->tpl_vars['items']->value['opentype']!=2&&$_smarty_tpl->tpl_vars['items']->value['opentype']!=3){?>
				 	<li class="nerestate" style="margin-top: 8px;"><i class="nerexx"></i></li> 
				<?php }?>
				   <li>  
				  <ul class="neresavo">
                      <li></li>
				 	<!--<li style="width:'+spdatas[i].point*15+'px; height:15px; overflow:hidden;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>-->
                      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['items']->value['point'];?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['total'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=$_tmp1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?><i class="fa fa-star" style="color:#fac82f!important;"></i><?php endfor; endif; ?>
                      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['items']->value['point'];?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['total'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=5-$_tmp2) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?><i class="fa fa-star" style="color:#C7C7C7;" ></i><?php endfor; endif; ?>
				 		<li>月售<?php echo $_smarty_tpl->tpl_vars['items']->value['ordercount'];?>
单</li>
				  
				 <?php if ($_smarty_tpl->tpl_vars['items']->value['sendtype']==1){?>
					<li style=" float:right;"><div class="homeNeaLab"><img data-src="<?php echo $_smarty_tpl->tpl_vars['shoppsimg']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['shoppsimg']->value;?>
" width="50px" height="14px"/></div></li>  
					<?php }else{ ?>
					<li style=" float:right;"><div class="homeNeaLab"><img data-src="<?php echo $_smarty_tpl->tpl_vars['psimg']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['psimg']->value;?>
" width="50px" height="14px"/></li> 
				<?php }?>
				  </ul>  
				  	  </li>  
				   	  <li>  
				  	   <ul class="nereprice"> 
				 		<li><span>起送价<b>￥<?php echo $_smarty_tpl->tpl_vars['items']->value['limitcost'];?>
</b></span>|</li> 
				   		<li><span>配送费<b>￥<?php echo $_smarty_tpl->tpl_vars['items']->value['pscost'];?>
</b></span><?php if ($_smarty_tpl->tpl_vars['items']->value['attrdet']['input']!=''){?>| <?php }?></li>  
						<?php if ($_smarty_tpl->tpl_vars['items']->value['attrdet']['input']!=''){?>	<li><span><?php echo $_smarty_tpl->tpl_vars['items']->value['attrdet']['input'];?>
送达</span></li>  <?php }?>
				  	   <li>
						<span><?php echo $_smarty_tpl->tpl_vars['items']->value['juli'];?>
  <?php echo $_smarty_tpl->tpl_vars['items']->value['address'];?>
 </span>
					  </li>
					   </ul> 
				  	  </li>  
					  
				<?php if (count($_smarty_tpl->tpl_vars['items']->value['cxlist'])>0){?>
					<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['cxlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
 				 	  <li class="neredisc"><i class="nereyh" style=" margin-top: 5px;background:url(<?php echo $_smarty_tpl->tpl_vars['itv']->value['imgurl'];?>
) no-repeat left center ;background-size: 100%;"></i><span><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</span></li> 
					 <?php } ?>
				<?php }?>
				  </ul>  
				  	</li>  
				   </a> 
				  </ul>  
	
	
<?php } ?>	

<?php }else{ ?>
<ul class="nearbyre"   > 
<li>
	未查询到相关商户...
</li>
  </ul>  
<?php }?>

</div>
</div>

	<div class="searchtit"><i class="hissetit"></i><h3>商品</h3></div>
<div class="ordisordRight"style="background:#fff;">

<?php if (!empty($_smarty_tpl->tpl_vars['goodssearchlist']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodssearchlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
 
	  <div class="ordisordBox goodsli"   goodname="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
"   id="gidli_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" typeid="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
" >
	  
		   <div class="ordisord">
			<ul class="ordisordet">
			 <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  ><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"></li>
			 <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"  >
			  <ul class="ordisordC">
			   <li><h3><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</h3></li>
			   <li><span>销量<?php echo $_smarty_tpl->tpl_vars['items']->value['sellcount'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['itv']->value['goodattr'])){?><?php echo $_smarty_tpl->tpl_vars['itv']->value['goodattr'];?>
<?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'])){?><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?><?php }?></span></li>
			   <li><b>￥<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
</b><?php if (!empty($_smarty_tpl->tpl_vars['itv']->value['goodattr'])){?>/<?php echo $_smarty_tpl->tpl_vars['itv']->value['goodattr'];?>
<?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'])){?>/<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?><?php }?>
			   <?php if ($_smarty_tpl->tpl_vars['items']->value['is_cx']==1){?><del><?php echo $_smarty_tpl->tpl_vars['items']->value['cost']/($_smarty_tpl->tpl_vars['items']->value['zhekou']/10);?>
元</del><?php }?></li>
			  <?php if ($_smarty_tpl->tpl_vars['items']->value['is_cx']==1){?> <li><a><?php echo $_smarty_tpl->tpl_vars['items']->value['zhekou'];?>
折</a></li><?php }?>
			  </ul>
			 </li>
			 <li style="float:right;">
			  <ul class="ordisordR">  
			  <?php if ($_smarty_tpl->tpl_vars['items']->value['opentype']!=2&&$_smarty_tpl->tpl_vars['items']->value['opentype']!=3){?>
			  <span class="shopdayangstatus">休息中</span>
			  <?php }else{ ?>
				 
				 <?php if ($_smarty_tpl->tpl_vars['items']->value['count']>0){?> 
					<?php if ($_smarty_tpl->tpl_vars['items']->value['shoptype']==0){?> 
						<li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/wm/id/".((string)$_smarty_tpl->tpl_vars['items']->value['shopid'])),$_smarty_tpl);?>
');"   class="moreguige">进入商家</li>
					  <?php }else{ ?>
					  <li  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/typelx/mk/id/".((string)$_smarty_tpl->tpl_vars['items']->value['shopid'])),$_smarty_tpl);?>
');"   class="moreguige">进入商家</li>
					  <?php }?>
				  <?php }else{ ?>
				  <li style="color:#cccccc;"  onclick="dolink('<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/foodshow/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
');"   class="moreguige">售完</li>
				  
				  <?php }?>
				   
				   
			  <?php }?>
			 
			  </ul>
			 </li>
			</ul>
		<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['descgoods'])){?>	<p><?php echo $_smarty_tpl->tpl_vars['items']->value['descgoods'];?>
</p> <?php }?>
		   </div>
	 
	  </div> 

<?php } ?> 
	<?php }else{ ?>
 <div class="ordisordBox goodsli" >
	  
		   <div class="ordisord">
			<ul class="ordisordet">
<li>
	未查询到相关商品...
</li>
  </ul>  
  	  </div> 
	  	  </div> 
<?php }?>

	
	</div>
		  <?php }} ?>