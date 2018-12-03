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
        $formMapper->add('a_title', TextType::class,['label' => 'Заголовок (стаття)'])
            ->add('a_body',TextType::class,['label' => 'Тiло статтi'])
            ->add('file',FileType::class);
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('a_title','string',['label' => 'Заголовок (стаття)'])
            ->addIdentifier('a_body','string',['label' => 'Тiло статтi'])
            ->addIdentifier('file',FileType::class);

    }
}