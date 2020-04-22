<?php
function zapis()
{
    $cookie_name = "Thumbie-Laungage";
    $cookie_value = "Laungage";
    setcookie($cookie_name, $cookie_value, "en_GB");
}

function getLaungage(){
    if(count($_COOKIE) > 0) {
        if(isset($_COOKIE["Thumbie-Laungage"])){
            $sdaa = $_COOKIE["Thumbie-Laungage"];
        } else{
            $sdaa = "en_GB";
        }
    } else {
        $sdaa = "en_GB";
    }
    return $sdaa;
}
?>
