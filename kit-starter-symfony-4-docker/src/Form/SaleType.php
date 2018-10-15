<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Validator\Constraint\HasAvailableSeats;
use App\Entity\Sale;

class SaleType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', TextType::class)
            ->add('numTickets', ChoiceType::class, [
                'label' => 'Number of tickets',
                'mapped' => false,
                'choices' => [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                ],
                 'constraints' => new HasAvailableSeats(['movie' => $options['movie']]),
            ])
            ->add('save', SubmitType::class, ['label' => 'Book tickets'])
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults(array(
                'data_class' => Sale::class,
                'movie' => null,
            ));
    }
}