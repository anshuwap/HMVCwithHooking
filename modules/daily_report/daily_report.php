<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Daily Report
Description: Daily Report Module
Version: 1.1.0
Author: Anshu Gupta
Author URI: https://www.anshuwap.com
Requires at least: 2.3.2
*/


define('DAILY_REPORT_MODULE_NAME', 'daily_report');

/*
 Defined daily_report table name
*/
if(!defined('TABLE_DAILYREPORT'))
    define('TABLE_DAILYREPORT', db_prefix() . 'daily_report');

$CI = &get_instance();

/**
 * Register new menu item in sidebar menu
 */
if (get_option('daily_report_enabled') == '1') {
    $CI->app_menu->add_sidebar_menu_item('daily_report', [
        'name'     => 'Daily Report',
        'href'     => admin_url('daily_report/Daily_report'),
        'icon'     => 'fa fa-file',
        'position' => 7,
    ]);
}

/**
* Register activation module hook
*/
register_activation_hook(DAILY_REPORT_MODULE_NAME, 'daily_report_activation_hook');

function daily_report_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}

/**
* Register language files, must be registered if the module is using languages
*/
register_language_files(DAILY_REPORT_MODULE_NAME, [DAILY_REPORT_MODULE_NAME]);

/**
 * Init menu setup module menu items in setup in admin_init hook
 * @return null
 */
function daily_report_init_menu_items()
{
    /**
    * If the logged in user is administrator, add custom menu in Setup
    */
    if (is_admin()) {
        $CI = &get_instance();
        $CI->app_menu->add_setup_menu_item('daily_report', [
            'href'     => admin_url('daily_report'),
            'name'     => _l('daily_report'),
            'position' => 66,
        ]);
    }
}

/**
* Load the module helper
*/
$CI->load->helper(DAILY_REPORT_MODULE_NAME . '/daily_report');