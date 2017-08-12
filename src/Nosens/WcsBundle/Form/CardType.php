<?php

namespace Nosens\WcsBundle\Form;




use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

class CardType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if($options ['data']->getId() == null)
        {
            $builder
                ->add('picture', PictureType::class,array(
                   'label' => false,
                    'required' => true
                ));
        }

        else {
            $builder
                ->add('picture', PictureType::class, array(
                   'label' => false,
                    'required' => false
                ));
        }

       $builder
           ->add('title', TextareaType::class)
           ->add('content',TextareaType::class)
           ->add('date',DateType::class)
           ->add('link',TextareaType::class)
           ->add('submit',SubmitType::class, array('label'=>'Valider'));
    }


        /**
         * {@inheritdoc}
         */
        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'Nosens\WcsBundle\Entity\Card'
            ));
        }

        /**
         * {@inheritdoc}
         */
        public function getBlockPrefix()
        {
            return 'nosenswcsbundle_card';
        }

}