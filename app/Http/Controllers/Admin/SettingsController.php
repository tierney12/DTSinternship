<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AssetRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\AssetRepository;
use App\Repositories\AssetTypeRepository;

class SettingsController extends AppBaseController
{
    public function index()
    {

        return view('shared.settings.index');
    }
}
