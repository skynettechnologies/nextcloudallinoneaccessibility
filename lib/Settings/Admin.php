<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace OCA\NextcloudAllInOneAccessibility\Settings;

use OCP\NextcloudAllInOneAccessibility\IManager;

class Admin extends ASettings {
	public function getScope(): int {
		return IManager::SCOPE_ADMIN;
	}
}
