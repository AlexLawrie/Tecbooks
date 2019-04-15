<?php

header('HTTP/1.1 200 OK');

$resp = 'cmd=_notify-validate';
foreach ($_POST as $parm => $var)
{
    $var = urlencode(stripslashes($var));
    $resp .= "&$parm=$var";
}

$item_name        = $_POST['item_name'];
$item_number      = $_POST['item_number'];
$payment_status   = $_POST['payment_status'];
$payment_amount   = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id           = $_POST['txn_id'];
$receiver_email   = $_POST['receiver_email'];
$payer_email      = $_POST['payer_email'];
$record_id	 	= $_POST['custom'];

$httphead = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$httphead = "Content-Type: application/x-www-form-urlencoded\r\n";
$httphead = "Content-Length: " . strlen($resp) . "\r\n\r\n";

$errno ='';
$errstr ='';

$fh = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

if (!$fh) {
    

} else {
    fputs ($fh, $httphead . $resp);
    while (!feof($fh))
    {
        $readresp = fgets ($fh, 1024);
        if (strcmp ($readresp, "VERIFIED") == 0)
        {
 
 //big comment

    }

    else if (strcmp ($readresp, "INVALID") == 0) {

    }
}

fclose ($fh);
}

?>