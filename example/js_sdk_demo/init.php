<?php
/**
 * Description
 * @author lixinguo@vpubao.com
 * @date 2017/3/23
 */

include_once __DIR__ . "/../config.php";
include_once __DIR__ . "/../bootstrap.php";
include_once "JsSdkDemo.class.php";

$cfg_arr = array_values($GLOBALS['wxComponentConfig']);
$wxComponentConfig = $cfg_arr[0];
$wxComponentService = new WxComponentService($wxComponentConfig, new FileCache($GLOBALS['cacheDir']));
$appId = "wx19134b98d4e873a5"; // 改为自己授权过的认证服务号appId
$wxPay = new WxPay($GLOBALS['wxTestPayCfg']);
$jsSdkDemo = new JsSdkDemo($wxComponentService, $appId, $wxPay);
