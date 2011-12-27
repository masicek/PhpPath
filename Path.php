<?php

/**
 * PhpPath
 * @link https://github.com/masicek/PhpPath
 * @author Viktor Mašíček <viktor@masicek.net>
 * @license "New" BSD License
 */

namespace PhpPath;

require_once __DIR__ . '/Exceptions.php';

/**
 * Collection of static functions for better work with path to directory/file
 *
 * @author Viktor Mašíček <viktor@masicek.net>
 */
class Path
{

	/**
	 * Version of PhpPath
	 */
	const VERSION = '0.2.1';


	/**
	 * Check if the directory exists
	 *
	 * @param string $path Checked path
	 *
	 * @throws Exception Directory not exists
	 * @return string Input path
	 */
	static public function checkDirectory($path)
	{
		$pathFiltered = self::make($path);

		if (!is_dir($pathFiltered))
		{
			throw new NotExistsPathException('Directory "' . $path . '" not exists.');
		}

		return $path;
	}


	/**
	 * Check if the file exists
	 *
	 * @param string $path Checked path
	 *
	 * @throws Exception File not exists
	 * @return string Input path
	 */
	static public function checkFile($path)
	{
		$pathFiltered = self::make($path);

		if (!is_file($pathFiltered))
		{
			throw new NotExistsPathException('File "' . $path . '" not exists.');
		}

		return $path;
	}


	/**
	 * Make path from list of arguments.
	 *
	 * @return string
	 */
	static public function make()
	{
		$pathParts = func_get_args();

		$ds = DIRECTORY_SEPARATOR;
		$path = implode($ds, $pathParts);

		// correct separator
		$path = str_replace('/', $ds, $path);
		$path = str_replace('\\', $ds, $path);

		// replace "/./" and "//"
		$path = str_replace($ds . $ds, $ds, $path);
		$path = str_replace($ds . '.' . $ds, $ds, $path);

		return $path;
	}


	/**
	 * Make path from list of arguments and check if the directory exists
	 *
	 * @return string
	 */
	static public function makeAndCheckDirectory()
	{
		$args = func_get_args();
		$path = call_user_func_array('self::make', $args);
		self::checkDirectory($path);
		return $path;
	}


	/**
	 * Make path from list of arguments and check if the file exists
	 *
	 * @return string
	 */
	static public function makeAndCheckFile()
	{
		$args = func_get_args();
		$path = call_user_func_array('self::make', $args);
		self::checkFile($path);
		return $path;
	}


}
