<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 00:47:03
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\m7\order\fastfoodshop.html" */ ?>
<?php /*%%SmartyHeaderCode:193515b3cfa07e6d601-11953899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b43226b054663b31b63cc798c17e37fac3be7151' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\m7\\order\\fastfoodshop.html',
      1 => 1504426507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193515b3cfa07e6d601-11953899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pstimelist' => 0,
    'itk' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'shop' => 0,
    'goodstype' => 0,
    'items' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3cfa0811dac4_74963428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cfa0811dac4_74963428')) {function content_5b3cfa0811dac4_74963428($_smarty_tpl) {?><div class="menu fl">
            	<div class="menuTitle">
                	<span>快速订餐-CART</span>
                </div>
              
                    <div class="goodshow" style="height: 442px;">
                    
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
                    	<div class="menugoodlist" id="cartshow" style="height: 360px;">
                    		
                    		
                    	 
                     
                        
                        
                        
                        </div>
                        <div class="cl"></div>
                        
                        <div class="cdjs">
                        	<span class="span1">打包费:<font color="#ec7501" size="2" style="font-weight:bold;">¥<font id="bagcost">0</font></font></span>
                            <span class="span2">小计：<font color="#ec7501" size="2" style="font-weight:bold;">¥<font id="sumcost">0</font></font></span>
                        </div>
                    </div>
               
                
                
                <div class="xxqq" >
                	<form>
                    	<div class="xiangqing" id="contactname">
                        	<div class="xingming fl">姓名</div>
                            <div class="inputtext fl"><input type="text" name="contactname" value="" /></div>
                        </div>
                        <div class="xiangqing" id="phone">
                        	<div class="xingming fl">电话</div>
                            <div class="inputtext fl"><input type="text" name="phone" value="" /></div>
                        </div>
                        <input type="hidden" name="areaid" value=""/>
                        <div class="xiangqing" id="address">
                        	<div class="xingming fl">选地址</div>
                            <div class="inputtext fl"><input type="text" readonly  placeholder="点击去选地址" style="cursor:pointer;" name="area" value="" /></div>
                        </div>
                        <div class="xiangqing" id="address">
                        	<div class="xingming fl">地址</div>
                            <div class="inputtext fl" ><input type="text" name="address" value="" /></div>
                        </div>
                        <div class="xiangqing" id="address">
                        	<div class="xingming fl">时间</div> 
                            <div class="inputtext fl" style="margin-top: 6.5px;">
							
							    <select name="minit" >
								 <?php  $_smarty_tpl->tpl_vars['itk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pstimelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itk']->key => $_smarty_tpl->tpl_vars['itk']->value){
$_smarty_tpl->tpl_vars['itk']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['itk']->value['value'];?>
">  <?php echo $_smarty_tpl->tpl_vars['itk']->value['name'];?>
</option>
								 <?php } ?> 
								</select>
							
							
						    </div>
                        </div>
						  <div class="xiangqing" id="pscost">
                        	<div class="xingming fl">配送费</div>
                            <div class="inputtext fl"><input type="text" name="pscost" placeholder="如果不输入则为0" value="" /></div>
                        </div>
                         <div class="xiangqing"  >
                        	<div class="xingming fl">备注</div>
                            <div class="inputtext fl"><input type="text" name="remark" value="" /></div>
                        </div>
                         <input type="hidden" value="" name="buyerlng" />
                        <input type="hidden" value="" name="buyerlat" />
                        
                        
                    </form>
                    
                </div>
                <div class="leftBot">
                <div class="fl curbtn" onclick="dayindata();">
                	 
                 </div>
                  <div class="fr curbtn" onclick="makeorder();">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/xiadan.png" />
                    
                  </div>
                  <div class="cl"></div>
                </div>
                
            </div>
             <!---账单明细 end---> 
             
             
             <!---账单列表 start---> 
        	<div class="conList fl">
            	<div class="listTitle">
                	<ul>
                    
                       <li  class="cur curbtn" data="a"><?php echo $_smarty_tpl->tpl_vars['shop']->value['shopname'];?>
点餐</li> 
                       <li style="font-size:12px;height: 40px;overflow: hidden;">营业时间&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['shop']->value['starttime'];?>
 电话&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['shop']->value['phone'];?>
</li>
                       
                    </ul>
                  
                </div>
                
                <div class="fenlei">
                	 
                    <div class="new_caidan" id="caidanlist">
                    	<ul>
                    		<li class="on" onclick="showtype(0,this);">全部</li>
                    		  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodstype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                        	<li onclick="showtype('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
',this);"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</li>
                        	<?php } ?>
                            
                        </ul>
                        <div class="cl"> </div>
                    </div>
                    <div class="cl"> </div>
                </div>
                
                <div class="caidanList">
                	<div class="mealsList" id="goodslist">
                    	<ul>
                    		    <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                        	<li <?php if ($_smarty_tpl->tpl_vars['items']->value['count']<1){?>style=" background:#b5b4b4;"<?php }else{ ?> onclick="addtocart('<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['bagcost'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['product_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['items']->value['count'];?>
');" <?php }?>class="litype<?php echo $_smarty_tpl->tpl_vars['items']->value['typeid'];?>
" id="goodsdet_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['items']->value['product_id'];?>
">
                            	<p class="danjia" style="margin-top:5px;">¥<span><?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
</span></p>
                                <p class="caidanName"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</p>
                                <div class="mealsok"></div> 
                                <div class="unok"></div>
                            </li>
                         <?php } ?>    
                        </ul>
                  <script>
				  
                    $(function(){
						//菜单列表自动适应的最小高度
						var num = $('.fenlei li').length ;						
						var fenleiHeight = Math.ceil(num/7)*43+10;
						
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
              <div class="cl"></div> <?php }} ?>