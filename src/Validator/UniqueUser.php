<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
// El target funciona para decir que se puede usar como anotacion en otras clases ya sea sobre una propiedad un metodo o una anotacion
class UniqueUser extends Constraint
{
    /*
     * Any public properties become valid options for the annotation.
     * Then, use these in your validator class.
     */
    public $message = 'I think you\'ve already registered';
}
