<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title>Ddos攻击-tpcitrix.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<link rel="shortcut icon" href="favicon.ico">
  	<link rel="stylesheet" href="layui/css/layui.css"  media="all">
  	<style type="text/css">
		.citrixForm
		{
			margin:25px 10px 5px 10px;
		}
		.citrixBlockquote
		{
			margin:10px;
		}
		.citrixAlign
		{
			text-align: center;
		}
		.citrixBottom
		{
			height: 38px;
			line-height: 38px;
			width: 100%;
			background-color: #ddd;
			position: fixed;
			bottom: 0;
			color: #6f6f6f;
		}
  	</style>
</head>
<body>
<blockquote class="layui-elem-quote citrixBlockquote">
	开源仓库：
	<a href="https://github.com/2722279500/tpCitrixDdos" target="_blank">
		https://github.com/2722279500/tpCitrixDdos
	</a>
</blockquote>
<blockquote class="layui-elem-quote citrixBlockquote">
	申明：使用本工具所造成的法律后果自行承担
</blockquote>
<blockquote class="layui-elem-quote citrixBlockquote">
	最终解释权归tpCitrix.com所有
</blockquote>
<form class="layui-form layui-form-pane citrixForm" id="form_array">
  	<div class="layui-form-item">
	    <label class="layui-form-label">ip地址</label>
	    <div class="layui-input-block">
	  		<input type="text" name="citrixIp" autocomplete="off" placeholder="请输入ip地址" class="layui-input" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
	    </div>
 	</div>
  	<div class="layui-form-item">
	    <label class="layui-form-label">端口</label>
	    <div class="layui-input-block">
	  		<input type="text" name="citrixPort" autocomplete="off" placeholder="请输入端口号" class="layui-input" value="<?php echo $_SERVER['SERVER_PORT']; ?>">
	    </div>
 	</div>
  	<div class="layui-form-item citrixAlign">
    	<span class="layui-btn Ddos" >提交Ddos</span>
  	</div>
</form>
<div class="citrixAlign citrixBottom">
	备案号：皖ICP备17021206号
</div>  
<script src="jquery.js" charset="utf-8"></script>
<script src="layui/layui.js" charset="utf-8"></script>
<script type="text/javascript">
layui.use(['form', 'layedit', 'laydate'], function(){
	var form = layui.form
	,layer = layui.layer
	,layedit = layui.layedit
	,laydate = layui.laydate;

  	//提交ddos
  	$(document).on("click",".Ddos",function()
    {
    	layer.load(1, {
		  shade: [0.1,'#fff'] //0.1透明度的白色背景
		});
    	setTimeout(function()
    	{
	    	$.ajax({
	            url:"ajaxDdos.php",
	            data:$('#form_array').serialize(),
	            type:'post',
	            async: false,
	            dataType : 'json',
	            success:function(res) 
	            {
	                layer.closeAll(); 
	            	layer.alert("秒",{icon:3});
	            },
	            error:function()
	            {
	            	layer.closeAll(); 
	                layer.alert("秒",{icon:3});
	            }
	        });
        },1500);
    });
});
</script>
</body>
</html>