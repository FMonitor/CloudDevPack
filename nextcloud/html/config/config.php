<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/nextcloud/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'oc5f1cmk1fca',
  'htaccess.RewriteBase' => '/nextcloud',
  'passwordsalt' => 'QmDLgEiPANX2wn4EG8Cxhwr3/K4b4c',
  'secret' => 'i2BhP8GZpadAYa3jHOvri6Pf90CtwD8BJXVyXLqYejCtIz3Q',
  'trusted_domains' => 
  array (
    0 => 'localhost:8022',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.4.1',
  'overwrite.cli.url' => 'https://lcmonitor.dynv6.net/nextcloud',
  'overwritewebroot' => '/nextcloud',
  'overwritehost' => 'lcmonitor.dynv6.net',
  'overwriteprotocol' => 'https',
  'trusted_proxies' => ['nginx'],
  'trusted_domains' =>
    array (
      0 => 'localhost',
      1 => 'lcmonitor.local',
      2 => 'lcmonitor.dynv6.net',
    ),
  'overwriteprotocol' => 'https',
  'dbname' => 'nextcloud',
  'dbhost' => 'mariadb:3306',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '123456',
  'installed' => true,
);
