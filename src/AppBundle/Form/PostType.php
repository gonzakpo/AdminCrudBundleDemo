<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('booleano', null, [
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ])
            ->add('entero', null, [
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ])
            ->add('smallEntero', null, [
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ])
            ->add('bigEntero', null, [
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ])
            ->add('cadena', null, [
                'attr' => [
                    'col' => 'col-md-6',
                ],
            ])
            ->add('texto', CKEditorType::class, [
                'attr' => [
                    'col' => 'col-md-12',
                ],
            ])
            ->add('fechatiempo', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'mm/dd/yyyy hh:ii',
                    'startView' => 'month',
                    'minView'   => 'hour',
                    'maxView'   => 'decade',
                    'todayBtn'  => true,
                ),
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ))
            ->add('dechatiempoz', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'mm/dd/yyyy hh:ii',
                    'startView' => 'month',
                    'minView'   => 'hour',
                    'maxView'   => 'decade',
                    'todayBtn'  => true,
                ),
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ))
            ->add('fecha', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'mm/dd/yyyy',
                    'startView' => 'month',
                    'minView'   => 'month',
                    'maxView'   => 'decade',
                    'todayBtn'  => true,
                ),
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ))
            ->add('tiempo', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'hh:ii',
                    'startView' => 'day',
                    'minView'   => 'hour',
                    'maxView'   => 'day',
                ),
                'attr' => [
                    'col' => 'col-md-3',
                ],
            ))
            ->add('numerodecimal', null, [
                'attr' => [
                    'col' => 'col-md-2',
                ],
            ])
            ->add('numeroconcoma', null, [
                'attr' => [
                    'col' => 'col-md-4',
                ],
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }
}
