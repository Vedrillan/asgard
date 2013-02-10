<?php

namespace Utils\Bundle\FormBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DependentEntityType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'depends_field' => null,
            'depends_class' => null,
            'ajax' => false,
        ));
        
        $resolver->setAllowedValues(array('ajax' => array(true, false)));
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if ($options['depends_field'] !== null && $options['depends_class'] !== null) {
            // TODO
        }
        $view->set('depends', $options['depends_field']);
        $view->set('ajax', $options['ajax']);
    }
    
    public function getName()
    {
        return 'dependent_entity';
    }
    
    public function getParent()
    {
        return 'entity';
    }
}