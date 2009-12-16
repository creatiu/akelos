<?php

// Define constants that are used only on a development environment
// See file boot.php for more info

@ini_set('display_errors', 1);
error_reporting(-1);

define('AK_ENABLE_TERMINAL_ON_DEV', true);
// Variable configuration options can be set at this point by calling
//AkConfig::setOption('options', 'value');