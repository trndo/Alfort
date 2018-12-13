<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 05.11.18
 * Time: 22:03
 */

namespace App\Admin;

use App\Traits\UploadAdminTrait;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UsefulAdmin extends AbstractAdmin
{
    use UploadAdminTrait;

    protected function configureFormFields(FormMapper $formMapper)
    {
        $image = $this->getSubject();
        $fullPath = $image->getImagePath();
        $fileFieldOptions = ['required' => false];
        $fileFieldOptions['help'] = '<img style="width: 250px;" src="'.$fullPath.'" class="admin-preview" />';
        $formMapper->add('a_title', TextType::class,['label' => 'Заголовок (стаття)','required'=>false])
            ->add('a_body',TextType::class,['label' => 'Тiло статтi','required'=>false])
            ->add('file',FileType::class,$fileFieldOptions,['label' => 'Файл/Зображення','required'=>false]);
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('a_title','string',['label' => 'Заголовок (стаття)'])
            ->addIdentifier('a_body','string',['label' => 'Тiло статтi'])
            ->addIdentifier('imagePath',FileType::class,['label' => 'Файл/Зображення'])
            ->addIdentifier('_action', null, [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]
            ]);

    }
}