<?php

header('Content-Type: text/plain');

echo "PHP directory: " . __DIR__ . PHP_EOL;

$envPath = __DIR__ . '/.env';

echo "Expected .env path: " . $envPath . PHP_EOL;
echo "Checking for .env: " . (file_exists($envPath) ? '.env EXISTS' : '.env DOES NOT EXIST') . PHP_EOL;

if (file_exists($envPath)) {
    echo "Readable: " . (is_readable($envPath) ? 'YES' : 'NO') . PHP_EOL;
    echo "Size: " . filesize($envPath) . " bytes" . PHP_EOL;
}
