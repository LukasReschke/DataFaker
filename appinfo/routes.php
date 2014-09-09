<?php
/**
 * ownCloud - datafaker
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Lukas Reschke <lukas@owncloud.com>
 * @copyright Lukas Reschke 2014
 */

namespace OCA\DataFaker\AppInfo;

$application = new Application();

$application->registerRoutes($this, array('routes' => array(
	array('name' => 'page#generateUsers', 'url' => '/generateUsers', 'verb' => 'GET'),
)));
