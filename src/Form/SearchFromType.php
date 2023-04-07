<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchFromType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('searchActor', TextType::class, [
            'required' => true,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => null,
        ]);
    }
}

// {{ form_start(form,{
//     'attr':{
//         'class':'header__form',
//     }
//     }) }}
//     {{ form_widget(form.searchActor,{
//         'attr':{
//             'class':'header__form-input',
//             'type': 'text',
//             'placeholder':"I'm looking for..."
//         }
//     }) }}
//     <button class="header__form-btn" type="Submit">
//         <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg>
//     </button>
// {{ form_end(form) }}