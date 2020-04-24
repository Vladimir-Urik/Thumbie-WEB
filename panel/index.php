<?php
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
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="src/css/now-ui-kit.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
    <title><?php include 'src/laungage/en_GB.php'; echo $TitlePanel;?></title>
    <script href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/cookies/Laungage.js"></script>
    <meta name="author" content="GGGEDR">
    <script>function odhlasit() {
            document.cookie = "user_id=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = "user_name=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
        }</script>
</head>
<body onload="<?php $id = $_COOKIE["user_id"]; if($_COOKIE["user_id"] == null){ echo "location.href = 'https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2Fpanel%2Fintegrations%2Fdiscord%2FOAuth2%2Flogin.php&response_type=code&scope=identify%20guilds%20email';";}?>">
<nav class="navbar navbar-expand-lg bg-transparent">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        <?php
        include ("src/laungage/". $jazyk .".php");
        if($_COOKIE["user_id"] == null){
            echo "<a class=\"btn btn-outline-secondary my-2 my-sm-0 btn-round btn-sm\" href=\"https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2Fpanel%2Fintegrations%2Fdiscord%2FOAuth2%2Flogin.php&response_type=code&scope=identify%20guilds%20email\">$Login</a>";
        } else {
            $nick = "<p style='color:orange;'>" . $_COOKIE["user_name"] . "</p>";
            $combo = $IsLogged . $nick;

            echo "<li class=\"nav-item dropdown\" style='text-align: right; vertical-align: top;'>
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style='text-align: right; vertical-align: top;'>
                    $IsLogged $nick
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\" style='text-align: right; vertical-align: top;'>
                    <a class=\"dropdown-item\" style='text-align: right; vertical-align: top;' href=\"#\">Servers</a>
                    <a class=\"dropdown-item\" style='text-align: right; vertical-align: top;' href=\"#\">Settings</a>
                    <div class=\"dropdown-divider\" style='text-align: right; vertical-align: top;'></div>
                    <a class=\"dropdown-item\" style='text-align: right; vertical-align: top;' onclick='odhlasit()' href=\"https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie\">Logout</a>
                </div>
            </li>";
        }
        ?>
    </div>
</nav>
<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#23272a","text":"#ffffff","border":"#ffa500"},"button":{"background":"#ffa500","text":"#ffffff"}},"corners":"large","padding":"small","margin":"large","content":{"message":"<?php include ("src/laungage/". $jazyk .".php"); echo $Cookies;?>","link":"<?php include ("src/laungage/". $jazyk .".php"); echo $MoreInfo;?>","button":"<?php include ("src/laungage/". $jazyk .".php"); echo $BTNCookies;?>", "href":"https://www.cookiepolicygenerator.com/live.php?token=4NrLLhbRTNIZB7z1P7PjSqt7uPoA8jge"}})});</script>
<div class="heading text-center" style="text-align: left !important;">
    <img src="src/img/logo.png" style="text-align: left;" width="75" height="75">
    <h1 class="display-5 title" style="text-align: left"><?php include ("src/laungage/". $jazyk .".php"); echo $Dashboard;?> v.BETA-0.0.1</h1>
    <a class="btn btn-primary" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/" role="button" style="text-align: left !important;">Servers</a>
<br />
    <a class="btn btn-primary" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/" role="button" style="text-align: left !important;">Shop</a>
    <br/>
    <a class="btn btn-primary" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/" role="button" style="text-align: left !important;">Invite</a>
    <br /><br /><br /><br /><br /><br />
</div>
<div class="features" id="features">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/now-ui-kit.min.js"></script>
<div class="footer">
    <button onclick="setCookie('Laungage', 'en_GB', 7); history.go(0);" style="background: transparent; border: transparent"><img src="img/en.jpg" width="19" height="9" onclick="setCookie('Laungage', 'en_GB', 7)"></button>
    <button onclick="setCookie('Laungage', 'cs_CZ', 7); history.go(0);" style="background: transparent; border: transparent"><img src="img/cz.jpg" width="19" height="9" onclick="setCookie('Laungage', 'cs_CZ', 7)"></button>
    <button onclick="setCookie('Laungage', 'sk_SK', 7); history.go(0);" style="background: transparent; border: transparent"><img src="img/sk.jpg" width="19" height="9" onclick="setCookie('Laungage', 'sk_SK', 7)"></button><br/>
    <?php include 'src/laungage/en_GB.php'; echo $CreatedBy;?>
</div>
</body>
</html>