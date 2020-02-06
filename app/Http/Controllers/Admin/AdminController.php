<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\AppBaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends AppBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $subdomain = 'admin';
    protected $exampleUser = [
        'firstname' => 'Kevin',
        'surname'   => 'McLuckie',
        'email'     => 'kevin@dts-demo.com',
        'avatar'    => '/images/users/kevin.jpg',
    ];

    protected $templateInfo = [
        'pageTitle' => 'DTS Admin System'
    ];
}
