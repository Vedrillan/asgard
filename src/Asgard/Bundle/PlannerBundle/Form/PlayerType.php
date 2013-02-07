<?php

namespace Asgard\Bundle\PlannerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('game')
            ->add('user')
            ->add('race')
            ->add('classification')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Asgard\Bundle\PlannerBundle\Entity\Player'
        ));
    }

    public function getName()
    {
        return 'asgard_bundle_plannerbundle_playertype';
    }
}
