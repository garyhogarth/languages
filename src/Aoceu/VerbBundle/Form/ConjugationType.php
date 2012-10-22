<?php

namespace Aoceu\VerbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConjugationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('verb')
            ->add('tense')
            ->add('person')
            ->add('conjugation')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aoceu\VerbBundle\Entity\Conjugation'
        ));
    }

    public function getName()
    {
        return 'aoceu_verbbundle_conjugationtype';
    }
}
