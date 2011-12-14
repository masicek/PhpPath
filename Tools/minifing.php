<?php

/**
 * PhpPath
 *
 * Make minifi version of PhpPath
 *
 * @link https://github.com/masicek/PhpPath
 * @author Viktor Mašíček <viktor@masicek.net>
 * @license "New" BSD License
 */

// code
$PathContent = exec('php -w ../Path.php');
$PContent = exec('php -w ../P.php');
$content = $PathContent . ' ' . $PContent;
$content = preg_replace('/require_once[^;]+;/', '', $content);

// comment
require_once '../Path.php';
$comment = '/** PhpPath-' . \PhpPath\Path::VERSION . ', Minified version of PhpPath. @link https://github.com/masicek/PhpPath @author Viktor Mašíček <viktor@masicek.net> @license "New" BSD License */';

// save into file
$content = '<?php ' . $comment . ' ' . $content;
$fileMini = fopen('../PhpPath.min.php', 'w');
fwrite($fileMini, $content);
