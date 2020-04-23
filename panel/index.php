<?php
$jazyk = $_COOKIE["Laungage"];
if($jazyk == null){
$jazyk = "en_GB";
}
?><html>
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
    <link rel='icon' href='src/img/logo.ico'>
    <script src="panel.js"></script>
</head>
<body onload="logined(<?php echo $_COOKIE["user_id"]?>)">
<nav class="navbar navbar-expand-lg bg-transparent">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="n">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/"><?php include ("src/laungage/". $jazyk .".php"); echo $Home;?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about"><?php include ("src/laungage/". $jazyk .".php"); echo $About;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features"><?php include ("src/laungage/". $jazyk .".php"); echo $Features;?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php include ("src/laungage/". $jazyk .".php"); echo $Doc;?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/commands"><?php include ("src/laungage/". $jazyk .".php"); echo $Commands;?></a>
                    <a class="dropdown-item" href="/tutorials"><?php include ("src/laungage/". $jazyk .".php"); echo $Tutorial;?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/server-settings"><?php include ("src/laungage/". $jazyk .".php"); echo $sett;?></a>
                </div>
            </li>
        </ul>
        <a class="btn btn-outline-secondary my-2 my-sm-0 btn-round btn-sm" href="https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2F&response_type=code&scope=identify%20email%20guilds"><?php include ("src/laungage/". $jazyk .".php"); echo $Login;?></a>
    </div>
</nav>
<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#23272a","text":"#ffffff","border":"#ffa500"},"button":{"background":"#ffa500","text":"#ffffff"}},"corners":"large","padding":"small","margin":"large","content":{"message":"<?php include ("src/laungage/". $jazyk .".php"); echo $Cookies;?>","link":"<?php include ("src/laungage/". $jazyk .".php"); echo $MoreInfo;?>","button":"<?php include ("src/laungage/". $jazyk .".php"); echo $BTNCookies;?>", "href":"https://www.cookiepolicygenerator.com/live.php?token=4NrLLhbRTNIZB7z1P7PjSqt7uPoA8jge"}})});</script>

</body>
</html>