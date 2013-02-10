<?php

namespace Asgard\Bundle\PlannerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapacityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('value')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Asgard\Bundle\PlannerBundle\Entity\Capacity'
        ));
    }

    public function getName()
    {
        return 'asgard_bundle_plannerbundle_capacitytype';
    }
}
