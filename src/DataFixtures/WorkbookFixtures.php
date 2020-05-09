<?php

namespace App\DataFixtures;

use App\Entity\Workbook;
use App\Entity\Sheet;
use App\Entity\Board;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class WorkbookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');

        $workbook=[];
        for ($i = 1; $i <= 20; $i++) {
            $workbook = new Workbook();
            $workbook->setWorkbookName($faker->jobTitle);
            $workbook->setDescription($faker->text);
            $manager->persist($workbook);
        }

        $sheet=[];
        for ($i = 1; $i <= 20; $i++) {
            $sheet = new Sheet();
            $sheet->setSheetName($faker->jobTitle);
            $sheet->setSheetDescription($faker->text);
            $manager->persist($sheet);
        }

        $board=[];
        for ($i = 1; $i <= 20; $i++) {
            $board = new Board();
            $board->setUsualname($faker->jobTitle);
            $board->setSiiName($faker->lastname);
            $board->setBoardDescription($faker->text);
            $manager->persist($board);
        }
        $manager->flush();
    }
}
