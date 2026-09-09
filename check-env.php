<?php

header('Content-Type: text/plain');

echo "PHP directory: " . __DIR__ . PHP_EOL;

$rootEnv = __DIR__ . '/.env';
$gtaEnv = __DIR__ . '/gta/.env';

echo PHP_EOL;
echo "Root .env: " . (file_exists($rootEnv) ? 'EXISTS' : 'DOES NOT EXIST') . PHP_EOL;
echo "Expected path: " . $rootEnv . PHP_EOL;

echo PHP_EOL;
echo "gta/.env: " . (file_exists($gtaEnv) ? 'EXISTS' : 'DOES NOT EXIST') . PHP_EOL;
echo "Expected path: " . $gtaEnv . PHP_EOL;

if (file_exists($gtaEnv)) {
    echo "gta/.env readable: " . (is_readable($gtaEnv) ? 'YES' : 'NO') . PHP_EOL;
    echo "gta/.env size: " . filesize($gtaEnv) . " bytes" . PHP_EOL;
}
