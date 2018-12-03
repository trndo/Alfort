<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 05.11.18
 * Time: 21:55
 */

namespace App\Admin;

use App\Traits\UploadAdminTrait;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SMBAdmin  extends AbstractAdmin
{
    use UploadAdminTrait;

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', TextType::class,['label' => 'Заголовок','required'=>false])
            ->add('txt',TextType::class,['label' => 'Текст (iсторiя)','required'=>false])
            ->add('file',FileType::class,['label' => 'Файл/Зображення','required'=>false]);
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title','string',['label' => 'Заголовок'])
            ->addIdentifier('txt','string',['label' => 'Текст (iсторiя)'])
            ->addIdentifier('file',FileType::class,['label' => 'Файл/Зображення']);

    }
}