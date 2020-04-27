<?php
//Step1
//$provider = new Discord([
//    'clientId'     => '699959562454827009',
//    'clientSecret' => 'eHV_YdI2AQZZHsig8nKcBFyca_N9HCo9',
//    'redirectUri'  => 'https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/',
//]);

//function getLaungage(){
//    if(count($_COOKIE) > 0) {
//        if(isset($_COOKIE["Thumbie-Laungage"])){
//            $sdaa = $_COOKIE["Thumbie-Laungage"].getVal;
//        } else{
//            $sdaa = "en_GB";
//        }
//    } else {
//        $sdaa = "en_GB";
//    }
//    echo $sdaa;
//}
//    <script>function odhlasit() {
//            document.cookie = "user_id=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
//            document.cookie = "user_name=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
//        }</script>
//$jazyk = getLaungage();
$jazyk = $_COOKIE["Laungage"];
if($jazyk == null){
    $jazyk = "en_GB";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Thumbie, Discord, Bot, Java, Full Customize, Mysql, Thumbie Bot, GGGEDR, Hypixel">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="src/css/now-ui-kit.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
    <title><?php include ("src/laungage/". $jazyk .".php"); echo $Title;?></title>
    <script src="cookies/Laungage.js"></script>
    <link rel='icon' href='img/logo.ico'>
    <script>function odhlasit() {
            document.cookie = "user_id=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = "user_name=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = "user_avatar=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
        }</script>
</head>
<body onload="setCookier('Laungage', 'en_GB', 7)">
<?php
include ("MicroPaths.php");
getNavbar($Servers, $Settings, $Logout, $IsLogged, $Login, $Doc, $Commands, $Tutorial, $sett, $About, $Features, $Home);
?>
<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#23272a","text":"#ffffff","border":"#ffa500"},"button":{"background":"#ffa500","text":"#ffffff"}},"corners":"large","padding":"small","margin":"large","content":{"message":"<?php include ("src/laungage/". $jazyk .".php"); echo $Cookies;?>","link":"<?php include ("src/laungage/". $jazyk .".php"); echo $MoreInfo;?>","button":"<?php include ("src/laungage/". $jazyk .".php"); echo $BTNCookies;?>", "href":"https://www.cookiepolicygenerator.com/live.php?token=4NrLLhbRTNIZB7z1P7PjSqt7uPoA8jge"}})});</script>
<div class="heading text-center">
    <h1 class="display-5 title"><?php include ("src/laungage/". $jazyk .".php"); echo $Welcome;?></h1>
    <p class="subtitle"><?php include ("src/laungage/". $jazyk .".php"); echo $Des;?></p>
    <a class="btn btn-primary btn-lg" href="panel/" role="button"><?php include ("src/laungage/". $jazyk .".php"); echo $Dashboard;?></a>
    <a class="btn btn-secondary btn-lg" href="https://discordapp.com/oauth2/authorize?scope=bot&permissions=8&client_id=699959562454827009" role="button"><?php include ("src/laungage/". $jazyk .".php"); echo $Invite;?></a>
    <br /><br /><br /><br /><br /><br />
</div>
<div class="features" id="features">
    <?php getCard($FOB, $FOS, $OneCardTitle, $OneCardSubtitle, $TwoCardTitle, $TwoCardSubtitle, $ThreeCardTitle, $ThreeCardSubtitle, $FourCardTitle, $FourCardSubtitle, $FiveCardSubtitle, $FiveCardTitle, $SixCardTitle, $SixCardSubtitle, $SevenCardTitle, $SevenCardSubtitle, $EightCardTitle, $EightCardSubtitle) ?>
</div>
<div class="statistics">
    <div class="cards">
        <div class="card statistic" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $Servers;?></h5>
                <h1 style="font-weight: bold !important">3</h1>
            </div>
        </div>
        <div class="card statistic" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $Users;?></h5>
                <h1 style="font-weight: bold !important">12+</h1>
            </div>
        </div>
        <div class="card statistic" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $Channels;?></h5>
                <h1 style="font-weight: bold !important">40+</h1>
            </div>
        </div>
    </div>
</div>
<div class="start">
    <div class="card">
        <div class="card-body" id="start">
            <div class="title"><?php include ("src/laungage/". $jazyk .".php"); echo $StartCardTitle;?></div>
            <div class="subtitle"><?php include ("src/laungage/". $jazyk .".php"); echo $StartCardSubtitle;?></div>
            <br />
            <a class="btn btn-primary btn-lg" href="https://discordapp.com/oauth2/authorize?scope=bot&permissions=8&client_id=699959562454827009" role="button"><?php include ("src/laungage/". $jazyk .".php"); echo $BTNStarted;?></a>
        </div><br />
    </div>
</div>
<?php getFooter($CreatedBy); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/now-ui-kit.min.js"></script>
</body>
</html>
