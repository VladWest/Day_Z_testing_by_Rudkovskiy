<?php 

require 'vendor/autoload.php';


use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Dotenv\Dotenv;
use Dotenv\Repository\Adapter\EnvConstAdapter;
use Dotenv\Repository\Adapter\ServerConstAdapter;
use Dotenv\Repository\RepositoryBuilder;
//Svystun namespace
 use Svystun\Page;
 use Svystun\User;
 use Svystun\DB;
 use Svystun\Test\TestClass;

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
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();
// $s3_bucket = $_ENV['S3_BUCKET'];
// $s3_bucket = $_SERVER['S3_BUCKET'];
// echo "S3_bucket from .env file : " . $s3_bucket;


// Testing Page class from Svystun namespace
 
$page = new Page();
$page -> testPage();
echo "<br>";

// Testing User class from Svystun namespace
 
$user = new User();
$user -> testUser();
echo "<br>";

// Testing DB class from Svystun namespace
 
$db = new DB();
$db->testDB();
echo "<br>";

// Testing TestClass class from Svystun namespace
 
$db = new TestClass();
$db->testClasss();
echo "<br>";

?>