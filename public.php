<?php
//设置你的页面编码格式为utf-8,否则会出现乱码
header("content-type:text/html; charset=utf8");
$servername = "39.97.220.54"; //服务器地址(此处为本地)
$db_username = "root"; //服务器用户名
$db_password = "aLSCSWENNUO5683"; //服务器密码
$db_name = "LiteShoot"; //数据库名称
//连接数据库
$conn = new mysqli($servername, $db_username, $db_password, $db_name);
//判断是否连接失败
if ($conn->connect_error) {
    die("连接失败:".$conn->connect_error);
}
//设置字符编码
$conn->query("set names utf8");
?>