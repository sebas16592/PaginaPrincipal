<?php

namespace App\Form;

use App\Entity\Movimiento;
use App\Entity\TipoMovimiento;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovimientoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('valor')
            ->add('tipoMovimiento', EntityType::class, [
                'class' => TipoMovimiento::class,
                'choice_label' => 'descripcion',
                'required' => false,
                'placeholder' => 'Seleccione..'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Movimiento::class,
        ]);
    }
}
