<?php

/**
 * Configuration for database connection
 *
 */

$host       = getenv("DATABASE_SERVER");
$username   = getenv("DATABASE_USERNAME");
$password   = getenv("DATABASE_PASSWORD");
$dbname     = getenv("DATABASE_NAME");
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
