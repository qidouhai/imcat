<?php
(!defined('RUN_MODE')) && die('No Init');
require(dirname(__FILE__).'/_pub_cfgs.php');
$ocfgs = glbConfig::read('outdb','ex');
$tabid = 'exd_psyn'; 
$job = basReq::val("job"); 
$jcfg = exdBase::getJCfgs('psyn',$job); //print_r($jcfg); 

if($view=='list'){

	$msg = '';	
	if(!empty($bsend)){
		if(empty($fs_do)) $msg = "请选择操作项目！";
		if(empty($fs)) $msg = "请勾选操作项！";
		else{
			foreach($fs as $id=>$v){ //upd|更新\ndel|删除\nenable|启用\nstop|禁用
				$msg = "设置成功！";
				if($fs_do=='del'){ 
					$db->table($tabid)->where("kid='$id'")->delete();
					$db->table('exd_pslog')->where("kid='$id'")->delete();
					$db->table('exd_sfield')->where("model='$id'")->delete();
				}elseif($fs_do=='show'){ 
					$db->table($tabid)->data(array('enable'=>'1'))->where("kid='$id'")->update();  
				}elseif($fs_do=='upd'){ 
					$db->table($tabid)->data(basReq::in($fm[$id]))->where("kid='$id'")->update();
				}elseif($fs_do=='stop'){ 
					$db->table($tabid)->data(array('enable'=>'0'))->where("kid='$id'")->update(); 
				}
			}
		}
		basMsg::show($msg,'Redir',"?file=$file&mod=$mod&flag=v1");
	}

	$lnkadd = "<a href='$aurl[1]&view=form' onclick='return winOpen(this,\"增加[数据同步]\");'>增加条目&gt;&gt;</a>";
	$links = admPFunc::fileNav($file,'exd_psyn');
	glbHtml::tab_bar("[数据同步]排程<span class='span ph5'>|</span>$lnkadd","$links",50);	
	$list = $db->table($tabid)->order('top')->select(); //->where("pid='$pid'")
	glbHtml::fmt_head('fmlist',"$aurl[1]",'tblist');
	echo "<th>选择</th><th>Key</th><th>名称</th><th>模型</th><th>api</th><th>limit</th><th>排序</th><th>启用</th><th>修改</th><th>执行</th><th>记录</th><th>复制</th>\n";
	if($list){
	foreach($list as $r){
	  $kid = $r['kid']; 
	  $mdname = $_groups[$r['mod']]['title'];
	  echo "<tr>\n".$cv->Select($kid);
	  echo "<td class='tc'>$r[kid]</td>\n";
	  echo "<td class='tc'>$r[title]</td>\n";
	  echo "<td class='tc'>$mdname</td>\n";
	  echo $cv->Url('ApiUrl',1,"$r[api]",'blank');
	  echo "<td class='tc'>$r[limit]</td>\n";
	  echo "<td class='tc'><input name='fm[$kid][top]' type='text' value='$r[top]' class='txt w40' /></td>\n";
	  echo "<td class='tc'>".glbHtml::null_cell($r['enable'])."</td>\n";
	  echo $cv->Url('修改',1,"$aurl[1]&view=form&kid=$r[kid]&recbk=ref","");
	  echo $cv->Url('执行',1,PATH_ROOT."/plus/ajax/exdb.php?act=psyn&mod=$r[mod]&job=$kid&".exdBase::getJSign(),'blank');
	  echo $cv->Url('记录',1,"$aurl[1]&view=loglist&job=$r[kid]&recbk=ref",''); 
	  echo $cv->Url('复制',1,"?file=binc/exd_copy&mod=exd_oimp&kid=$r[kid]&type=tabid&title=$r[title]",'复制方案',480,360); 
	  echo "</tr>"; 
	}}
	echo "<tr>\n";
	echo "<td class='tc'><input name='fs_act' type='checkbox' class='rdcb' onClick='fmSelAll(this)' /></td>\n";
	echo "<td class='tr' colspan='10'><span class='cF00 left'>$msg</span>批量操作: <select name='fs_do'>".basElm::setOption("upd|更新\ndel|删除\nshow|启用\nstop|禁用")."</select> <input name='bsend' class='btn' type='submit' value='执行操作' /> &nbsp; </td>\n";
	echo "</tr>";
	glbHtml::fmt_end(array("mod|$mod"));
	
}elseif($view=='form'){
	
	if(!empty($bsend)){
		if($kid=='is__add'){
			if($db->table($tabid)->where("kid='$fm[kid]'")->find()){
				$msg = "该条目[$fm[kid]]已被占用！";
			}else{
				$msg = '添加成功！';  
				$db->table($tabid)->data(basReq::in($fm))->insert();
				$id = $fm['kid'];	
			}
		}else{
			$msg = '更新成功！'; 
			unset($fm['kid']); 
			$db->table($tabid)->data(basReq::in($fm))->where("kid='$kid'")->update();
		} 
		basMsg::show($msg);	
	}else{

		if(!empty($kid)){
			$fm = $db->table($tabid)->where("kid='$kid'")->find();
		}else{
			$kid = '';
		}
		$def = array( //api	mod	stype	limit
			'kid'=>'','title'=>'','top'=>'888','enable'=>'1','note'=>'','fskip'=>'','fdefs'=>'','cfgs'=>'',
			'api'=>$ocfgs['psyn']['server'],'mod'=>'news','stype'=>'','limit'=>'100',
		);
		foreach($def as $k=>$v){ if(!isset($fm[$k])) $fm[$k] = $v; }
		
		$ienable = " &nbsp; <input name='fm[enable]' type='hidden' value='0' /><input name='fm_enable' type='hidden' value='$fm[enable]' />";
		$ienable .= "启用<input name='fm[enable]' type='checkbox' class='rdcb' value='1' ".($fm['enable']=='1' ? 'checked' : '')." />";
		$itop = " &nbsp; 顺序<input name='fm[top]' type='text' value='$fm[top]' class='txt w40' maxlength='5' reg='n+i' tip='允许2-5数字' />";
		echo "<div class='h02'>&nbsp;</div>";
		glbHtml::fmt_head('fmlist',"$aurl[1]",'tbdata');
		if(!empty($kid)){
			glbHtml::fmae_row('Key标识',"<input name='fm[kid]' type='text' value='$kid' class='txt w150 disc' disabled='disabled' />$ienable");
		}else{
			$vstr = "tip='4-12字符'"; 
			glbHtml::fmae_row('Key标识',"<input name='fm[kid]' type='text' value='$did' class='txt w150' maxlength='12' reg='key:4-12' $vstr />$ienable");
		} 
		
		glbHtml::fmae_row('条目名称',"<input name='fm[title]' type='text' value='$fm[title]' class='txt w150' maxlength='12' reg='tit:2-12' tip='可含字母数字下划线<br>允许2-12字符,建议4-6字符' />$itop");
		glbHtml::fmae_row('api地址',"<input name='fm[api]' type='text' value='$fm[api]' class='txt w400' maxlength='240' reg='str:12-240' tip='不含后面：[/plus/ajax/exdb.php]部分' />");
		$marr = admPFunc::modList(array('docs','users','coms',),'relmod'); 
		$mopt = basElm::setOption($marr,$fm['mod']);		
		$slimit = " &nbsp; limit<input name='fm[limit]' type='text' value='$fm[limit]' class='txt w60' maxlength='5' reg='n+i' tip='每批次同步数据条数' />";
		glbHtml::fmae_row('模型',"<select name='fm[mod]' class='w150'>$mopt</select>$slimit");
		if(!empty($kid)){ 
			$mcfg = glbConfig::read($fm['mod']); 
			$topt = comTypes::getOpt($mcfg['i'],$fm['stype'],'',0); 
			glbHtml::fmae_row('类别',"<select name='fm[stype]' class='w150'>$topt</select> 为空即不限");
		}
		glbHtml::fmae_row('排除字段',"<textarea name='fm[fskip]' rows='5' cols='50' wrap='wrap'>$fm[fskip]</textarea>");
		glbHtml::fmae_row('默认值',"<textarea name='fm[fdefs]' rows='5' cols='50' wrap='wrap'></textarea>");
		glbHtml::fmae_row('备注',"<textarea rows='3' cols='50' wrap='wrap'>排除字段/默认值：一行一个；\n默认值格式：fieldname=fieldvalue</textarea>");
		glbHtml::fmae_send('bsend','提交','25');
		glbHtml::fmt_end(array("mod|$mod","kid|".(empty($kid) ? 'is__add' : $kid)));
	}

}elseif(in_array($view,array('loglist'))){ 
	
	$lnkadd = "<a href='$aurl[1]&view=form' onclick='return winOpen(this,\"增加[数据同步]\");'>增加条目&gt;&gt;</a>";
	$links = admPFunc::fileNav($file,'exd_psyn');
	glbHtml::tab_bar("[数据同步]排程<span class='span ph5'>|</span>$lnkadd","$links",50);	
	$cfg = array(
		'sofields'=>array('sysid','outid'),
		'soorders'=>array('atime' => '操作时间(降)','atime-a' => '操作时间(升)'),
		//'soarea'=>array('jifen','数量'),
		'kid'=>'sysid',
	);
	$dop = new dopExtra('exd_pslog',$cfg); //print_r($dop); 
	
	// 删除操作
	if(!empty($bsend)){
		$vbak = $view;
		$view = 'del_b3';
		require(dirname(dirname(__FILE__)).'/binc/exd_inc1.php');
		$view = $vbak;
	} 
	
	$umsg = $msg ? "<span class='cF00'>$msg</span>" : '';
	$dop->so->whrstr .= " AND `kid` ='$job'";
	$dop->sobar("[数据同步记录] $msg",50,'-1',array('job'=>$job));

	glbHtml::fmt_head('fmlist',"$aurl[1]",'tblist');
	echo "<th>选择</th><th>SysID</th><th>OutID</th><th>Done</th><th>atime</th><th>etime</th><th>更新</th></tr>\n";
	$idfirst = ''; $idend = '';
	if($rs=$dop->getRecs()){ 
		foreach($rs as $r){ 
		  $kid = $idend = $r['sysid'];
		  if(empty($idfirst)) $idfirst = $kid;
		  echo "<tr>\n".$cv->Select($kid);
		  echo "<td class='tc'>$r[sysid]</td>\n";
		  echo "<td class='tc'>$r[outid]</td>\n"; 
		  echo "<td class='tc'>$r[done]</td>\n";
		  echo $cv->Time($r['atime'],$td=1);
		  echo $cv->Time($r['etime'],$td=1);
		  echo $cv->Url('更新',1,PATH_ROOT."/plus/ajax/exdb.php?act=psyn&mod=$mod&job=$r[kid]&sysid=$r[sysid]&".exdBase::getJSign(),'blank');
		  echo "</tr>";
		}
		$dop->pgbar($idfirst,$idend);
	}else{
		echo "\n<tr><td class='tc' colspan='15'>无资料！</td></tr>\n";
	}
	glbHtml::fmt_end(array("mod|$mod","job|$job","view|$view"));

}

?>