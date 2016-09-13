<?php
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();
$log = 'New visitor at: ' . date("j.n.Y G:i") . ' with IP: ' . $user_ip.PHP_EOL;

//$text = "Anything";
//$var_str = var_export($user_ip, true);
//$var = "<?php\n\n\$text = $var_str;\n\n?/>";//


file_put_contents('./logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);



//file_put_contents('filename.php', $var);
//echo $user_ip;