<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 04.11.18
 * Time: 13:28
 */

namespace App\Admin;

use App\Traits\UploadAdminTrait;
use Doctrine\ORM\EntityManager;
use phpDocumentor\Reflection\Types\String_;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelListType;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ADRAdmin extends AbstractAdmin
{
    use UploadAdminTrait;

    public function getSub()
    {
        return $this->getSubject();
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $image = $this->getSubject();
        $fullPath = $image->getImagePath();
        $fileFieldOptions = ['required' => false];
        $fileFieldOptions['help'] = '<img style="width: 250px;" src="'.$fullPath.'" class="admin-preview" />';
        $formMapper->add('title', TextType::class,['label' => 'Заголовок', 'required'=>false])
            ->add('txt',TextType::class,['label' => 'Текст (iсторiя)', 'required'=>false])
            ->add('file', FileType::class, $fileFieldOptions,['label' => 'Файл/Зображення','required'=>false]);


    }
    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->addIdentifier('title',TextType::class,['label' => 'Заголовок'])
            ->addIdentifier('txt',TextType::class,['label' => 'Текст (iсторiя)'])
            ->addIdentifier('imagePath',TextType::class,['label' => 'Файл/Зображення'])
            ->addIdentifier('_action', null, [
                                'actions' => [
                                    'edit' => [],
                                    'delete' => [],
                                ]
            ]);
    }

}