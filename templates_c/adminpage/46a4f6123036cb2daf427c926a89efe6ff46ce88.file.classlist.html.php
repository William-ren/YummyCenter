<?php /* Smarty version Smarty-3.1.10, created on 2018-07-04 15:54:56
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\adminpage\weixin\classlist.html" */ ?>
<?php /*%%SmartyHeaderCode:294815b3c7d50b0fa99-15394402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a4f6123036cb2daf427c926a89efe6ff46ce88' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\weixin\\classlist.html',
      1 => 1506478581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294815b3c7d50b0fa99-15394402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'items' => 0,
    'catlist' => 0,
    'itv' => 0,
    'catarr' => 0,
    'siteurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3c7d50cbc6e5_41495463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3c7d50cbc6e5_41495463')) {function content_5b3c7d50cbc6e5_41495463($_smarty_tpl) {?>
<div class="appAddtoRight home_1" style="height:630px;">
<i class="app_tri"></i>
<div class="appAddtoTit">
	<i class="icon_edit"></i>
	<h3>首页模块编辑</h3>
</div>
<div class="appAddtoSubj">
	<table>
		<thead>
			<tr>
				<td>图标</td>
				<td>名称</td>
				<td>排序</td>
				<td>操作</td>
			</tr>
		</thead>
	</table>
</div>

<div class="appAddtoModi">
	<table>
		<tbody>
				<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
				<tr cid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" type="classlist">
					<td>
						<img class="yuan"  src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
"  />
					</td>
					<td>
						<span class="name"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</span>
					</td>
					<td>
						<span class="orderid"><?php echo $_smarty_tpl->tpl_vars['items']->value['orderid'];?>
</span>
					</td>
					<td>
						<a class="appAddaL_bg" href="javascript:;">编辑</a>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['is_show']==1){?>
						<a class="appAdda_bg02" href="javascript:;">隐藏</a>
						<?php }else{ ?>
						<a class="appAdda_bg01" href="javascript:;">显示</a>
						<?php }?>
						</td>
					<input type="hidden" class="link" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['link'];?>
">
					<input type="hidden" class="imgurl" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
">
					<input type="hidden" class="modeopt" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['modeopt'];?>
">
					<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
					<input type="hidden" class="param" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['param'];?>
">
				</tr>
				<?php } ?>
				<?php }?>
		</tbody>
	</table>
</div>
<div class="appAddtoPopuCon" style="height:284px;" >

	<div class="appAddtoPopuCon" style="height:284px;">
		<div class="appAddtoPopuTit">
			<h4>编辑关键字模块</h4>
		</div>
		<div id="bottom_edit"  style="display:none;">
			<div class="appAddtoPopuBox">
				<div class="appAddtoPopuTop">
					<form id="dosaveform">
						<ul>
							<input type="hidden" name="htmldataid" value="">
							<li>
								<span>名称：</span>
								<input type="text" value="" name="name"/>
							</li>
							<li>
								<span>链接方式：</span>
								<input type="radio" value="1" name="modeopt"  class="mode" style="width:15px;float:none;" />模块选择
								<input type="radio" value="2" name="modeopt" class="lk" style="width:15px;float:none;" />填写链接
							</li>
							<li style="display:none;" id="classlist">
								<span >选择分类：</span>
								<select name="optclasslist" id="optclasslist">
								<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['catarr']->value[$_smarty_tpl->tpl_vars['itv']->value['cattype']];?>
-<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</option>
								<?php } ?>
								    <option value="marketlist">超市便利店</option>
									<option value="lifehelp">生活服务</option>
									<option value="shophui">到店消费</option>
									<option value="paotui">跑腿</option>
								</select>
							</li>

							<li style="display:none;" id="linkinput">
								<span >链接：</span>
								<input type="text" value="0" name="link"/>
							</li>

							<li >
								<span>排序ID：</span>
								<input type="text" value="0" name="i_orderid"/>
								<b>排序</b>
							</li>
							<li>
								<span>上传图片：</span>
								<div class="appAddtoFile">
									<input readonly="readonly" type="text" value="" name="i_img_url"/>
									<span>浏览</span>
									<input class="appfile" type="file" id="imgFile" name="imgFile"/>
								</div>
							</li>
						</ul>
						<input type="hidden" name="id" value="0">
					</form>

				</div>
				<div class="appAddtoPopuBot">
					<input type="button" value="保存修改" id="dosave"/>
					<a href="javascript:;" id="doclose">取消</a>
				</div>
			</div>
		</div>
</div>
</div>
<script>
	$(".appAddaL_bg").click(function(){
		$('#bottom_edit').show();
		$("input[name='name']").val($(this).parents("tr").find(".name").html());
		$("input[name='i_img_url']").val( $(this).parents("tr").find(".imgurl").val());
		$("input[name='i_orderid']").val($(this).parents("tr").find(".orderid").html());
		$("input[name='id']").val($(this).parents("tr").find(".id").val());
		$("input[name='link']").val($(this).parents("tr").find(".link").val());
        var optval = $(this).parents("tr").find(".param").val()
        $("#optclasslist option").each(function(){
            if($(this).val()==optval){
                $(this).attr("selected",true);
            }else{
                $(this).attr("selected",false);
            }
        })
		if($(this).parents("tr").find(".modeopt").val()==1){
			$(".mode").attr("checked","checked");
		}else{
			$(".lk").attr("checked","checked");
		}
		togemode();
	})
	$("input[name='modeopt']").click(function(){
		togemode();
	})
	$('#dosave').click(function(){
		var url = '<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=adminpage&action=weixin&module=saveappindex&datatype=json&type=classlist';
		$.ajax({
			type: 'post',
			async:false,
			data:$('#dosaveform').serialize(),
			url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
			dataType: 'json',success: function(content){
				if(content.error == false){
					alert('更新成功');
					$('#showjscontent').html('');
					var content = htmlback("<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=adminpage&action=weixin&module=classlist");
					if(content.flag == false){
						var getmoreContent =  $.trim(content.content);
						$('#showjscontent').append(getmoreContent);
					}
				}else{
					if(content.error == true){
						alert(content.msg);
					}else{
						alert(content);
					}
				}
			},
			error: function(content){
				alert('数据提交失败');
			}
		});
	});
	function togemode(){
		var flag = $("input[name='modeopt']:checked").val();
		if(flag==1){
			$("#classlist").show();
			$("#linkinput").hide();
		}else{
			$("#classlist").hide();
			$("#linkinput").show();

		}
	}
</script><?php }} ?>