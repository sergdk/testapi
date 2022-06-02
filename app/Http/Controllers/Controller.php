<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="Fridge Master API Documentation",
 *     version="0.1",
 *      @OA\Contact(
 *          email="spetrenkom11@gmail.com"
 *      ),
 * ),
 *  @OA\Server(
 *      description="main site",
 *      url="/api/v1"
 *  ),
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
