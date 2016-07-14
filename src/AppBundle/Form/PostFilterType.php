<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;
use Lexik\Bundle\FormFilterBundle\Filter\FilterOperands;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

/**
 * PostFilterType filtro.
 * @author Nombre Apellido <name@gmail.com>
 */
class PostFilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('booleano', Filters\BooleanFilterType::class)
            ->add('entero', Filters\NumberRangeFilterType::class)
            ->add('smallEntero', Filters\NumberRangeFilterType::class)
            ->add('bigEntero', Filters\NumberRangeFilterType::class)
            ->add('cadena', Filters\TextFilterType::class, array(
                'condition_pattern' => FilterOperands::OPERAND_SELECTOR,
            ))
            ->add('texto', Filters\TextFilterType::class, array(
                'condition_pattern' => FilterOperands::OPERAND_SELECTOR,
            ))
            ->add('fechatiempo', Filters\DateTimeRangeFilterType::class)
            ->add('dechatiempoz', Filters\DateTimeRangeFilterType::class)
            ->add('fecha', Filters\DateRangeFilterType::class)
            ->add('tiempo', Filters\TextFilterType::class, array(
                'condition_pattern' => FilterOperands::OPERAND_SELECTOR,
            ))
            ->add('numerodecimal', Filters\NumberRangeFilterType::class)
            ->add('numeroconcoma', Filters\NumberRangeFilterType::class)
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ((array)$event->getForm()->getData() as $data) {
                if ( is_array($data)) {
                    foreach ($data as $subData) {
                        if (!empty($subData)) {
                            return;
                        }
                    }
                } else {
                    if (!empty($data)) {
                        return;
                    }    
                }
            }
            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_SUBMIT, $listener);
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

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'appbundle_postfiltertype';
    }
}
