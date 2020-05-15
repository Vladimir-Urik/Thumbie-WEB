<?php
session_start();//SELECT table_name, column_name FROM Information_schema.columns WHERE table_name like 'users' ORDER BY table_name DESC

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET["error"])) {
echo json_encode(array("message" => "Authorization Error"));
} elseif (isset($_GET["code"])) {
$redirect_uri = "https://thumbie.me/panel/integrations/discord/OAuth2/login.php";
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

$info_servers = "https://discordapp.com/api/users/@me";

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


$user_email = base64_encode($user->email);
$user_id = base64_encode($user->id);
$user_name = base64_encode($user->username);
$user_avatar = base64_encode($user->avatar);
$_SESSION["id"] = $user_id;
$_SESSION["name"] = $user_name;
$_SESSION["user_avatar"] = $user_avatar;
$_SESSION["email"] = $user_email;
echo "<script> location.href = 'https://panel.thumbie.me/login.php?id=$user_id&avatar=$user_avatar&name=$user_name&email=$user_email';</script>";

} else {
echo json_encode(array("message" => "Authentication Error"));
}
} else {
echo json_encode(array("message" => "No Code Provided"));
}

?>