<?php

namespace App\DataFixtures;

use App\Entity\ApiToken;
use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsuarioFixture extends BaseFixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {

        $this->passwordEncoder = $passwordEncoder;
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(10, 'main_users', function($i) use ($manager) {
            $user = new Usuario();
            $user->setEmail(sprintf('spacebar%d@example.com', $i));
            $user->setNombre($this->faker->firstName);

            if ($this->faker->boolean) {
                $user->setTwitterUsername($this->faker->userName);
            }
            $user->agreeTerms();
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user, '12345'
            ));

            $apiToken1 = new ApiToken($user);
            $apiToken2 = new ApiToken($user);
            $manager->persist($apiToken1);
            $manager->persist($apiToken2);
            return $user;
        });

        $this->createMany(3, 'admin_users', function($i) {
            $user = new Usuario();
            $user->setEmail(sprintf('admin%d@example.com', $i));
            $user->setNombre($this->faker->firstName);
            $user->setRoles(['ROLE_ADMIN']);
            $user->agreeTerms();
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user, '12345'
            ));
            return $user;
        });

        $manager->flush();
    }
}
