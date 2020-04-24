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
    <title>Thumbie &bull; <?php include ("src/laungage/". $jazyk .".php"); echo $ERRFourZeroFour;?></title>
    <script src="cookies/Laungage.js"></script>
    <meta name="author" content="GGGEDR">
    <script>function odhlasit() {
            document.cookie = "user_id=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
            document.cookie = "user_name=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
        }</script>
</head>
<body onload="setCookier('Laungage', 'en_GB', 7)">
<?php
include ("MicroPaths.php");
getNavbar($Servers, $Settings, $Logout, $IsLogged, $Login, $Doc, $Commands, $Tutorial, $sett, $About, $Features, $Home);
?>
<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#23272a","text":"#ffffff","border":"#ffa500"},"button":{"background":"#ffa500","text":"#ffffff"}},"corners":"large","padding":"small","margin":"large","content":{"message":"<?php include ("src/laungage/". $jazyk .".php"); echo $Cookies;?>","link":"<?php include ("src/laungage/". $jazyk .".php"); echo $MoreInfo;?>","button":"<?php include ("src/laungage/". $jazyk .".php"); echo $BTNCookies;?>", "href":"https://www.cookiepolicygenerator.com/live.php?token=4NrLLhbRTNIZB7z1P7PjSqt7uPoA8jge"}})});</script>
<div class="heading text-center">
    <img src="img/logo.png">
    <h1 class="display-5 title"><?php include ("src/laungage/". $jazyk .".php"); echo $ERRFourZeroFour;?></h1>
    <p class="subtitle"><?php include ("src/laungage/". $jazyk .".php"); echo $ERRFourZeroFourSub;?></p>
    <a class="btn btn-primary btn-lg" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/" role="button"><?php include ("src/laungage/". $jazyk .".php"); echo $ReturnToHome;?></a>
    <br /><br /><br /><br /><br /><br />
</div>
<div class="features" id="features">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/now-ui-kit.min.js"></script>
<?php getFooter($CreatedBy); ?>
</body>
</html>