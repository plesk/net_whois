<?php
require_once __DIR__ . '/../vendor/autoload.php';
$nw = new Net_Whois;
echo $nw->query('ananzi.co.za');
