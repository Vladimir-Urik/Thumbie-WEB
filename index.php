<?php
//Step1
$servername = "remotemysql.com";
$username = "NEgfqq1rAL";
$database = "NEgfqq1rAL";
$password = "RaHX1T8Qe9";
$db = mysqli_connect($servername,$username,$password,$database)
or die('Error connecting to MySQL server.');

$dbn = mysqli_connect($servername,$username,$password,$database)
or die('Error connecting to MySQL server.');
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
//
//$jazyk = getLaungage();
$jazyk = $_COOKIE["Laungage"];
if($jazyk == null){
    $jazyk = "en_GB";
}
?>
<!DOCTYPE html>
<html lang="en">
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
</head>
<body onload="setCookier('Laungage', 'en_GB', 7)">
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
<div class="heading text-center">
    <h1 class="display-5 title"><?php include ("src/laungage/". $jazyk .".php"); echo $Welcome;?></h1>
    <p class="subtitle"><?php include ("src/laungage/". $jazyk .".php"); echo $Des;?></p>
    <a class="btn btn-primary btn-lg" href="/DashBoard/Login" role="button"><?php include ("src/laungage/". $jazyk .".php"); echo $Dashboard;?></a>
    <a class="btn btn-secondary btn-lg" href="#start" role="button"><?php include ("src/laungage/". $jazyk .".php"); echo $Invite;?></a>
    <br /><br /><br /><br /><br /><br />
</div>
<div class="features" id="features">
    <div class="title"><?php include ("src/laungage/". $jazyk .".php"); echo $FOB;?></div>
    <div class="subtitle"><?php include ("src/laungage/". $jazyk .".php"); echo $FOS;?></div>
    <div class="cards">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $OneCardTitle;?></h5>
            <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $OneCardSubtitle;?></p>
        </div>
    </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $TwoCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $TwoCardSubtitle;?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $ThreeCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $ThreeCardSubtitle;?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $FourCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $FourCardSubtitle;?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $FiveCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $FiveCardSubtitle;?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $SixCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $SixCardSubtitle;?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $SevenCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $SevenCardSubtitle;?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $EightCardTitle;?></h5>
                <p class="card-text"><?php include ("src/laungage/". $jazyk .".php"); echo $EightCardSubtitle;?></p>
            </div>
        </div>
    </div>
</div>
<div class="statistics">
    <div class="cards">
        <div class="card statistic" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $Servers;?></h5>
                <h1 style="font-weight: bold !important"><?php
                    //Step2
                    $queryd = "SELECT `INT` FROM `general` WHERE STAT = ?";

                    $idm = "servers";

                    if ($stmtj = $dbn->prepare($queryd)) {

                        $stmtj->bind_param('s', $idm);

                        $stmtj->execute();
                        $stmtj->bind_result($intsr);
                        $stmtj->fetch();

                        echo $intsr;

                        $stmtj->close();
                    } else {

                        echo "ERR";
                    }
                    ?></h1>
            </div>
        </div>
        <div class="card statistic" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $Users;?></h5>
                <h1 style="font-weight: bold !important"><?php
                    //Step2
                    $query = "SELECT `INT` FROM `general` WHERE STAT = ?";

                    $id = "members";

                    if ($stmt = $db->prepare($query)) {

                        $stmt->bind_param('i', $id);

                        $stmt->execute();
                        $stmt->bind_result($int);
                        $stmt->fetch();

                        echo "$int";

                        $stmt->close();
                    } else {

                        echo "ERR";
                    }
                    ?></h1>
            </div>
        </div>
        <div class="card statistic" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php include ("src/laungage/". $jazyk .".php"); echo $Channels;?></h5>
                <h1 style="font-weight: bold !important">35</h1>
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
<div class="footer">

    <button onclick="setCookie('Laungage', 'en_GB', 7); history.go(0); location.href = '#n';" style="background: transparent; border: transparent"><img src="img/en.jpg" width="19" height="9" onclick="setCookie('Laungage', 'en_GB', 7)"></button>
    <button onclick="setCookie('Laungage', 'cs', 7); history.go(0); location.href = '#n';" style="background: transparent; border: transparent"><img src="img/cz.jpg" width="19" height="9" onclick="setCookie('Laungage', 'cs_CZ', 7)"></button>
    <button onclick="setCookie('Laungage', 'sk', 7); history.go(0); location.href = '#n';" style="background: transparent; border: transparent"><img src="img/sk.jpg" width="19" height="9" onclick="setCookie('Laungage', 'sk_SK', 7)"></button><br/>
    <?php include ("src/laungage/". $jazyk .".php"); echo $CreatedBy;?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/now-ui-kit.min.js"></script>
</body>
</html>
