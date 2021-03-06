<?php

namespace Bacon\Bundle\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['search']) {
            $builder
                ->add('username')->setRequired(false)
                ->add('email')->setRequired(false)
                ->add('enabled')->setRequired(false)
            ;
        }
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'search'     => false,
            'data_class' => 'Bacon\Bundle\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacon_bundle_userbundle_userform';
    }
}
