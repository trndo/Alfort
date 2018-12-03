<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 24.11.18
 * Time: 16:05
 */

namespace App\Traits;


trait UploadAdminTrait
{
    public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image)
    {
        if ($image->getFile()) {
            $image->upload();
        }
    }
}