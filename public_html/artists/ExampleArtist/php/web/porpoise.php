<?php

/* 
 * Change working directory to where the rest of PorPOISe resides.
 */
chdir("/home4/hhjtown/public_html/artists/ExampleArtist/php");

/**
 * Include PorPOISe
 */
require_once("porpoise.inc.php");

/* start of server*/

/* use most strict warnings, enforces neat and correct coding */
error_reporting(E_ALL | E_STRICT);

/* open config file */
try {
	$config = new PorPOISeConfig("config.xml");
} catch (Exception $e) {
	printf("Error loading configuration: %s", $e->getMessage());
}

/* create server */

$server = LayarPOIServerFactory::createLayarPOIServer($config);

/* handle the request, and that's the end of it */

$server->handleRequest();

