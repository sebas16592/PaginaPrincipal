<?php

namespace App\Validator;

use App\Repository\UsuarioRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueUserValidator extends ConstraintValidator
{
    /**
     * @var UsuarioRepository
     */
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function validate($value, Constraint $constraint)
    {
        $existingUser = $this->usuarioRepository
            ->findOneBy(['email' => $value]);

        if (!$existingUser) {
            return;
        }

        /* @var $constraint \App\Validator\UniqueUser */

        // TODO: implement the validation here
        $this->context->buildViolation($constraint->message)
            ->addViolation();
    }
}
