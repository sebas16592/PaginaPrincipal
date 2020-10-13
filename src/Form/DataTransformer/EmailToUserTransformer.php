<?php
/**
 * Created by  principal
 * User: Sebastian Hernandez
 * Date: 22/07/2020
 * Time: 2:11 PM
 */

namespace App\Form\DataTransformer;


use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class EmailToUserTransformer implements DataTransformerInterface
{

    /**
     * @var UsuarioRepository
     */
    private $usuarioRepository;
    /**
     * @var callable
     */
    private $finderCallback;

    public function __construct(UsuarioRepository $usuarioRepository, callable $finderCallback)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->finderCallback = $finderCallback;
    }

    public function transform($value)
    {
        if (null === $value) {
            return '';
        }
        if (!$value instanceof Usuario) {
            throw new \LogicException('The UserSelectTextType can only be used with User objects');
        }
        return $value->getEmail();
    }

    public function reverseTransform($value)
    {
        if (!$value) {
            return ;
        }

        $callback = $this->finderCallback;

        $user = $callback($this->usuarioRepository, $value);

        if (!$user) {
            throw new TransformationFailedException(sprintf('No user found with email "%s"', $value));
        }

        return $user;
    }
}