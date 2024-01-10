<?php

namespace App\DataFixtures;

use App\Entity\Education;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EducationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $education1 = new Education();
        $education1->setSchool('DPDS');
        $education1->setCourse('Elementary Education');
        $education1->setIsGraduate(1);
        $education1->setYearBegin(1992);
        $education1->setYearEnd(1998);
        $manager->persist($education1);

        $education2 = new Education();
        $education2->setSchool('ZNNHS');
        $education2->setCourse('Secondary Education');
        $education2->setIsGraduate(1);
        $education2->setYearBegin(1998);
        $education2->setYearEnd(2004);
        $manager->persist($education2);

        $education3 = new Education();
        $education3->setSchool('University of Santo Tomas');
        $education3->setCourse('BS Information Technology');
        $education3->setIsGraduate(1);
        $education3->setYearBegin(2004);
        $education3->setYearEnd(2007);
        $manager->persist($education3);

        $ed1 = new Education();
        $ed1->setSchool('Turno Daycare');
        $ed1->setCourse('Pre-School Education');
        $ed1->setYearBegin(2017);
        $ed1->setYearEnd(2019);
        $ed1->setIsGraduate(1);
        $manager->persist($ed1);

        $ed2 = new Education();
        $ed2->setSchool('Turno Elementary School');
        $ed2->setCourse('Elementary Education');
        $ed2->setYearBegin(2019);
        $ed2->setYearEnd(2023);
        $ed2->setIsGraduate(0);
        $manager->persist($ed2);

        $manager->flush();

        $this->addReference('education1', $education1);
        $this->addReference('education2', $education2);
        $this->addReference('education3', $education3);

        $this->addReference('ed1', $ed1);
        $this->addReference('ed2', $ed2);
    }
}
