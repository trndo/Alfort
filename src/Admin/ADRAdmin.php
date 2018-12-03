<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 04.11.18
 * Time: 13:28
 */

namespace App\Admin;

use App\Traits\UploadAdminTrait;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ADRAdmin extends AbstractAdmin
{
    use UploadAdminTrait;

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title1', TextType::class,['label' => 'Заголовок 1'])
            ->add('txt1',TextType::class,['label' => 'Текст 1(iсторiя)'])
            ->add('txt2',TextType::class,['label' => 'Текст 2(iсторiя)'])
            ->add('txt3',TextType::class,['label' => 'Текст 3(iсторiя)'])
            ->add('title2',TextType::class,['label' => 'Заголовок 2'])
            ->add('prdct1',TextType::class,['label' => 'Текст 1(продукцiя)'])
            ->add('prdct2',TextType::class,['label' => 'Текст 2(продукцiя)'])
            ->add('prdct3',TextType::class,['label' => 'Текст 3(продукцiя)'])
            ->add('file',FileType::class,['required'=>false]);

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title1',TextType::class,['label' => 'Заголовок 1'])
            ->addIdentifier('txt1',TextType::class,['label' => 'Текст 1(iсторiя)'])
            ->addIdentifier('txt2',TextType::class,['label' => 'Текст 2(iсторiя)'])
            ->addIdentifier('txt3',TextType::class,['label' => 'Текст 3(iсторiя)'])
            ->addIdentifier('title2',TextType::class,['label' => 'Заголовок 2'])
            ->addIdentifier('prdct1',TextType::class,['label' => 'Текст 1(продукцiя)'])
            ->addIdentifier('prdct2',TextType::class,['label' => 'Текст 2(продукцiя)'])
            ->addIdentifier('prdct3',TextType::class,['label' => 'Текст 3(продукцiя)'])
            ->addIdentifier('image_path',FileType::class);

    }

}