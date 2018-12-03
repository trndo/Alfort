<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 04.11.18
 * Time: 12:58
 */

namespace App\Admin;

use App\Traits\UploadAdminTrait;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HomePageAdmin extends AbstractAdmin
{
    use UploadAdminTrait;
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', TextType::class,['label' => 'Заголовок','required'=>false])
                   ->add('about_us',TextType::class,['label' => 'Текст(про нас)','required'=>false])
                    ->add('file',FileType::class,['label' => 'Файл/Зображення','required'=>false]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title','string',['label' => 'Заголовок'])
            ->addIdentifier('about_us','string',['label' => 'Текст(про нас)'])
            ->addIdentifier('file',FileType::class,['label' => 'Файл/Зображення']);
    }
}