<?php /* Smarty version Smarty-3.1.10, created on 2018-07-05 00:58:10
         compiled from "D:\wwwroot\ceshi.52jscn.com\templates\adminpage\weixin\ztylist.html" */ ?>
<?php /*%%SmartyHeaderCode:193305b3cfca2eb0d62-83596212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41bc0159ac9cda1234b7c5e8437af1dd18d2aa69' => 
    array (
      0 => 'D:\\wwwroot\\ceshi.52jscn.com\\templates\\adminpage\\weixin\\ztylist.html',
      1 => 1508242361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193305b3cfca2eb0d62-83596212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ztymode' => 0,
    'list' => 0,
    'items' => 0,
    'zlist' => 0,
    'siteurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5b3cfca32ba8c0_13222366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3cfca32ba8c0_13222366')) {function content_5b3cfca32ba8c0_13222366($_smarty_tpl) {?><style>
	.appAddtoCon .appAddtoRight .appAddtoModi table tbody tr td img.yuan{
		width: 96px;
		border-radius:0px;
	}
    .appAddtoCon .appAddtoRight{
        height:600px!important;
    }
</style>
<div class="appAddtoRight home_1">
<i class="app_tri"></i>
<div class="appAddtoTit">
	<i class="icon_edit"></i>
	<h3>首页模块编辑</h3>
</div>
<div style="padding-left:50px;line-height:21px;">
	<span style="color:#000;"><input type="radio" name="ztystyle" value="1" <?php if ($_smarty_tpl->tpl_vars['ztymode']->value['type']==1){?>checked<?php }?> checked>样式一</span>&nbsp;&nbsp;
	<span style="color:#000;"><input type="radio" name="ztystyle" value="2" <?php if ($_smarty_tpl->tpl_vars['ztymode']->value['type']==2){?>checked<?php }?> >样式二</span>&nbsp;&nbsp;
	<span style="color:#000;"><input type="radio" name="ztystyle" value="3" <?php if ($_smarty_tpl->tpl_vars['ztymode']->value['type']==3){?>checked<?php }?> >样式三</span>&nbsp;&nbsp;
</div>
<div class="appAddtoSubj" style="border-top:1px solid #ccc;">
	<table>
		<thead>
			<tr>
				<td>广告图</td>
				<td>排序</td>
				<td>操作</td>
			</tr>
		</thead>
	</table>
</div>

<div class="appAddtoModi">
	<table>
		<tbody id="tab">
				<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
				<tr cid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" type="ztylist">
					<td>
						<img class="yuan"  src="<?php echo $_smarty_tpl->tpl_vars['items']->value['ztyimg'];?>
"  />
					</td>
					<td>
						<span class="orderid"><?php echo $_smarty_tpl->tpl_vars['items']->value['orderid'];?>
</span>
					</td>
					<td>
						<a class="appAddaL_bg" href="javascript:;">编辑</a>
						<?php if ($_smarty_tpl->tpl_vars['items']->value['is_hidden']==1){?>
						<a class="appAdda_bg02" href="javascript:;">隐藏</a>
						<?php }else{ ?>
						<a class="appAdda_bg01" href="javascript:;">显示</a>
						<?php }?>
						</td>
					<input type="hidden" class="imgurl" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['ztyimg'];?>
">
					<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['ids'];?>
">
					<input type="hidden" class="ztyids" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
					<input type="hidden" class="ztyshowstyle" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['ztystyle'];?>
">
				</tr>
				<?php } ?>
				<?php }?>
		</tbody>
	</table>
</div>
<div class="appAddtoPopuCon" style="height:255px;" >
	<div class="appAddtoPopuCon" style="height:255px;">
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
								<span>专题页：</span>
								<select name="ztyid" id="allztylist">
									<?php if (!empty($_smarty_tpl->tpl_vars['zlist']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</option>
									<?php } ?>
									<?php }?>
								</select>
							</li>

							<li>
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
    var ztymode = "<?php echo $_smarty_tpl->tpl_vars['ztymode']->value['type'];?>
";
    var bc = 6-Number(ztymode);

	var ztnum  = $("#tab").find("tr").length;
	var addtr='';
	for(var i=0;i<Number(bc)-Number(ztnum);i++){
		addtr += '<tr cid=0 type="ztylist">'
		addtr += 	'<td>'
		addtr += 		'<img class="yuan"  src="/upload/goods/20170628153237486.png"  />'
		addtr +=	'</td>'
		addtr +=	'<td>'
		addtr +=		'<span class="orderid">0</span>'
		addtr +=	'</td>'
		addtr +=	'<td>'
		addtr +=		'<a class="appAddaL_bg" href="javascript:;">编辑</a> '
		addtr +=  '<a class="appAdda_bg01" href="javascript:;">显示</a>'
		addtr +=	'</td>'
		addtr +=	'<input type="hidden" class="imgurl" value=/upload/goods/20170628153237486.png>'
		addtr +=	'<input type="hidden" class="id" value=0>'
		addtr += '</tr>'
	}
	$("#tab").append(addtr);
	$(".appAddaL_bg").click(function(){
		$('#bottom_edit').show();
		$("input[name='i_links']").val($(this).parents("tr").find(".link").val());
		$("input[name='i_img_url']").val( $(this).parents("tr").find(".imgurl").val());
		$("input[name='i_orderid']").val($(this).parents("tr").find(".orderid").html());
		$("input[name='id']").val($(this).parents("tr").find(".id").val());
		var ztyids = $(this).parents("tr").find(".ztyids").val()
		$("#allztylist option").each(function(){
			if($(this).attr("value")==ztyids){
				$(this).attr("selected",true);
			}else{
				$(this).attr("selected",false);
			}
		})
  
	})
	$('#dosave').click(function(){
		var type=$("input[name='ztystyle']:checked").val();
		var url = '<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=adminpage&action=weixin&module=saveappindex&datatype=json&type=ztylist&ztytype='+type;
		$.ajax({
			type: 'post',
			async:false,
			data:$('#dosaveform').serialize(),
			url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
			dataType: 'json',success: function(content){
				if(content.error == false){
					alert('更新成功');
					showzty();
					$('#showjscontent').html('');
					var content = htmlback("<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=adminpage&action=weixin&module=ztylist");
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
</script><?php }} ?>