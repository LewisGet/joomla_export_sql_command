<?php

$config_path = $argv[1];

require_once($config_path);

$config = new JConfig();

$usersname = $config->user;
$passworld = $config->passworld;
$databases = $config->db;
$timestamp = time();

echo "mysqldump -u {$usersname} -p {$databases} > {$databases}-{$timestamp}.sql";
