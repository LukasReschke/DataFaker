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

namespace OCA\DataFaker\Controller;


use OCP\AppFramework\Http\RedirectResponse;
use \OCP\IRequest;
use \OCP\AppFramework\Controller;
use Faker\Factory;
use OCP\Security\ISecureRandom;

class PageController extends Controller {

    private $userId;

    public function __construct($appName, IRequest $request, $userId){
        parent::__construct($appName, $request);
        $this->userId = $userId;
    }

    /**
     * Method that creates fake users
     */
    public function generateUsers() {
		for ($i=0; $i < 100; $i++) {
			$faker = Factory::create();
			$firstName = $faker->firstName;
			$secondName = $faker->lastName;
			$username = str_replace('\'', '', $firstName.$secondName);
			\OC_User::createUser($username, \OC::$server->getSecureRandom()->getLowStrengthGenerator()->generate(3));
			\OC_User::setDisplayName($username, $firstName . ' ' . $secondName);
		}
		return new RedirectResponse($_SERVER['HTTP_REFERER']);
    }


}