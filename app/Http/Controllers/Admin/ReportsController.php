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

class ReportsController extends AppBaseController
{
    public function index()
    {
//        $subdomain = $this->subdomain;
//        $exampleUser = $this->exampleUser;
//        $templateInfo = $this->templateInfo;

        return view('admin.reports.index');
//        , compact('subdomain', 'exampleUser', 'templateInfo'));
    }
}
