<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\InjectServices;
use App\Http\Controllers\Traits\ResponseBag;
use App\Http\Services\ProjectService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, InjectServices, ResponseBag;
}
