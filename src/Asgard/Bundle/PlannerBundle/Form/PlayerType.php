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
            ->add('game', 'entity', array(
                'class' => 'AsgardPlannerBundle:Game',
                'property' => 'name',
            ))
            ->add('user', 'entity', array(
                'class' => 'AsgardUserBundle:User',
                'property' => 'username',
            ))
            ->add('race', 'entity', array(
                'class' => 'AsgardPlannerBundle:Race',
                'property' => 'name',
            ))
            ->add('classification', 'entity', array(
                'class' => 'AsgardPlannerBundle:Classification',
                'property' => 'name',
            ))
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
