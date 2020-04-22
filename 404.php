<?php
$jazyk = $_COOKIE["Laungage"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="src/css/now-ui-kit.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
    <title><?php include 'src/laungage/en_GB.php'; echo $Title;?></title>
    <script src="cookies/Laungage.js"></script>
    <meta name="author" content="GGGEDR">
</head>
<body onload="setCookier('Laungage', 'en_GB', 7)">
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
        <a class="btn btn-outline-secondary my-2 my-sm-0 btn-round btn-sm" href="https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2F&response_type=code&scope=identify%20email%20guilds"><?php include ("src/laungage/". $jazyk .".php"); echo $Login;?></a>
    </div>
</nav>
<?php
$alert = $_COOKIE["Alert"];
if($alert == null){
    include("src/laungage/" . $jazyk . ".php");
    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
    $Cookies
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" onclick=\"setCookie('Alert', 'yes', 14)\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
    <img src=\"img/unnamed.png\" width=\"50\" height=\"50\">
</div>";
}
?>
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
<div class="footer">
    <button onclick="setCookie('Laungage', 'en_GB', 7); history.go(0);" style="background: transparent; border: transparent"><img src="img/en.jpg" width="19" height="9" onclick="setCookie('Laungage', 'en_GB', 7)"></button>
    <button onclick="setCookie('Laungage', 'cs_CZ', 7); history.go(0);" style="background: transparent; border: transparent"><img src="img/cz.jpg" width="19" height="9" onclick="setCookie('Laungage', 'cs_CZ', 7)"></button>
    <button onclick="setCookie('Laungage', 'sk_SK', 7); history.go(0);" style="background: transparent; border: transparent"><img src="img/sk.jpg" width="19" height="9" onclick="setCookie('Laungage', 'sk_SK', 7)"></button><br/>
    <?php include 'src/laungage/en_GB.php'; echo $CreatedBy;?>
</div>
</body>
</html>