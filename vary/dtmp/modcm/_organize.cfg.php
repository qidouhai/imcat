<?php
$_organize = array (
  'kid' => 'organize',
  'pid' => 'users',
  'title' => '非盈利组织',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'cfgs' => 'defgrade=ocom
defcheck=N',
  'f' => 
  array (
    'company' => 
    array (
      'title' => '组织名称',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '96',
      'dbdef' => '',
      'vreg' => 'str:2-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '420',
      'fmline' => '1',
      'fmtitle' => '0',
    ),
    'mpic' => 
    array (
      'title' => '缩略图',
      'enable' => '1',
      'etab' => '0',
      'type' => 'file',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:image',
      'vtip' => 'gif/jpg/jpeg/png格式.',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'ftype' => 
    array (
      'title' => '行业',
      'enable' => '1',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'str:2-12',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '130',
      'fmline' => '1',
      'fmtitle' => '1',
      'cfgs' => 'ftype',
    ),
    'hinfo' => 
    array (
      'title' => '推荐',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'str:2-12',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '150x3',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => 'winpop',
      'fmexstr' => 'hinfo',
    ),
    'mname' => 
    array (
      'title' => '联系人',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '96',
      'dbdef' => '',
      'vreg' => 'str:2-24',
      'vtip' => '2-24字符',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'mtitle' => 
    array (
      'title' => '称呼',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'nul:tit:2-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'miuid' => 
    array (
      'title' => '聊天号',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => 'nul:str:5-120',
      'vtip' => '聊天号:QQ,MSN等',
      'vmax' => '120',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'mtel' => 
    array (
      'title' => '电话',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'fix:tel',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '150',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'memail' => 
    array (
      'title' => '邮件',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:email',
      'vtip' => '如:peace@domain.com',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'maddr' => 
    array (
      'title' => '地址',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => 'nul:str:5-120',
      'vtip' => '详细地址',
      'vmax' => '120',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'map' => 
    array (
      'title' => '地图',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '48',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '240',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'map',
    ),
    'mweb' => 
    array (
      'title' => '网址',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:uri',
      'vtip' => 'http://开头',
      'vmax' => '255',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
  ),
  'i' => 
  array (
    'zcom' => 
    array (
      'title' => '一般组织',
    ),
    'zvip' => 
    array (
      'title' => 'VIP组织',
    ),
    'zstop' => 
    array (
      'title' => '过期组织',
    ),
  ),
);
?>