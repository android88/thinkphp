<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
<title>ThinkPHP示例: 分页操作</title>      
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h2{font-size:36px}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 10px;float:auto; width:450px;margin:2px}
	a{text-decoration:none; color:gray;}
	a:hover{color:#F60;}
	div.page{border:1px solid #d4d4d4; background:#333;color:white; padding:5px 15px;float:auto; width:450px;margin:2px;text-align:right}
	</style>
</head>   
<body>   
<div >
<h2>ThinkPHP示例：分页操作</h2>
<div class="result">可以更改配置文件中的<b>URL_MODEL</b>和<b>URL_PATHINFO_DEPR</b>参数查看分页链接的区别。</div>
<table cellpadding=3 cellspacing=5>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td style="border-bottom:1px solid silver;"><span style="color:gray">[ <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?> ]</span> <?php echo ($vo["title"]); ?> </td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>		
</tr>
</table>
<div class="result page"><?php echo ($page); ?></div>
</div> 
</body>   
</html>