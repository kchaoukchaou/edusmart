<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setEmail('mounir@gmail.com');
        $password =password_hash('mounir1234', PASSWORD_ARGON2I);
        $user->setPassword($password);
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($user);

        $user1 = new User();
        $user1->setEmail('kchaouyassine93@gmail.com');
        $password1 =password_hash('yas1234', PASSWORD_ARGON2I);
        $user1->setPassword($password1);
        $user1->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($user1);

        $manager->flush();
    }
}
