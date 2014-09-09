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


use \OCP\AppFramework\App;

use \OCA\DataFaker\Controller\PageController;
use OCP\IContainer;

require_once(__DIR__ . '/../3rdparty/vendor/autoload.php');


class Application extends App {


	public function __construct (array $urlParams=array()) {
		parent::__construct('datafaker', $urlParams);

		$container = $this->getContainer();

		/**
		 * Controllers
		 */
		$container->registerService('PageController', function(IContainer $c) {
			return new PageController(
				$c->query('AppName'), 
				$c->query('Request'),
				$c->query('UserId')
			);
		});


		/**
		 * Core
		 */
		$container->registerService('UserId', function(IContainer $c) {
			return \OCP\User::getUser();
		});		
		
	}


}