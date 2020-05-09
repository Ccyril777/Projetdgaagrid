<?php

namespace App\DataFixtures;

use App\Entity\Sheet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class SheetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 20; $i++) {
            $workbook = new Sheet();
            $workbook->setSheetName($faker->jobTitle);
            $workbook->setSheetDescription($faker->text);
            $manager->persist($workbook);
        }
        $manager->flush();
    }
}
