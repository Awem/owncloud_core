<?php
/**
 * @author Bart Visscher <bartv@thisnet.nl>
 * @author Björn Schießle <schiessle@owncloud.com>
 * @author Frank Karlitschek <frank@owncloud.org>
 * @author Georg Ehrke <georg@owncloud.com>
 * @author Joas Schilling <nickvergessen@gmx.de>
 * @author Jörn Friedrich Dreyer <jfd@butonic.de>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Robin Appelman <icewind@owncloud.com>
 * @author Thomas Müller <thomas.mueller@tmit.eu>
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
// use OCP namespace for all classes that are considered public.
// This means that they should be used by apps instead of the internal ownCloud classes
namespace OCP;

/**
 * This class provides access to the internal filesystem abstraction layer. Use
 * this class exlusively if you want to access files
 */
class Files {
	/**
	 * Recusive deletion of folders
	 * @return bool
	 */
	static function rmdirr( $dir ) {
		return \OC_Helper::rmdirr( $dir );
	}

	/**
	 * Get the mimetype form a local file
	 * @param string $path
	 * @return string
	 * does NOT work for ownClouds filesystem, use OC_FileSystem::getMimeType instead
	 */
	static function getMimeType( $path ) {
		return(\OC_Helper::getMimeType( $path ));
	}

	/**
	 * Search for files by mimetype
	 * @param string $mimetype
	 * @return array
	 */
	static public function searchByMime( $mimetype ) {
		return(\OC\Files\Filesystem::searchByMime( $mimetype ));
	}

	/**
	 * Copy the contents of one stream to another
	 * @param resource $source
	 * @param resource $target
	 * @return int the number of bytes copied
	 */
	public static function streamCopy( $source, $target ) {
		list($count, $result) = \OC_Helper::streamCopy( $source, $target );
		return $count;
	}

	/**
	 * Create a temporary file with an unique filename
	 * @param string $postfix
	 * @return string
	 *
	 * temporary files are automatically cleaned up after the script is finished
	 */
	public static function tmpFile( $postfix='' ) {
		return(\OC_Helper::tmpFile( $postfix ));
	}

	/**
	 * Create a temporary folder with an unique filename
	 * @return string
	 *
	 * temporary files are automatically cleaned up after the script is finished
	 */
	public static function tmpFolder() {
		return(\OC_Helper::tmpFolder());
	}

	/**
	 * Adds a suffix to the name in case the file exists
	 * @param string $path
	 * @param string $filename
	 * @return string
	 */
	public static function buildNotExistingFileName( $path, $filename ) {
		return(\OC_Helper::buildNotExistingFileName( $path, $filename ));
	}

	/**
	 * Gets the Storage for an app - creates the needed folder if they are not
	 * existant
	 * @param string $app
	 * @return \OC\Files\View
	 */
	public static function getStorage( $app ) {
		return \OC_App::getStorage( $app );
	}
}
