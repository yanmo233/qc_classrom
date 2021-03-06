<?php
/**
 *  ___   ____ _
 * / _ \ / ___| | __ _ ___ ___ _ __ ___   ___  _ __ ___
 *| | | | |   | |/ _` / __/ __| '__/ _ \ / _ \| '_ ` _ \
 *| |_| | |___| | (_| \__ \__ \ | | (_) | (_) | | | | | |
 * \__\_\\____|_|\__,_|___/___/_|  \___/ \___/|_| |_| |_|
 * 青草课堂 - function.php
 * Copyright (c) 2015 - 2019.,QCTech ,All rights reserved.
 * Created by: QCTech
 * Created Time: 2019-01-23 - 18:26
 */
//防止被恶意访问，泄露信息
if(!defined('DEBUG')) {
    http_response_code(403);
    exit('Access Denied');
}
require_once ("usercenter.php");
/**
 * 获取用户真实ip
 * @return bool
 */
function get_real_ip(){
    $ip=false;
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
        for ($i = 0; $i < count($ips); $i++) {
            if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

/**
 * SQL注入检查
 * @param $Sql_Str
 * @return string
 */
function inject_check($Sql_Str) {
    $check=preg_match('/select|insert|update|delete|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i',$Sql_Str);
    if ($check) {
        return 0;
    }else{
        return 1;
    }
}

/**
 * 获取当前Url
 * @return string
 */
function GetCurUrl(){
    $url='http://';
    if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on'){
        $url='https://';
    }
    if($_SERVER['SERVER_PORT']!='80'){
        $url.=$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
    }else{
        $url.=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }
    return $url;
}