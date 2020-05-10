<?php
session_start();

function getLogin($Servers, $Settings, $Logout, $IsLogged, $Login){

    if ($_SESSION["id"] == null) {
        echo "<a class=\"btn btn-outline-secondary my-2 my-sm-0 btn-round btn-sm\" href=\"https://discordapp.com/api/oauth2/authorize?client_id=699959562454827009&redirect_uri=https%3A%2F%2Fprivate.greenlandmc.eu%2Ftajny-projekt%2FGGGEDR%2FThumbie%2Fpanel%2Fintegrations%2Fdiscord%2FOAuth2%2Flogin.php&response_type=code&scope=identify%20guilds%20email\">$Login</a>";
    } else {
        $user_id = base64_decode($_SESSION["id"]);
        $user_avatar = base64_decode($_SESSION["user_avatar"]);
        $nick = "<p style='color:orange;'>     <img src='https://cdn.discordapp.com/avatars/$user_id/$user_avatar.webp' height='40' width='40' style='    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;  '></p>";
        $combo = $IsLogged . $nick;

        echo "<br/>
<br/>
<li class=\"nav-item dropdown\" style='text-align: right; vertical-align: top;'>
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style='text-align: right; vertical-align: top; color: orange'>
                    $nick
                </a>
                
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\" style='text-align: right; vertical-align: top;'>
                    <a class=\"dropdown-item\" style='text-align: right; vertical-align: top;' href=\"#\">$Servers</a>
                    <a class=\"dropdown-item\" style='text-align: right; vertical-align: top;' href=\"#\">$Settings</a>
                    <div class=\"dropdown-divider\" style='text-align: right; vertical-align: top;'></div>
                    <a class=\"dropdown-item\" style='text-align: right; vertical-align: top;' href=\"https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/logout\">$Logout</a>
                </div>
            </li>
            <a>‎‎‎‎‎‎ ‍  ‍  ‍   ‍  ‍  ‍   </a>";
    }

}

function getNavbar($Servers, $Settings, $Logout, $IsLogged, $Login, $Doc, $Commands, $Tutorial, $sett, $About, $Features, $Home){
    echo "<nav class=\"navbar navbar-expand-lg bg-transparent\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"https://thumbie.me\">$Home<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://thumbie.me/About\">$About</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://thumbie.me/#features\">$Features</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    $Doc
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/commands\">$Commands</a>
                    <a class=\"dropdown-item\" href=\"/tutorials\">$Tutorial</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"/server-settings\">$sett</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\" /credits\">Credits</a>
                </div>
            </li>
        </ul>";
    getLogin($Servers, $Settings, $Logout, $IsLogged, $Login);
    echo "</div>
</nav>";
}

function getFooter($CreatedBy, $Sponsors){
    echo "<div class=\"footer\">
    <button onclick=\"setCookie('Laungage', 'en_GB', 7); history.go(0);\" style=\"background: transparent; border: transparent\"><img src=\"https://thumbie.me/img/en.jpg\" width=\"19\" height=\"9\" onclick=\"setCookie('Laungage', 'en_GB', 7)\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to select this language\"></button>
    <button onclick=\"setCookie('Laungage', 'cs', 7); history.go(0);\" style=\"background: transparent; border: transparent\"><img src=\"https://thumbie.me/img/cz.jpg\" width=\"19\" height=\"9\" onclick=\"setCookie('Laungage', 'cs_CZ', 7)\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Klikni pro vybráni tohohle jazyka\"></button>
    <button onclick=\"setCookie('Laungage', 'sk', 7); history.go(0);\" style=\"background: transparent; border: transparent\"><img src=\"https://thumbie.me/img/sk.jpg\" width=\"19\" height=\"9\" onclick=\"setCookie('Laungage', 'sk_SK', 7)\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Klikni pre vybranie tohto jazyka\"></button><br/><br/>
    $CreatedBy
    <br />
    <br />
    $Sponsors</a>
</div>";
}

function getCard($FOB, $FOS, $OneCardTitle, $OneCardSubtitle, $TwoCardTitle, $TwoCardSubtitle, $ThreeCardTitle, $ThreeCardSubtitle, $FourCardTitle, $FourCardSubtitle, $FiveCardSubtitle, $FiveCardTitle, $SixCardTitle, $SixCardSubtitle, $SevenCardTitle, $SevenCardSubtitle, $EightCardTitle, $EightCardSubtitle){
    echo "<div class=\"title\">$FOB</div>
    <div class=\"subtitle\">$FOS</div>
    <div class=\"cards\">
        <div class=\"card\" style=\"width: 18rem;\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">$OneCardTitle</h5>
            <p class=\"card-text\">$OneCardSubtitle</p>
        </div>
    </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$TwoCardTitle</h5>
                <p class=\"card-text\">$TwoCardSubtitle</p>
            </div>
        </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$ThreeCardTitle</h5>
                <p class=\"card-text\">$ThreeCardSubtitle</p>
            </div>
        </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$FourCardTitle</h5>
                <p class=\"card-text\">$FourCardSubtitle</p>
            </div>
        </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$FiveCardTitle</h5>
                <p class=\"card-text\">$FiveCardSubtitle</p>
            </div>
        </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$SixCardTitle</h5>
                <p class=\"card-text\">$SixCardSubtitle</p>
            </div>
        </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$SevenCardTitle</h5>
                <p class=\"card-text\">$SevenCardSubtitle</p>
            </div>
        </div>
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">$EightCardTitle</h5>
                <p class=\"card-text\">$EightCardSubtitle</p>
            </div>
        </div>
    </div>";
}

?>

