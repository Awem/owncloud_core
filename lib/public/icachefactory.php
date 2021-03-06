<?php
/**
 * @author Robin Appelman <icewind@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OCP;

interface ICacheFactory{
	/**
	 * Get a memory cache instance
	 *
	 * All entries added trough the cache instance will be namespaced by $prefix to prevent collisions between apps
	 *
	 * @param string $prefix
	 * @return \OCP\ICache
	 */
	public function create($prefix = '');

	/**
	 * Check if any memory cache backend is available
	 *
	 * @return bool
	 */
	public function isAvailable();
}
