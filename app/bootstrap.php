<?php
// Load Config
require_once 'config/config.php';
// Load Helpares
require_once 'helpers/url_helper.php';
// Load Flash Method from Helpares 
require_once 'helpers/session_helper.php';
// Autoload Core Libraries
spl_autoload_register(function ($className) {
  require_once 'libraries/' . $className . '.php';
});
