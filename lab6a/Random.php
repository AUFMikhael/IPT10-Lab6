<?php

require_once 'vendor/autoload.php'; // Assuming you have installed FakerPHP via Composer

use Faker\Factory;

class RandomDataGenerator {
    private $faker;

    public function __construct() {
        $this->faker = Factory::create('en_PH');
    }

    // Generate random person data
    public function generatePerson() {
        return [
            $this->faker->uuid(),
            $this->faker->title(),
            $this->faker->firstName(),
            $this->faker->lastName(),
            $this->faker->streetAddress(),
            $this->faker->barangay(),
            $this->faker->city(), // Municipality
            $this->faker->province(),
            'Philippines',
            $this->faker->phoneNumber(),
            $this->faker->mobileNumber(),
            $this->faker->company(),
            $this->faker->url(),
            $this->faker->jobTitle(),
            $this->faker->safeColorName(),
            $this->faker->date(),
            $this->faker->email(),
            $this->faker->password()
        ];
    }
}

?>
