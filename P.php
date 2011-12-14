<?php

/**
 * PhpPath
 * @link https://github.com/masicek/PhpPath
 * @author Viktor Mašíček <viktor@masicek.net>
 * @license "New" BSD License
 */

namespace PhpPath;

require_once __DIR__ . '/Path.php';

use PhpPath\Path;

/**
 * Short variant for class Path
 *
 * @author Viktor Mašíček <viktor@masicek.net>
 */
class P
{

	/**
	 * Check if the directory exists
	 *
	 * @param string $path Checked path
	 *
	 * @throws Exception Directory not exists
	 * @return string Input path
	 */
	static public function cd($path)
	{
		return Path::checkDirectory($path);
	}


	/**
	 * Check if the file exists
	 *
	 * @param string $path Checked path
	 *
	 * @throws Exception File not exists
	 * @return string Input path
	 */
	static public function cf($path)
	{
		return Path::checkFile($path);
	}


	/**
	 * Make path from list of arguments.
	 *
	 * @return string
	 */
	static public function m()
	{
		return call_user_func_array(__NAMESPACE__ . '\Path::make', func_get_args());
	}


	/**
	 * Make path from list of arguments and check if the directory exists
	 *
	 * @return string
	 */
	static public function mcd()
	{
		return call_user_func_array(__NAMESPACE__ . '\Path::makeAndCheckDirectory', func_get_args());
	}


	/**
	 * Make path from list of arguments and check if the file exists
	 *
	 * @return string
	 */
	static public function mcf()
	{
		return call_user_func_array(__NAMESPACE__ . '\Path::makeAndCheckFile', func_get_args());
	}


}
