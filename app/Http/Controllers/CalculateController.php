<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{

    /**
     * @OA\POST(
     *      path="/calculate",
     * @OA\RequestBody(
     *    required=true,
     *    request="calculate",
     *    description="Data for calculate",
     *    @OA\JsonContent(
     *       @OA\Property(property="location_id", type="string", example="4"),
     *       @OA\Property(property="volume", type="integer", example="7"),
     *       @OA\Property(property="days", type="integer", example="21"),
     *       @OA\Property(property="temperature", type="integer", example="+5"),
     *    ),
     * ),
     *
     * @OA\Response(
     *      response=200,
     *      description="Calculate completed",
     *      @OA\JsonContent(
     *          @OA\Property(property="status", type="string", example="true"),
     *          @OA\Property(property="response", type="array", example={
     *              "cost": 300,
     *              "required volume": 17,
     *              "availability": true
     *          },
     *              @OA\Items(
     *                  @OA\Property(
     *                      property="field",
     *                      type="string",
     *                      example={{}},
     *                  )
     *               )
     *     )
     *      )
     * )
     * )
     */

    public function calculate(){

    }
}
