<?php

// 定义网站Url信息, 结尾不带斜杠
$Web_Url = 'http://your.website.com/Authme-Reger';
$Web_Url_Msg = 'message.html';

// 定义数据库信息
$ip = 'localhost';
$username = 'root';
$password = '';

// 定义数据库名
$sqlname = 'mcserver';

// 定义数据库表名
$authme_tablename = 'authme'; // Authme表
$web_tablename = 'webreg'; // 网页表
$web_fkey_tablename = 'webreg_fkey'; // 邀请码表

// 定义Authme表字段名
$mySQLColumnId = 'id';
$mySQLColumnName = 'username';
$mySQLRealName = 'realname';
$mySQLColumnPassword = 'password';
$mySQLColumnEmail = 'email';
$mySQLColumnLogged = 'isLogged';
$mySQLColumnIp = 'ip';
$mySQLColumnLastLogin = 'lastlogin';
$mySQLlastlocX = 'x';
$mySQLlastlocY = 'y';
$mySQLlastlocZ = 'z';
$mySQLlastlocWorld = 'world';
$mySQLlastlocYaw = 'yaw';
$mySQLlastlocPitch = 'pitch';

// 定义Authme密码加密算法
$pw_enc = 'SHA256'; // 现在改成大写了
$pw_enc_salt_len = 8;

// TODO 定义网页表字段名
//$sql_

// TODO 定义邀请码表字段名
//$sql_

// 定义注册设置
// TODO $ban_id = '*admin*,*fuck*,*op*'; // 注册保留关键字
$reg_time = 8; // 同IP多少小时内只能注册1个ID

// 定义禁止访问地区 & 禁止模式
// 0 为 ban 市区 , 1 为 ban 省区
$ban_mode = '0';
$ban_province = '江苏';
$ban_city = '常州';

// 定义Stmp邮件服务器信息
$smtp_server = 'smtp.exmail.qq.com';
$smtp_port = 25;
$smtp_username_em = 'admin@qq.com';
	$smtp_from_username = 'Admin'; // 发件人名称
$smtp_username = 'admin@qq.com';
$smtp_password = '123456';
$smtp_emtitle = '我的世界--邮箱身份验证'; // 邮件标题

// 定义云盾KEY
$Access_Key_ID = '';
$Access_Key_Secret = '';

// 定义邀请码设置
$fkey_enabled = false; // true 开启 false 关闭
$fkey_minlen = 4;
$fkey_maxlen = 11;

// 定义用户服务条款
$contract_name = '《同性交友网服务条款》';
$contract_url = '#';

// 定义底部版权信息
// TODO ...

?>
