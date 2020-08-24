<?php 

require 'vendor/autoload.php';

use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Dotenv\Dotenv;
use Dotenv\Repository\Adapter\EnvConstAdapter;
use Dotenv\Repository\Adapter\ServerConstAdapter;
use Dotenv\Repository\RepositoryBuilder;

echo "Testing Carbon package";
echo "<br>";
printf("Now: %s", Carbon::now()); //Testing Carbon package
echo "<br>";


// Testing Ramsey uuid

echo "Testing ramsey/uuid package" . "<br>";

$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);
echo "<br>";

// Testing Dotenv
echo "Testing Dotenv" . "<br>";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$s3_bucket = $_ENV['S3_BUCKET'];
$s3_bucket = $_SERVER['S3_BUCKET'];
printf("S3_bucket from .env file : " . $s3_bucket);

?>