<?php

session_start();
$jazyk = $_COOKIE["Laungage"];
if($jazyk == null){
    $jazyk = "en_GB";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://thumbie.me/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://thumbie.me/src/css/main.css">
    <link rel="stylesheet" href="https://thumbie.me/src/css/now-ui-kit.css">
    <link rel="stylesheet" href="https://thumbie.me/src/css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
    <title><?php include ("../src/laungage/". $jazyk .".php"); echo $TitlePanel;?></title>
    <script href="https://thumbie.me/cookies/Laungage.js"></script>
    <meta name="author" content="GGGEDR">
    <script>function odhlasit() {
            document.cookie = "user_id=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = "user_name=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = "user_avatar=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
        }</script>
</head>
<body onload="<?php if($_SESSION['id'] == null){ echo "location.href = 'https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fthumbie.me%2Fpanel%2Fintegrations%2Fdiscord%2FOAuth2%2Flogin.php&response_type=code&scope=identify%20guilds%20email';";}?>">
<?php
include ("../MicroPaths.php");
getNavbar($Servers, $Settings, $Logout, $IsLogged, $Login, $Doc, $Commands, $Tutorial, $sett, $About, $Features, $Home, $Credits);
?>
<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#23272a","text":"#ffffff","border":"#ffa500"},"button":{"background":"#ffa500","text":"#ffffff"}},"corners":"large","padding":"small","margin":"large","content":{"message":"<?php include ("src/laungage/". $jazyk .".php"); echo $Cookies;?>","link":"<?php include ("src/laungage/". $jazyk .".php"); echo $MoreInfo;?>","button":"<?php include ("src/laungage/". $jazyk .".php"); echo $BTNCookies;?>", "href":"https://www.cookiepolicygenerator.com/live.php?token=4NrLLhbRTNIZB7z1P7PjSqt7uPoA8jge"}})});</script>
<div class="heading text-center" style="text-align: left !important;">
    <img src="src/img/logo.png" style="text-align: left;" width="75" height="75">
    <h1 class="display-5 title" style="text-align: left"><?php include ("src/laungage/". $jazyk .".php"); echo $Dashboard;?> v.BETA-0.0.1</h1>
    <a class="btn btn-primary" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/panel/servers.php" role="button" style="text-align: left !important;"><?php include("../src/laungage/" . $jazyk . ".php");
            echo $Servers?></a>
<br />
    <a class="btn btn-primary" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/shop/" role="button" style="text-align: left !important;"><?php include("../src/laungage/" . $jazyk . ".php");
        echo $Shop?></a></a>
    <br/>
    <a class="btn btn-primary" href="https://discordapp.com/oauth2/authorize?scope=bot&permissions=8&client_id=699959562454827009" role="button" style="text-align: left !important;"><?php include("../src/laungage/" . $jazyk . ".php");
        echo $Invite?></a>
    <br /><br /><br /><br /><br /><br />
</div>
<div class="features" id="features">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/now-ui-kit.min.js"></script>
<?php getFooter($CreatedBy, $Sponsors); ?>
</body>
</html>