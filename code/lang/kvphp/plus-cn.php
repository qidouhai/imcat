<?php

// 语言包:cn

return array(

  'fop_mdtitle' => '媒体（文件）插入管理',
  'fop_mdtype' => '媒体类型',
  'fop_mdadd' => '媒体地址',
  'fop_piont' => '地图坐标',
  'fop_expar' => '扩展属性',
  'fop_size' => '显示大小',
  'fop_defsize' => '默认显示大小',
  'fop_btnok' => '确定',
  'fop_cancel' => '取消',
  'fop_note' => '说明',
  'fop_error' => '错误',
  'fop_alln' => '共[{val}]个',
  'fop_fupfail' => '文件上传失败: ',
  'fop_fupok' => '文件上传成功: ',
  'fop_upok' => '上传成功',
  'fop_upfail' => '上传失败',
  'fop_batup' => '附件批量上传',
  'fop_add' => '增加',
  'fop_item' => '个',
  'fop_set' => '设置',
  'fop_oview' => '预览',
  'fop_picview' => '图片预览',
  'fop_uponetitle' => '附件（文件）上传（表单）',
  'fop_upbattitle' => '附件（文件）批量上传（表单）',

  // file/fview.php
  'fv_delok' => '删除成功!',
  'fv_delng' => '删除失败!',
  'fv_ftitle' => '媒体（视频，音频，Flash，iFrame，地图）插入',
  'fv_nusub' => '(无子目录)',
  'fv_click' => '点击文件即选择并返回',
  'fv_flist' => '附件选择管理',

  'fv_tfiles' => '文件选择/目录列表',
  'fv_tview' => '预览',
  'fv_tpick' => '选择',
  'fv_tsize' => '大小[B]',
  'fv_tadd' => '创建时间',
  'fv_tdel' => '删除',

  'fv_open' => '打开查看',
  'fv_pfile' => '选择文件',
  'fv_delq' => '确认删除[{val}]? \\n请小心操作哦！',

  'fv_file' => '文件',
  'fv_dir' => '目录',
  'fv_nofiles' => '暂时无 文件/目录列表...请上传!',
  'fv_adddir' => '建立目录',
  'fv_uplocal' => '本地上传',
  'fv_or' => '或',
  'fv_atuoname' => '自动命名',
  'fv_orgname' => '原文件名',
  'fv_upload' => '上传',
  'fv_rempic' => '远程图片',
  'fv_b64pic' => 'Base64图片',

  // editor/
  'edt_tplchar' => '模版/特殊字符',
  'edt_tpl' => '模版',
  'edt_spchar' => '特殊字符',
  'edt_insok' => '已经插入!',

  // coms/add_coms.php
  'coms_errvcode' => '认证码错误，增加失败！',
  'coms_addok' => '增加[{val}]成功！',
  'coms_closerep' => '已关闭回复！请联系管理员.',

  //ajax/cajax.php
  'cajax_userid' => '该登陆名',
  'cajax_field' => '字段',
  'cajax_sysuesed' => '已占用或被系统保留',
  'cajax_syskeep' => '已被系统保留',
  'cajax_exsists' => '已经存在',
  'cajax_mykeys' => '不能为mysql保留字',
  'cajax_beuesed' => '已被占用',
  'cajax_repeat' => '该资料重复',
  'cajax_vcerr' => '认证码错误[1]',
  'cajax_vctout' => '认证码超时[2]',
  'cajax_erparam' => '参数错误',

  //ajax/cron.php
  'cron_res' => '生成结果:',
  'cron_ok' => '删除成功:',
  'cron_err' => '删除失败:',

  //ajax/pick.php
  'pick_uname' => '会员账号',
  'pick_xgrd' => '-等级-',
  'pick_xcat' => '-栏目-',
  'pick_xso' => '-筛选-',
  'pick_xord' => '-排序-',
  'pick_select' => '选择',
  'pick_grade' => '等级',
  'pick_catalog' => '栏目',
  'pick_selected' => '已选',
  'pick_selunit' => '个',
  'pick_close' => '关闭',
  'pick_nodata' => '无资料！',

  //ajax/vimg.php
  'vimp_res' => '验证结果',
  'vimp_ok' => '[OK]认证成功!<br>请放心提交表单！',
  'vimp_err' => '认证错误！',

  //api/color.php
  'color_org' => '原色',
  'color_code' => '代码',
  'color_now' => '选中<br>色彩',
  'color_setok' => '确定',
  'color_cancel' => '取消',

  //api/types.php
  // null 

  /*
  coms/add_coms.php
  [a:6] array (
  0 => '认证码错误',
  1 => '增加失败',
  2 => '增加',
  3 => '成功',
  4 => '认证码',
  5 => '提交',

  coms/faqs.php
  [a:8] array (
  0 => '认证码错误',
  1 => '增加失败',
  2 => '增加',
  3 => '成功',
  4 => '所在栏目',
  5 => '显示',
  6 => '认证码',
  7 => '提交',

  coms/gbook.php
  [a:6] array (
  0 => '认证码错误',
  1 => '增加失败',
  2 => '增加',
  3 => '成功',
  4 => '认证码',
  5 => '提交',

  coms/qarep.php
  [a:8] array (
  0 => '已关闭回复',
  1 => '请联系管理员.',
  2 => '认证码错误',
  3 => '增加失败',
  4 => '增加',
  5 => '成功',
  6 => '认证码',
  7 => '提交',

  coms/_cfgcom.php
  [a:1] array (
  0 => '参数错误:',

  coms/_cfgdoc.php
  [a:1] array (
  0 => '参数错误:',

  editor/tpl_cfg.php
  [a:3] array (
  0 => '模版/特殊字符',
  1 => '特殊字符',
  4 => '模版',

  editor/tpl_doc.php
  [a:1] array (
  0 => ']已经插入',

  editor/_pub.js
  [a:21] array (
  0 => '插入特殊字符',
  2 => '3套方案',
  3 => '字符',
  4 => '插入内容模版',
  6 => '2套方案',
  7 => '模版',
  8 => '附件管理',
  10 => '视频,图片,附件等大文件选取',
  11 => '附件',
  12 => '插入媒体',
  14 => 'iFrame,swf,视频,音频等',
  15 => '媒体',
  16 => '插入分页符',
  17 => '用于长内容分页,与前台配合使用',
  18 => '分页',
  19 => '插入日期',
  20 => '格式:2013-12-31',
  21 => '日期',
  22 => '插入时间',
  23 => '格式:23:12:30',
  24 => '时间',

  file/funcs.js
  [a:19] array (
  0 => '正在提交第[',
  1 => ']个项目',
  2 => '共[',
  3 => ']个项目提交成功',
  6 => '空项目',
  7 => '未提交',
  8 => '至少要有一个文件',
  9 => '最多一次只能上传24个文件',
  10 => '图片预浏:',
  11 => '扩展属性',
  12 => '标点名称',
  13 => '循环播放',
  14 => '自动播放',
  15 => '请选择有效的[媒体类型]',
  16 => '请输入有效的[地图坐标]',
  17 => '请输入有效的[媒体地址]',
  18 => '不支持Safari6.0以下浏览器的图片预览',
  19 => '仅支持',
  20 => '为后缀名的文件',

  file/fview.php
  [a:50] array (
  0 => '删除成功',
  1 => '删除失败',
  2 => '媒体',
  3 => '视频',
  4 => '音频',
  5 => '地图',
  6 => '插入',
  7 => '无子目录',
  8 => '击文件即选择并返回',
  9 => '附件选择管理',
  10 => '文件选择/目录列表',
  11 => '预览',
  12 => '选择',
  13 => '大小[B]',
  14 => '创建时间',
  15 => '删除',
  17 => '打开查看',
  18 => '选择文件',
  21 => '确认删除[',
  22 => 'n请小心操作哦',
  25 => '文件:',
  26 => '目录:',
  27 => '暂时无',
  28 => '文件/目录列表...请上传',
  30 => '建立目录',
  31 => '本地上传:',
  32 => '自动命名',
  33 => '原文件名',
  34 => '上传',
  35 => '远程图片',
  36 => 'Base64图片',
  37 => '注意',
  38 => '大文件请用FTP上传',
  39 => '可参考[管理帮助]',
  40 => '文件目录规划',
  41 => '相关文件',
  42 => '可用[预览',
  43 => '复制链接地址]得到相关附件地址',
  44 => '[临时]',
  45 => '新上传文档,都放在这里,添加后会自动移动到相关文件夹',
  46 => '[当前]',
  47 => '编辑资料时显示此项,此文件夹下的附件关联当前资料',
  48 => '[上传]',
  49 => '可批量上传到文件',
  50 => '[插入]',
  51 => '可插入',
  52 => '内框架',
  54 => 'Flash媒体',
  55 => '音频媒体',
  56 => '视频媒体',

  file/media.php
  [a:12] array (
  0 => '附件',
  1 => '文件',
  2 => '选择管理',
  3 => '媒体类型',
  4 => '媒体地址',
  5 => '地图坐标',
  6 => '扩展属性',
  7 => '显示大小',
  8 => '默认显示大小',
  9 => '确定',
  10 => '取消',
  11 => '说明',

  file/upbat.php
  [a:35] array (
  0 => '附件',
  1 => '文件',
  2 => '批量上传',
  3 => '表单',
  4 => '附件批量上传',
  5 => '文件:',
  6 => '增加:',
  7 => '设置:',
  8 => '自动命名',
  9 => '原文件名',
  10 => '上传',
  11 => '说明',
  12 => '本程序受启发于',
  13 => '请先设置类别',
  14 => '再浏览图片',
  15 => '可用下方的',
  16 => '按纽增加n个图片项目',
  17 => '一次最多可设置96个图片批量上传',
  18 => '本程序为增值程序',
  19 => '免费使用',
  20 => '请不要苛求它的功能',
  21 => '如不能满足您的需要',
  22 => '请用普通方式添加资料',
  23 => '建议把要上传的文件',
  24 => '放在同一文件夹中',
  25 => '用标题作为图片名',
  26 => '默认情况下,本系统把文件名作为信息的标题',
  27 => '其文件名',
  28 => '除后缀外',
  29 => '不能用空格引号点等特殊字符',
  30 => '建议全用英文半角的字母',
  31 => '数字或下划线',
  32 => '除图片名可用中文外',
  33 => '目录建议也不要用中文',
  34 => '删除',

  file/updeel.php
  [a:5] array (
  0 => '错误',
  1 => '文件上传失败',
  2 => '文件上传成功',
  3 => '上传成功:',
  4 => '上传失败:',

  file/upone.php
  [a:8] array (
  0 => '附件',
  1 => '文件',
  2 => '上传',
  3 => '表单',
  4 => '预览',
  5 => '图片预览',
  6 => '自动命名',
  7 => '原文件名',
  */

  //map/index.php
  'map_title' => '地图',
  'map_piont' => '坐标:',
  'map_setok' => '确定',

);

