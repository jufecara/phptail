<?php

/**
 * Require the library
 */
require 'PHPTail.php';

if (!isset($_REQUEST['file'])) {
    die();
}

/**
 * Initilize a new instance of PHPTail
 * @var PHPTail
 */
$tail = new PHPTail($_REQUEST['file']);

/**
 * We're getting an AJAX call
 */
if (isset($_GET['ajax'])) {
    echo $tail->getNewLines($_GET['lastsize'], $_GET['grep'], $_GET['invert']);
    die();
}

/**
 * We're getting an AJAX call
 */
if (isset($_REQUEST['fileSize'])) {
    echo $tail->getFileSize();
    die();
}