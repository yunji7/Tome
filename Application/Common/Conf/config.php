<?php






return array(
	//'配置项'=>'配置值'


	'DEFAULT_M_LAYER'       =>  'Model', // 默认的模型层名称
	'DEFAULT_C_LAYER'       =>  'Controller', // 默认的控制器层名称
	'DEFAULT_V_LAYER'       =>  'View', // 默认的视图层名称
	'DEFAULT_LANG'          =>  'zh-cn', // 默认语言
	'DEFAULT_THEME'         =>  '', // 默认模板主题名称
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
	'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
	'DEFAULT_TIMEZONE'      =>  'PRC',  // 默认时区
	'DEFAULT_AJAX_RETURN'   =>  'JSON',  // 默认AJAX 数据返回格式,可选JSON XML ...
	'DEFAULT_JSONP_HANDLER' =>  'jsonpReturn', // 默认JSONP格式返回的处理方法
	'DEFAULT_FILTER'        =>  'htmlspecialchars', // 默认参数过滤方法 用于I函数...



	'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置

	'TMPL_L_DELIM'          =>  '<{',  // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}>',  // 模板引擎普通标签结束标记
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'Home',          // 数据库名
	'DB_USER'               =>  'god',      // 用户名
	'DB_PWD'                =>  'god',          // 密码
	'DB_PREFIX'             =>  'x_',     // 数据库表前缀


	'SHOW_PAGE_TRACE' =>true,//调试

	'URL_CASE_INSENSITIVE' =>true, //大小写不敏感


//	'URL_MODEL'=>2, // REWRITE模式



	/**
	 * 模板中的常量
	 */
	'TMPL_PARSE_STRING' => array(
//		'__LINK__'    => __ROOT__.'/Public/Link',
//		'__LINKK__'    => '123',
		//		'__LINK__'    => __ROOT__.'/Public/Link',
//		'__PLUGIN__' => __ROOT__.'/Plugin'
	),
);