<?php
$_cargo = array (
  'kid' => 'cargo',
  'pid' => 'docs',
  'title' => '商品展销',
  'enable' => '1',
  'etab' => '1',
  'deep' => '2',
  'f' => 
  array (
    'brand' => 
    array (
      'title' => '品牌',
      'enable' => '1',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'cfgs' => 'brand',
    ),
    'hinfo' => 
    array (
      'title' => '推荐',
      'enable' => '1',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'cfgs' => 'hinfo',
    ),
    'title' => 
    array (
      'title' => '标题',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'tit:2-60',
      'vtip' => '标题2-60字符',
      'vmax' => '60',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'color' => 
    array (
      'title' => '标题颜色',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:str:4-7',
      'vtip' => '如:#FF00FF',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'color',
      'fmexstr' => 'title',
    ),
    'ndb_repeat' => 
    array (
      'title' => '检查重复',
      'enable' => '1',
      'etab' => '0',
      'type' => 'repeat',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'cfgs' => 'pro,title',
      'fmextra' => 'repeat',
    ),
    'xinghao' => 
    array (
      'title' => '型号',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'guige' => 
    array (
      'title' => '规格',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'price' => 
    array (
      'title' => '价格',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '0',
      'dbdef' => '0.0',
      'vreg' => '',
      'vtip' => '元',
      'vmax' => '0',
      'fmsize' => '80',
      'fmline' => '1',
      'fmtitle' => '0',
    ),
    'pbat' => 
    array (
      'title' => '批量价',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '1-5:68;6-12:58;',
      'vmax' => '255',
      'fmsize' => '240',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'weight' => 
    array (
      'title' => '重量',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '6',
      'dbdef' => '0',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '6',
      'fmsize' => '60',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'detail' => 
    array (
      'title' => '内容',
      'enable' => '1',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'mediumtext',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:str:10+',
      'vtip' => '内容10字符以上',
      'vmax' => '0',
      'fmsize' => '640x320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'editor',
      'fmexstr' => 'full,exbar',
    ),
    'seo_key' => 
    array (
      'title' => '关键字',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'seo_des' => 
    array (
      'title' => '描述',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
    ),
    'seo_tag' => 
    array (
      'title' => '标签',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
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
    'source' => 
    array (
      'title' => '来源',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '0',
    ),
    'ordcnt' => 
    array (
      'title' => '订购次数',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '0',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
    ),
    'click' => 
    array (
      'title' => '点击',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '如:888',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'author' => 
    array (
      'title' => '作者',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
    ),
    'rel_pic' => 
    array (
      'title' => '相关图片',
      'enable' => '1',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'cfgs' => 'full=外观图
side=侧面图
inn=内部图
att=附件图',
      'fmextra' => 'pics',
    ),
  ),
  'i' => 
  array (
    'p1012' => 
    array (
      'pid' => '0',
      'title' => '手机配件',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2012' => 
    array (
      'pid' => 'p1012',
      'title' => '手机主机',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2014' => 
    array (
      'pid' => 'p1012',
      'title' => '手机配件',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2016' => 
    array (
      'pid' => 'p1012',
      'title' => '手机套卡',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p1014' => 
    array (
      'pid' => '0',
      'title' => '书籍音像',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2018' => 
    array (
      'pid' => 'p1014',
      'title' => '普通书',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2020' => 
    array (
      'pid' => 'p1014',
      'title' => '电子书',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'c2014' => 
    array (
      'pid' => 'p1014',
      'title' => '益智玩具',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
    'c2012' => 
    array (
      'pid' => 'p1014',
      'title' => '教具仪器',
      'deep' => '2',
      'frame' => '0',
      'char' => 'J',
      'cfgs' => '',
    ),
    'p1016' => 
    array (
      'pid' => '0',
      'title' => '服装饰品',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2022' => 
    array (
      'pid' => 'p1016',
      'title' => '外衣',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'c2016' => 
    array (
      'pid' => 'p1016',
      'title' => '外裤',
      'deep' => '2',
      'frame' => '0',
      'char' => 'W',
      'cfgs' => '',
    ),
    'c2020' => 
    array (
      'pid' => 'p1016',
      'title' => '内裤',
      'deep' => '2',
      'frame' => '0',
      'char' => 'N',
      'cfgs' => '',
    ),
    'c2018' => 
    array (
      'pid' => 'p1016',
      'title' => '女内衣',
      'deep' => '2',
      'frame' => '0',
      'char' => 'N',
      'cfgs' => '',
    ),
    'c2022' => 
    array (
      'pid' => 'p1016',
      'title' => '孕妇装',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
    'c2024' => 
    array (
      'pid' => 'p1016',
      'title' => '童装',
      'deep' => '2',
      'frame' => '0',
      'char' => 'T',
      'cfgs' => '',
    ),
    'p1018' => 
    array (
      'pid' => '0',
      'title' => '家电家具',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2024' => 
    array (
      'pid' => 'p1018',
      'title' => '电视机',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2026' => 
    array (
      'pid' => 'p1018',
      'title' => '冰箱',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'c2026' => 
    array (
      'pid' => 'p1018',
      'title' => '空调',
      'deep' => '2',
      'frame' => '0',
      'char' => 'K',
      'cfgs' => '',
    ),
  ),
);
?>