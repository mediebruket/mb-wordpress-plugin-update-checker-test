<?php
/**
 * Plugin Name:       Mediebruket Wordpress Plugin Update Checker Test
 * Plugin URI:        https://www.mediebruket.no
 * Description:       Plugin for testing Plugin Update Checker
 * Version:           1.0.3
 * Author:            mediebruket
 * Author URI:        https://www.mediebruket.no
 * Text Domain:       mb-wordpress-plugin-update-checker-test
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Tested up to:      6.0
 *
 * @link              https://www.mediebruket.no
 * @author            Wordpress
 * @package           Mediebruket\Wordpress\UpdateCheckerTest
 */

namespace Mediebruket\Wordpress\UpdateCheckerTest;

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

require 'vendor/autoload.php';

function mb_update_checker_test_init() {

    $updateChecker = PucFactory::buildUpdateChecker(
        'https://github.com/mediebruket/mb-wordpress-plugin-update-checker-test',
        __FILE__,
        'mb-wordpress-update-checker-test'
    );

    $updateChecker->setBranch('master');
}

mb_update_checker_test_init();