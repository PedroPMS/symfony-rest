<?php

namespace App\DataFixtures;

use App\Entity\Custumer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $custumer = new Custumer();
            $custumer->setFirstName($faker->firstName);
            $custumer->setLastName($faker->lastName);
            $custumer->setEmail($faker->email);
            $custumer->setPhoneNumber($faker->phoneNumber);
        }

        $manager->flush();
    }
}
