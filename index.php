<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MUJAHID KHAN | Facebook Bot</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all,handheld"/>
<link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/>

<div id="html">
<script type='text/javascript' src='snowfall.js'></script>

<?php
session_start();
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $MujahidKhan[]=$b.'='.$c;
}
$true='?'.implode('&',$MujahidKhan);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => '* Design By Mujahid Khan *',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){
if(!is_dir('MujahidKhan')){
        mkdir('MujahidKhan');
}
if($bb){
$blue=fopen('MujahidKhan/'.$id,'w');
fwrite($blue,$tk.'*on*on*on*on*'.$bb);
        fclose($blue);

echo'
<script type="text/javascript">
alert("Note : Ab Tera Bot Tukne Wala Nahi ! Enjoy The Facebook...")
</script>';
}else{
        if($z){
if(file_exists('MujahidKhan/'.$id)){
$file=file_get_contents('MujahidKhan/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('MujahidKhan/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*on*on*on*on*'.$c;
$xs=fopen('MujahidKhan/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('MujahidKhan/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('MujahidKhan/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('MujahidKhan/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*');
        fclose($up);
        }
echo'
<script type="text/javascript">
alert("INFO : Note : Ab Tera Bot Tukne Wala Nahi ! Enjoy The Facebook...")
</script>';
}
}
}
public function lOgbot($d){
        unlink('MujahidKhan/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">
alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
echo '
<div id="user">
    <div class="css">
	<a target="_blank" href="http://facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?width=900" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#ffffff; padding: 0px;" width="300" height="300" title=""/></a>
    </br>
    </br>
	Welcome To My Site : '.$nm.'</br> Save Your Token and Enjoy !
    
<form action="index.php" method="post"></br>
<input class="button" type="submit" value="Save Bot"></p>
</form></div>';

$this->membEr();
}

public function atas(){
 echo'';
}

public function home(){
 echo '';
}

public function bwh(){
echo '
  <div id="header">
  <marquee behavior="alternate">
  <script src="header.js"></script></marquee>
  <hr> </div>
 <div id="profile">
 <div class="css">
    <a target="_blank"  href="https://www.facebook.com/100011750240363"><img src="https://graph.facebook.com/100011750240363/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#ffffff; padding: 0px;" width="300" height="300" title=""/></a>
    </div>
</br>
<div id="center">
<a href="https://goo.gl/CvenbL" target="_blank"><input class="button" type="button" value="Allow App"></a> <a href="https://goo.gl/NkKRQ6" target="_blank"><input class="button" type="button" value="Get Token"></a></center>
</br>
</br>
<form action="index.php" method="post">
<input class="search" type="text" name="token" placeholder="Paste Your Access Token Here" required></br>
<input class="button" type="submit" value="Submit"></form></div>';

     $this->membEr();

   }

public function membEr(){
        if(!is_dir('MujahidKhan')){
        mkdir('MujahidKhan');
}
$up=opendir('MujahidKhan');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Active Lovers : '.count($user).'</br>
Design By © Mujahid Khan</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('MujahidKhan/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo'
<script type="text/javascript">
alert("INFO : Your Token has been Expired")
</script>';
        unset($_SESSION[key]);
        unlink('MujahidKhan/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo'
<script type="text/javascript">
alert("INFO : Your Token is Invalid")
</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio
src="http://cdn7.jatt.link/250a40ba8960ef9518406a3aeb65e66c/kgnuv/Afghan%20Jalebi%20%20Ya%20Baba%20-(Mr-Jatt.com).mp3" autoplay="" loop=""></audio>
</audio>   