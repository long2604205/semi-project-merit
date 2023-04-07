<?php

namespace App\Form;

use App\Entity\Actor;
use Doctrine\ORM\Query\Expr\Select;
use Fiber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ActorFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('birthName')
            ->add('nickName')
            ->add('gender', ChoiceType::class, [
                'choices'  => [
                    // 'Select' => null,
                    'Male' => 1,
                    'Female' => 2,
                ],
            ])
            ->add('birth', BirthdayType::class)
            ->add('born')
            ->add('country')
            ->add('height')
            ->add('image', FileType::class)
            ->add('biography', TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actor::class,
        ]);
    }
}
