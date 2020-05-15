<?php
session_start();

$servername = "mysql.hostify.cz";
$username = "db_34984_thumbie";
$password = "Thumbie2020Mysql";


include "getter.php";


// Create connection
$conn = new mysqli($servername, $username, $password, $username);

$n = getDataS($_GET["id"], $conn, "prefix");

$b = tt($n);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isAdmin(base64_decode($_SESSION["id"])) == false){
    echo "<h1>ERROR</h1>";
} else if(!isset($_GET["id"])) {
    echo "<h1>ERROR</h1>";
} else {
    $b = true;
    if($b){
        ?>
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
            <link rel="stylesheet" href="https://thumbie.me/src/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://thumbie.me/src/css/main.css">
            <link rel="stylesheet" href="https://thumbie.me/src/css/now-ui-kit.css">
            <link rel="stylesheet" href="https://thumbie.me/src/css/panel.css">
            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
            <title><?php include ("../../../../src/laungage/". $jazyk .".php"); echo $TitlePanel;?></title>
            <script href="https://thumbie.me/cookies/Laungage.js"></script>
            <meta name="author" content="GGGEDR">
            <script>function odhlasit() {
                    document.cookie = "user_id=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
                    document.cookie = "user_name=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
                    document.cookie = "user_avatar=null;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
                }
                function loadDoc() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("demo").setAttribute("value", <?php getDataS("699965643360960542", $conn, "prefix");?>);
                        }
                    };
                    xhttp.send();
                }</script>
            <style>
                .btn1{
                    width: 10%;
                    margin: 3% 7% auto;
                }
                .btnw{
                    width: 100% !important;
                }
            </style>
        </head>
        <body onload="<?php $id = $_SESSION["id"]; if($id == null){ echo "location.href = 'https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2Fpanel%2Fintegrations%2Fdiscord%2FOAuth2%2Flogin.php&response_type=code&scope=identify%20guilds%20email';";}?>">
        <?php
        include ("../../../../MicroPaths.php");
        getNavbar($Servers, $Settings, $Logout, $IsLogged, $Login, $Doc, $Commands, $Tutorial, $sett, $About, $Features, $Home, $Credits);
        ?>
        <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#23272a","text":"#ffffff","border":"#ffa500"},"button":{"background":"#ffa500","text":"#ffffff"}},"corners":"large","padding":"small","margin":"large","content":{"message":"<?php include ("../../../../src/laungage/". $jazyk .".php"); echo $Cookies;?>","link":"<?php include ("../../../../src/laungage/". $jazyk .".php"); echo $MoreInfo;?>","button":"<?php include ("../../../../src/laungage/". $jazyk .".php"); echo $BTNCookies;?>", "href":"https://www.cookiepolicygenerator.com/live.php?token=4NrLLhbRTNIZB7z1P7PjSqt7uPoA8jge"}})});</script>
        <div class="heading text-center" style="text-align: left !important;">
            <img src="../../../../img/logo.png" style="text-align: left;" width="75" height="75">
            <form method="post">
                <h1 class="display-5 title" style="text-align: left"><?php include ("src/laungage/". $jazyk .".php"); echo $Dashboard;?> v.BETA-0.0.1</h1>
                <a style="color: orange">Prefix:   </a><input style="background-color: slategray; color: white; border-color: transparent;" name="prefix" id="prefix" type="text" spellcheck="false" name="prefix" value="<?php getDataS($_GET["id"], $conn, "prefix");?>"><br/>
                <h1 class="display-5 title" style="text-align: left">MESSAGES:</h1><br/>
                <a style="color: orange">Select category:   </a><input style="background-color: slategray; color: white; border-color: transparent;" type="text" spellcheck="false" name="scg" value="<?php getDataS($_GET["id"], $conn, "select-category");?>"><br/>
                <a style="color: orange">Categories:   </a><input style="background-color: slategray; color: white; border-color: transparent;" name="ctg" type="text" spellcheck="false" value="<?php getDataS($_GET["id"], $conn, "category");?>"><br/>
                <a style="color: orange">Permanently bans a user:   </a><input name="hmb" style="background-color: slategray; color: white; border-color: transparent;" type="text" spellcheck="false" value="<?php getDataS($_GET["id"], $conn, "help-mod-ban");?>"><br/>
                <br />
                <br />
                <div class="shadow white-bg btn1">
                    <input type="submit" class="btn btn-success btnw" name="submit" id="submit" style="font-size: 100%; color: white;" onclick="loadDoc()" ;>
                </div>
            </form>
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
<?php

        function saveData($ida, $conn){
            saveWole($ida, $conn, "prefix", $_POST['prefix']);
            saveWole($ida, $conn, "select-category", $_POST['scg']);
            saveWole($ida, $conn, "category", $_POST['ctg']);
            saveWole($ida, $conn, "help-mod-ban", $_POST['hmb']);
        }
        function saveWole($id, $conn, $desc, $data){
            $sql = "UPDATE `$id` SET message='$data' WHERE id='$desc'";

            mysqli_query($conn, $sql);
        }

        $prefix = $_POST['prefix'];
        if($prefix  != null) {
            saveData($_GET["id"], $conn);
            location.reload();
            echo "<script>console.log(\"here\");</script>";
        } else {
            echo "prefix nemôže byt null";
        }

    } else {
        echo "<h1>ERROR</h1>";
    }




}

function isAdmin($ids){
    if($ids == "535708984959827978"){
        return true;
    } else if($ids == "512620748708380683"){
        return true;
    } else {
        return false;
    }
}

function tableExist($conn, $table, $username){
    if ($conn->query ( "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE table_schema = '$username' AND table_name ='$table'" )->fetch ()) {
        return true;
    } else {
        return false;
    }
}

function tt($nnn){
    if($nnn == false){
        return false;
    } else {
        return true;
    }
}

?>
