<?php
require_once __DIR__ . '/../vendor/autoload.php';
$whois = new Net_Whois();
echo $whois->query('magazine-deutschland.de');
