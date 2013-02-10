<?php

namespace Asgard\Bundle\PlannerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('game', 'entity', array(
                'class' => 'AsgardPlannerBundle:Game',
                'property' => 'name',
            ))
            ->add('capacities', 'entity', array(
                'class' => 'AsgardPlannerBundle:Capacity',
                'property' => 'value',
                'multiple' => true,
            ))
            ->add('modes', 'entity', array(
                'class' => 'AsgardPlannerBundle:Mode',
                'property' => 'name',
                'multiple' => true,
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Asgard\Bundle\PlannerBundle\Entity\Location'
        ));
    }

    public function getName()
    {
        return 'asgard_bundle_plannerbundle_locationtype';
    }
}
