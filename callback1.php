<?php  
require 'config.php';
require 'saetv2.ex.class.php';

$code = $_GET['code'];

$keys['code'] =$code;
$keys['redirect_uri'] =WB_CALLBACK_URL;

$o= new SaeTOAuthV2(WB_AKEY, WB_SKEY);
$auth=$o->getAccessToken($keys);

debug($auth)