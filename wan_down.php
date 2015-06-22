#!/usr/local/bin/php -f
<?php
require_once("functions.inc");
require_once("config.inc");
require_once("notices.inc");
require_once("openvpn.inc");
require_once("interfaces.inc");

interface_bring_down('wan');
$message = sprintf("Interface %s pinning down",$if);
log_error($message);

?>
