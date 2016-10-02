<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblUsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('secondName')
            ->add('thirdName')
            ->add('firstLastname')
            ->add('secondLastname')
            ->add('marriageLastname')
            ->add('idDocument')
            ->add('gender')
            ->add('maritalStatus')
            ->add('phoneNumber')
            ->add('cellphoneNumber')
            ->add('createdDt', 'datetime')
            ->add('modifiedDt', 'datetime')
            ->add('active')
            ->add('idCountry')
            ->add('idDept')
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
            'data_class' => 'MainBundle\Entity\TblUsers'
        ));
    }
}
