<?php
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
    <title><?php include 'src/laungage/en_GB.php'; echo $Title;?></title>
<link rel='icon' href='img/logo.ico'>
</head>
<body>
<?php include 'cookies/MultiLaungage.php'; zapis();?>
<nav class="navbar navbar-expand-lg bg-transparent">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/"><?php include 'src/laungage/en_GB.php'; echo $Home;?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about"><?php include 'src/laungage/en_GB.php'; echo $About;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features"><?php include 'src/laungage/en_GB.php'; echo $Features;?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php include 'src/laungage/en_GB.php'; echo $Doc;?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/commands"><?php include 'src/laungage/en_GB.php'; echo $Commands;?></a>
                    <a class="dropdown-item" href="/tutorials"><?php include 'src/laungage/en_GB.php'; echo $Tutorial;?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/server-settings"><?php include 'src/laungage/en_GB.php'; echo $sett;?></a>
                </div>
            </li>
        </ul>
        <a class="btn btn-outline-secondary my-2 my-sm-0 btn-round btn-sm" href="https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2F&response_type=code&scope=identify%20email%20guilds"><?php include 'src/laungage/en_GB.php'; echo $Login;?></a>
    </div>
</nav>
<nav class="navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/">Moderator<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">Fun</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features">Memes</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php include 'src/laungage/en_GB.php'; echo $Doc;?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/commands"><?php include 'src/laungage/en_GB.php'; echo $Commands;?></a>
                    <a class="dropdown-item" href="/tutorials"><?php include 'src/laungage/en_GB.php'; echo $Tutorial;?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/server-settings"><?php include 'src/laungage/en_GB.php'; echo $sett;?></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="features" id="features">
</div>
<div class="footer">
    <?php include 'src/laungage/en_GB.php'; echo $CreatedBy;?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/now-ui-kit.min.js"></script>
</body>
</html>