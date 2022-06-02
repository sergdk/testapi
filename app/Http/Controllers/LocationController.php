<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    /**
     * @OA\GET(
     *      path="/locations",
     * @OA\RequestBody(
     *    required=false,
     *    description="get locations",
     * ),
     *
     * @OA\Response(
     *      response=200,
     *      description="Successfull",
     *      @OA\JsonContent(
     *          @OA\Property(property="status", type="string", example="true"),
     *          @OA\Property(
     *                  property="message",
     *                  type="array",
     *                  example={"locations": {{"title": "Jersey", "id": "4"}}},
     *                  @OA\Items(
     *                      @OA\Property(
     *                          property="locations",
     *                          type="string",
     *                          example="{{}}",
     *                      )
     *                  )
     *           )
     *      )
     * )
     *
     * )
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
