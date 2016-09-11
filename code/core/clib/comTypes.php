<?php

// Types类
class comTypes{	
	
	// xxx
	static function getChars($arr,$deep='12345'){ 
		$a = array(); 
		foreach($arr as $k=>$v){
			if(!strstr($deep,$v['deep'])) continue;
			$v['kid'] = $k;
			$a[$v['char']][] = $v;
		}
		ksort($a);
		return $a;
	}
	
	// getSubs,所有pid以下的子分类
	static function getSubs($arr,$pid='0',$deep='12345',$ra=1){ 
		$start = '0'; $fdeep = '-1'; $a = array(); 
		foreach($arr as $k=>$v){
			if(!isset($v['deep'])) $v['deep'] = 1;
			if(!isset($v['pid'])) $v['pid'] = '0';
			if($start && $fdeep>$v['deep']) break;
			if($v['pid']===$pid){ 
				$start = '1'; 
				$fdeep = $v['deep'];
			}
			if($start && strstr($deep,$v['deep'])){
				$a[$k] = $v;
			}
		} //print_r($a);
		$re = empty($ra) ? count($a) : $a;
		return $re;
	}
	
	// getPars(所有最大级别pmax外的父分类)
	static function getPars($arr,$pmax='3'){ 
		$a = array();
		foreach($arr as $k=>$v){
			if($pmax==$v['deep']) continue;
			$a[$k] = $v;
		} 
		return $a;
	}
	
	// getLays(id对应的树形分类)
	static function getLays($arr,$id,$a=array()){ 
		$a[$id] = @$arr[$id]['title'];
		$pid = @$arr[$id]['pid'];
		if($pid){
			return self::getLays($arr,$pid,$a);	
		}else{ 
			if(count($a)>1) $a = array_reverse($a,1);
			return $a;
		}
	}
	
	// getLnks(arr对应的连接)
	static function getLnks($arr,$tpl="<a href='?key=[k]'>[v]</a>",$gap='»'){ 
		$str = '';
		foreach($arr as $k=>$v){
			$lnk = str_replace(array('[k]','[v]'),array($k,$v),$tpl);
			$str .= (empty($str) ? '' : $gap).$lnk;
		}
		return $str;
	}
	
	// getOptions(Select)
	static function getOpt($arr,$def='',$msg='',$frame=1){ 
		$_groups = glbConfig::read('groups'); 
		if(is_string($arr) && isset($_groups[$arr])){
			$imod = glbConfig::read($arr);
			$arr = $imod['i'];  
		}
		$a = basArray::opaItems($arr,'',$frame);
		return basElm::setOption($a,$def,empty($msg) ? '-请选择-' : $msg);
	}
	

}