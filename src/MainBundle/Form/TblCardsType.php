<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblCardsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('cardNum')
            ->add('codeVal')
            ->add('dueDate', 'date')
            ->add('tittle')
            ->add('createdDt', 'datetime')
            ->add('modifiedDt', 'datetime')
            ->add('active')
            ->add('idUser')
            ->add('createdBy')
            ->add('modifiedBy')
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
