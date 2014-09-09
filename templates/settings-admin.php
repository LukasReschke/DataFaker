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

/** @var $l OC_L10N */
/** @var $_ array */
?>

<div class="section" id="datafaker-admin">
	<h3><?php p($l->t('Generate user data')) ?></h3>
	<p>
		<a href="<?php p($_['generateUsersLink']) ?>?requesttoken=<?php p($_['requesttoken']) ?>" class="button"><?php p($l->t('Generate random users')) ?></a>
	</p>
</div>