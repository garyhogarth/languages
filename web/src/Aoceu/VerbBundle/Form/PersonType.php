<?php

namespace Aoceu\VerbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pronoun')
            ->add('standard')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aoceu\VerbBundle\Entity\Person'
        ));
    }

    public function getName()
    {
        return 'aoceu_verbbundle_persontype';
    }
}
