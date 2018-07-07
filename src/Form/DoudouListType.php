<?php
namespace App\Form;

use src\Entity\DoudouList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DoudouListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('required' => true))
            ->add('body', TextareaType::class, array('required' => true))
            ->add('active_flag', NumberType::class, array('required' => true))
            ->add('niveau', NumberType::class, array('required' => true))
            ->add('date_created', DateType::class, array('required' => true))
            ->add('save', SubmitType::class)
        ;
    }
}