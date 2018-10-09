<?php
/*
Plugin Name: YotaBranding plugin
Author: Elleremo
Text Domain: YotaBranding
Domain Path: /languages
Requires PHP: 7.0
Version: 1.0.1
License: GPLv3
*/

if (!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path(__FILE__) . "includes/Autoloader.php");

if (file_exists(plugin_dir_path(__FILE__) . "vendor/autoload.php")) {
    require_once(plugin_dir_path(__FILE__) . "vendor/autoload.php");
}

use YotaBranding\Autoloader;

new Autoloader(__FILE__, 'YotaBranding');

use YotaBranding\Base\Wrap;
use YotaBranding\Classes\Relay;


class YotaBranding extends Wrap
{
    public $version = '1.0.1';

    function __construct()
    {
        new Relay();
    }

}

function YotaBranding__init()
{
    new YotaBranding();
}

add_action('plugins_loaded', 'YotaBranding__init', 30);
