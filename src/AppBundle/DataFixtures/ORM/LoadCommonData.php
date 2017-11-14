<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Product;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCommonData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setPassword('some_password')
            ->setUsername('Аноним');

        $manager->persist($user);

        $saller= new saller();
        $saller
        ->setCompany("рога и копыта")
        ->setContacts("кудыкина гора");

        $seller_user = new User();
        $seller_user
            ->setPassword('some_password')
            ->setUsername('Барыга')
            ->setSeller($seller);

        $manager->persist($seller_user);

        $product = new Product();
        $product
            ->setName('Подушка для программиста')
            ->setDescription('Подушка специально для программистов. Мягкая и периодически издает звук успешно собранного билда.');

        $manager->persist($product);

        $manager->flush();
    }
}