<?php
/**
 * Created by PhpStorm.
 * User: Prasath
 * Date: 15/03/18
 * Time: 8:42 AM
 */

$path = 'vendor/matthiasmullie';

require_once $path . '/minify/src/Minify.php';
require_once $path . '/minify/src/CSS.php';
require_once $path . '/minify/src/JS.php';
require_once $path . '/minify/src/Exception.php';
require_once $path . '/minify/src/Exceptions/BasicException.php';
require_once $path . '/minify/src/Exceptions/FileImportException.php';
require_once $path . '/minify/src/Exceptions/IOException.php';
require_once $path . '/path-converter/src/ConverterInterface.php';
require_once $path . '/path-converter/src/Converter.php';

use MatthiasMullie\Minify;

$sourcePath = 'css/file.css';
$minifier = new Minify\CSS($sourcePath);

$destinationPath = 'css/file.css';
$minifier->add($destinationPath);

// save minified file to disk
$minifiedPath = 'minifiedcss/filemini.css';
$minifier->minify($minifiedPath);

// or just output the content
//echo $minifier->minify();
$sourcePathjs = 'js/file.js';
$minifier = new Minify\JS($sourcePathjs);

$destinationPathjs = 'js/file.js';
$minifier->add($destinationPathjs);

// save minified file to disk
$minifiedPathjs = 'minifiedjs/filemini.js';
$minifier->minify($minifiedPathjs);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="minifiedcss/filemini.css" >
    <script src="minifiedjs/filemini.js"></script>
</head>
</html>