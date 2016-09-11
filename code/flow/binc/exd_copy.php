<?php
(!defined('RUN_MODE')) && die('No Init'); 

#$_groups = glbConfig::read('groups');
#$view = empty($view) ? 'list' : $view;

$mod = empty($mod) ? 'demo' : $mod;
$type = basReq::val('type','mdata'); // mod, tabid
$kid = empty($kid) ? '' : $kid;
$title = basReq::val('title','');

$_cfg = glbConfig::read($mod); 
$cp = new exdCopy($mod, $type);

if(!empty($bsend)){
	
	$method = $type=='tabid' ? 'cplan' : 'cdata'; 
	$res = $cp->$method($kid, $fm['kid'], $fm['title']);
	basMsg::show(" [{$fm['kid']}] - 复制成功！");	
	
}else{ 

	echo "<div class='h02'>&nbsp;</div>";
	glbHtml::fmt_head('fmlist',"$aurl[1]",'tbdata');

	$tabid = glbDBExt::getTable($mod);
	if($type=='mdata'){
		$kids = glbDBExt::dbAutID($tabid,'yyyy-md-','31');
		$kidnew = $kids[0];
	}else{
		$kidnew = "{$kid}_".basKeyid::kidRand('0',5);
	}
	$okrow = "<input type='text' value='$kid' class='txt w240 disc' disabled='disabled' />";
	$nkrow = "<input name='fm[kid]' type='text' value='$kidnew' class='txt w240' />";
	glbHtml::fmae_row('Key标识',"$okrow");
	glbHtml::fmae_row('复制-=>',"$nkrow");

	$titlenew = "{$title}_copy";
	$okrow = "<input type='text' value='$title' class='txt w240 disc' disabled='disabled' />";
	$nkrow = "<input name='fm[title]' type='text' value='$titlenew' class='txt w240' />";
	glbHtml::fmae_row('条目名称',"$okrow");
	glbHtml::fmae_row('复制-=>',"$nkrow");

	glbHtml::fmae_send('bsend','提交','25');
	glbHtml::fmt_end(array("mod|$mod","type|$type","kid|$kid","title|$title"));
}
