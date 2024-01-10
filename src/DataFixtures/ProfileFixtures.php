<?php

namespace App\DataFixtures;

use App\Entity\Profile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProfileFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $profile = new Profile();
        $profile->setLastname('Bojos');
        $profile->setFirstname('Mario');
        $profile->setGender(1);
        $profile->setBirthDate(new \DateTime('1/1/1988'));
        $profile->setCivilStatus('2');
        $profile->setProfilePic('https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg?auto=compress&cs=tinysrgb&w=600');
        $profile->addEducation($this->getReference('education1'));
        $profile->addEducation($this->getReference('education2'));
        $profile->addEducation($this->getReference('education3'));
        $manager->persist($profile);

        $profile2 = new Profile();
        $profile2->setLastname('Bojos');
        $profile2->setFirstname('Ronel');
        $profile2->setGender(1);
        $profile2->setBirthDate(new \DateTime('12/12/2012'));
        $profile2->setCivilStatus('2');
        $profile2->setProfilePic('https://images.pexels.com/photos/220429/pexels-photo-220429.jpeg?auto=compress&cs=tinysrgb&w=600');
        $profile2->addEducation($this->getReference('ed1'));
        $profile2->addEducation($this->getReference('ed2'));
        $manager->persist($profile2);

        $manager->flush();
    }
}
