<?php
/**
 * Zend Framework 2 - PHP-Magazin Service-Manager
 *
 * Beispiele für ZF2 Service-Manager
 *
 * @package    Shop
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @link       http://www.ralfeggert.de/
 */

return array(
    'modules'                 => array(
        'Application',
        'ZendDeveloperTools',
        'Shop'
    ),
    'module_listener_options' => array(
        'config_glob_paths'        => array(
            'config/autoload/{,*.}{global,local}.php'
        ),
        'module_paths'             => array(
            './module',
            './vendor'
        ),
        'cache_dir'                => './data/cache',
        'config_cache_enabled'     => false,
        'config_cache_key'         => 'module_config_cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key'     => 'module_map_cache'
    )
);
