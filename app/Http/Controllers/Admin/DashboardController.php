<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends AdminController
{
    public function index()
    {
        $subdomain = $this->subdomain;
        $exampleUser = $this->exampleUser;
        $templateInfo = $this->templateInfo;

        return view('admin.dashboard.index', compact('subdomain', 'exampleUser', 'templateInfo'));
    }

    public function printImage(Request $request){
            $file = $request->file('imgUpload1')->store('main printer', 's3');
            return back();
    }

}
