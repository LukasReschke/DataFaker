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


\OCP\App::addNavigationEntry(array(
    'id' => 'datafaker',
    'name' => \OC_L10N::get('datafaker')->t('Data Faker')
));

\OCP\App::registerAdmin('datafaker', 'settings/admin');
