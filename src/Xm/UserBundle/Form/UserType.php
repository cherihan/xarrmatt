<?php

namespace Xm\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text' ,array('label' => 'Pseudonyme') )
            ->add('passwords','password',array('label' => 'Mot de passe') )
            ->add('prenom')
            ->add('nom')
            ->add('email','email')
            ->add('telephone','number',array('max_length' => 9 ) )
            ->add('address')
            ->add('ville', 'entity', array(
                    'class' => 'XmCovoiturageBundle:Ville',
                    'property' => 'nom_ville',
                    'multiple' => true)
                 )
             ->add('submit', 'submit', array('label' => 'Créer votre compte',
                                             'attr'  => array('class' => 'btn-primary')
                                          ) 
                 );
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Xm\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'xm_userbundle_user';
    }
}
