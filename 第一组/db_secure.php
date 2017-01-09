<?php
/**********************************
*		数据库安全相关				*
**********************************/

# my_encrypt() 加密方案
# $pwd 加密前的密码
# return 加密后的密码
function my_encrypt($pwd) {
	// TODO 自定义加密方案。这里暂时不加密。数据库留下了32字节的密码字段。
	return $pwd;
}

# my_escape() SQL防注入方案 
# $txt 原始字符串
# return 防注入处理后的字符串
function my_escape($txt) {
	// TODO 这里并没有实现SQL防注入，需要的话可以自行实现。
	return $txt;
}