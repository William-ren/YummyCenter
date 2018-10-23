<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='mysql';
$phome_db_ver='5.0';
$phome_db_server='localhost';
$phome_db_port='';
$phome_db_username='root';
$phome_db_password='52jscn.com';
$phome_db_dbname='';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='ccfce0a0af1fd4b32c8a4b04a4bd7696';
$set_loginauth='';
$set_loginrnd='yrg2kRCajT9LqEjJteJgtAiHwjtguG';
$set_outtime='60';
$set_loginkey='1';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='ccykjy_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='ehxpexeztzwt';
$ebak_set_ckrndval='a2d4184471ff85b8577e21c0f5860f80';
$ebak_set_ckrndvaltwo='29b5dce2996059dd8f829fc03869756a';
$ebak_set_ckrndvalthree='e02d11cb37183bc3936a3815ce38a461';
$ebak_set_ckrndvalfour='160e2fa88e5d5d165b810b5bde657a89';

//------------ SYSTEM ------------
HeaderIeChar();
?>