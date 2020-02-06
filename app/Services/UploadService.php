<?php
namespace App\Services;

use Exception;
use Illuminate\Contracts\Filesystem\Filesystem;

class UploadService
{
    protected $file;

    protected $folder_name;

    protected $file_name;

    public function __construct($file, $folderName, $fileName)
    {
        $this->file = $file;
        $this->folder_name = $folderName;
        $this->file_name = $fileName;
    }

    public function uploadFileToS3()
    {
        try {
            $s3 = \Storage::disk('s3');
            $file_path = "/" . $this->folder_name . "/". $this->file_name;

            return $s3->put($file_path, file_get_contents($this->file), 'public');
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }
}
