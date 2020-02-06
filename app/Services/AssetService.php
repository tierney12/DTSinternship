<?php

namespace App\Services;

use App\Services\UploadService;

class AssetService
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function createAsset()
    {
        //
    }
}
