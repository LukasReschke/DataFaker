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

namespace OCA\DataFaker;

use \OCA\DataFaker\AppInfo\Application;

$app = new Application();

$c = $app->getContainer();

$tmpl = new \OCP\Template($c->query('AppName'), 'settings-admin');

$tmpl->assign('generateUsersLink', $c->query('ServerContainer')->getURLGenerator()->linkToRoute('datafaker.page.generateUsers'));

return $tmpl->fetchPage();