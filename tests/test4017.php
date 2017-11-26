<?php
require_once __DIR__ . '/../vendor/autoload.php';
$tld  = "de";     // get information about this tld
$whois = new Net_Whois;
$data = $whois->getDomainServer($tld);
echo $data;
