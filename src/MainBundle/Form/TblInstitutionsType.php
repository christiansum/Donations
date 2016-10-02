<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblInstitutionsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('about')
            ->add('thumbnail')
            ->add('minAmount')
            ->add('idCountry')
            ->add('address')
            ->add('contactName')
            ->add('contactPhone')
            ->add('email')
            ->add('createdDt', 'datetime')
            ->add('modifiedDt', 'datetime')
            ->add('active')
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
            'data_class' => 'MainBundle\Entity\TblInstitutions'
        ));
    }
}
