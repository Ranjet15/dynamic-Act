
<?php
require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use Faker\Factory;


$slugify = new Slugify();
echo "Slug: " . $slugify->slugify("This is the new sample text.") . "\n";


$uuid = Uuid::uuid4();
echo "UUID: " . $uuid->toString() . "\n";


$faker = Factory::create();
echo "Fake Name: " . $faker->name() . "\n";
echo "Fake Email: " . $faker->email() . "\n";
echo "Fake Text: " . $faker->text() . "\n";


$num = readline("Enter a number: ");
if (!is_numeric($num)) {
    echo "Please enter a valid number.\n";
    exit;
}
$num = (int)$num;

if ($num % 2 == 0) {
    echo "$num is Even\n";
} else {
    echo "$num is Odd\n";
}


$num = readline("Enter another number: ");
if (!is_numeric($num)) {
    echo "Please enter a valid number.\n";
    exit;
}
$num = (int)$num;

$result = "Even";
if ($num % 2 != 0) {
    $result = "Odd";
}
echo "The number is: $num and it is $result\n";


$number = readline("Enter a number to check primes from 2 to your input: ");
if (!is_numeric($number)) {
    echo "Invalid input. Please enter a number.\n";
    exit;
}
$number = (int)$number;

for ($ctr = 2; $ctr <= $number; $ctr++) {
    echo isPrime($ctr);
}


function isPrime($number) {
    if ($number < 2) {
        return "$number is not prime\n";
    }
    if ($number === 2) {
        return "$number is prime\n";
    }
    if ($number % 2 === 0) {
        return "$number is not prime\n";
    }

    $sqrtNumber = sqrt($number);
    for ($i = 3; $i <= $sqrtNumber; $i += 2) {
        if ($number % $i === 0) {
            return "$number is not prime\n";
        }
    }
    return "$number is prime\n";
}
?>
    