#!/usr/local/bin/php -f
<?php
require_once("functions.inc");
require_once("config.inc");
require_once("notices.inc");
require_once("openvpn.inc");
require_once("interfaces.inc");

$if = get_real_wan_interface();

exec("/sbin/ifconfig {$if} up");
$message = sprintf("Interface %s bringing",$if);
log_error($message);

?>
