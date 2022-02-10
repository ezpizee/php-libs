<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
include ROOT.DS.'autoload.php';
use Ezpizee\ContextProcessor\DBCredentials;
use Ezpizee\ContextProcessor\DBO;

$mysql = [
    'driver'=>'mysql',
    'host'=>'ezpzlib-mysql-local',
    'port'=>'3306',
    'user'=>'root',
    'password'=>'NKwFNB7fVMaM9hnpV4MqfjQb',
    'db'=>'test'
];

$oracle = [
    'driver'=>'oracle_oci',
    'host'=>'tcps://adb.ap-osaka-1.oraclecloud.com',
    'port'=>'1522',
    'user'=>'ADMIN',
    'password'=>'RUyE2~}quV%*hqS~',
    'db'=>'g60ff6951d0499a_oplatp_high.adb.oraclecloud.com',
    'wallet_location' => ''
];
$oracleWalletPath = ROOT.DS.'config'.DS.'oracleWallet'.DS.$oracle['db'];
file_exists($oracleWalletPath) or die('Not exists: '.$oracleWalletPath);
$oracle['wallet_location'] = $oracleWalletPath;

$config = new DBCredentials($oracle);
$dbo = new DBO($config);

echo $dbo->getConfig();