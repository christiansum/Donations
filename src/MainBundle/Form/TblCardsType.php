<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use MainBundle\Form\DateType;

class TblCardsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Type'
                ))
            ->add('cardNum','text', array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Card Number'
                ))
            ->add('codeVal',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Validation Code'
                ))
            ->add('dueDate', 'date' ,array(
                'widget'=> 'single_text',
                'format'=>'d/M/y',
                'attr' => ['class' => 'datepicker form-control'],
                'label' => 'Due Date'
            ))
            ->add('tittle',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Tittle'
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\TblCards'
        ));
    }
}
