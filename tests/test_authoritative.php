<?php
require_once __DIR__ . '/../vendor/autoload.php';
$nw = new Net_Whois;
$nw->authoritative = true;
echo $nw->query("facebook.com");
