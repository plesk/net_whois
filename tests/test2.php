
<?php
require_once __DIR__ . '/../vendor/autoload.php';

$server = "whois.denic.de";
$query  = "phpcrawler.de";     // get information about
                               // this domain
$whois = new Net_Whois;
$data = $whois->query($query, $server);
echo $data;
