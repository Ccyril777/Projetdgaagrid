<?php

namespace App\DataFixtures;

use App\Entity\Workbook;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class WorkbookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 20; $i++) {
            $workbook = new Workbook();
            $workbook->setWorkbookName($faker->jobTitle);
            $workbook->setDescription($faker->text);
            $manager->persist($workbook);
        }
        $manager->flush();
    }
}
