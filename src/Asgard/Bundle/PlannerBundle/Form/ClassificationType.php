<?php

namespace Asgard\Bundle\PlannerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('game', 'entity', array(
                'class' => 'AsgardPlannerBundle:Game',
                'property' => 'name',
            ))
            ->add('races', 'entity', array(
                'class' => 'AsgardPlannerBundle:Race',
                'property' => 'name',
                'multiple' => true
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Asgard\Bundle\PlannerBundle\Entity\Classification'
        ));
    }

    public function getName()
    {
        return 'asgard_bundle_plannerbundle_classificationtype';
    }
}
