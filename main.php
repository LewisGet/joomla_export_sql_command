<?php

$config_path = $argv[1];

require_once($config_path);

$config = new JConfig();

$username = $config->user;
$password = $config->password;
$database = $config->db;
$timestamp = time();

$command = "mysqldump -u {$username} -p {$database} > {$database}-{$timestamp}.sql";

echo "\n\n---\n\n";
echo "command is here!";
echo "\n\n---\n\n";
echo $command;
echo "\n\n---\n\n";
echo "passworld here";
echo "\n\n---\n\n";
echo $password;
echo "\n\n---\n\n";
system($command);
