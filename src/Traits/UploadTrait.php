<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 24.11.18
 * Time: 15:16
 */

namespace App\Traits;


use Symfony\Component\HttpFoundation\File\UploadedFile;

trait UploadTrait
{
    /**
     * Unmapped property to handle file uploads
     */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and target filename as params

        $this->getFile()->move(
            __DIR__.'/../../public/images',
            $this->getFile()->getClientOriginalName()
        );

        $this->setImagePath('/images/'.$this->getFile()->getClientOriginalName());

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
    }

    public function lifecycleFileUpload()
    {
        $this->upload();
    }
}