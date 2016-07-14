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
            ->add('booleano')
            ->add('entero')
            ->add('smallEntero')
            ->add('bigEntero')
            ->add('cadena')
            ->add('texto', CKEditorType::class)
            ->add('fechatiempo', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'mm/dd/yyyy hh:ii',
                    'startView' => 'month',
                    'minView'   => 'hour',
                    'maxView'   => 'decade',
                    'todayBtn'  => true,
                )))
            ->add('dechatiempoz', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'mm/dd/yyyy hh:ii',
                    'startView' => 'month',
                    'minView'   => 'hour',
                    'maxView'   => 'decade',
                    'todayBtn'  => true,
                )))
            ->add('fecha', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'mm/dd/yyyy',
                    'startView' => 'month',
                    'minView'   => 'month',
                    'maxView'   => 'decade',
                    'todayBtn'  => true,
                )))
            ->add('tiempo', \SC\DatetimepickerBundle\Form\Type\DatetimeType::class, array('pickerOptions' =>
                array(
                    'format'    => 'hh:ii',
                    'startView' => 'day',
                    'minView'   => 'hour',
                    'maxView'   => 'day',
                )))
            ->add('numerodecimal')
            ->add('numeroconcoma')
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
