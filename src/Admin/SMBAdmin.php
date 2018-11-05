<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 05.11.18
 * Time: 21:55
 */

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SMBAdmin  extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title1', TextType::class,['label' => 'Заголовок 1'])
            ->add('txt1',TextType::class,['label' => 'Текст 1(iсторiя)'])
            ->add('txt2',TextType::class,['label' => 'Текст 2(iсторiя)'])
            ->add('txt3',TextType::class,['label' => 'Текст 3(iсторiя)'])
            ->add('title2',TextType::class,['label' => 'Заголовок 2'])
            ->add('prdct1',TextType::class,['label' => 'Текст 1(продукцiя)'])
            ->add('prdct2',TextType::class,['label' => 'Текст 2(продукцiя)'])
            ->add('prdct3',TextType::class,['label' => 'Текст 3(продукцiя)']);
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title1','string',['label' => 'Заголовок 1'])
            ->addIdentifier('txt1','string',['label' => 'Текст 1(iсторiя)'])
            ->addIdentifier('txt2','string',['label' => 'Текст 2(iсторiя)'])
            ->addIdentifier('txt3','string',['label' => 'Текст 3(iсторiя)'])
            ->addIdentifier('title2','string',['label' => 'Заголовок 2'])
            ->addIdentifier('prdct1','string',['label' => 'Текст 1(продукцiя)'])
            ->addIdentifier('prdct2','string',['label' => 'Текст 2(продукцiя)'])
            ->addIdentifier('prdct3','string',['label' => 'Текст 3(продукцiя)']);

    }
}