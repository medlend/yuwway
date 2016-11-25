<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/11/16
 * Time: 14:38
 */

namespace Yuwway\UserBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file)
    {
       //
//        $fileName = md5(uniqid()).'.'.$file->guessExtension(); anonyme.jpg
        $fileName = md5($this->msTimeStamp()).'.'.$file->guessExtension();

        $file->move($this->targetDir, $fileName);

        return $fileName;
    }
    function msTimeStamp() {
        return round(microtime(1) * 1000);
    }
}