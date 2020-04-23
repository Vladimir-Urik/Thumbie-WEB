<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET["error"])) {
echo json_encode(array("message" => "Authorization Error"));
} elseif (isset($_GET["code"])) {
$redirect_uri = "https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/panel/integrations/discord/OAuth2/login.php";
$token_request = "https://discordapp.com/api/oauth2/token";

$token = curl_init();

curl_setopt_array($token, array(
CURLOPT_URL => $token_request,
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => array(
"grant_type" => "authorization_code",
"client_id" => "699959562454827009",
"client_secret" => "eHV_YdI2AQZZHsig8nKcBFyca_N9HCo9",
"redirect_uri" => $redirect_uri,
"code" => $_GET["code"]
)
));
curl_setopt($token, CURLOPT_RETURNTRANSFER, true);

$resp = json_decode(curl_exec($token));
curl_close($token);

if (isset($resp->access_token)) {
$access_token = $resp->access_token;

$info_request = "https://discordapp.com/api/users/@me";

$info = curl_init();
curl_setopt_array($info, array(
CURLOPT_URL => $info_request,
CURLOPT_HTTPHEADER => array(
"Authorization: Bearer {$access_token}"
),
CURLOPT_RETURNTRANSFER => true
));

$user = json_decode(curl_exec($info));
curl_close($info);

echo "<head><script src=\"setter.js\"></script></head><script>setCookie('user_id', '{$user->id}', 1); setCookie('user_name', '{$user->username}', 1); location.href = 'https://private.greenlandmc.eu/tajny-projekt/GGGEDR/Thumbie/';</script>";

} else {
echo json_encode(array("message" => "Authentication Error"));
}
} else {
echo json_encode(array("message" => "No Code Provided"));
}

?>