<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\GET(
     *      path="/bookings",
     * @OA\RequestBody(
     *    required=true,
     *    request="bookings",
     *    description="get user bookings",
     *    @OA\JsonContent(
     *       @OA\Property(property="user_id", type="string", example="3"),
     *    ),
     * ),
     *
     *
     * @OA\Response(
     *      response=200,
     *      description="Successfull",
     *      @OA\JsonContent(
     *          @OA\Property(property="status", type="string", example="true"),
     *          @OA\Property(
     *                  property="bookings",
     *                  type="array",
     *                  example={{
     *                      "id": 3,
     *                      "status": "pending",
     *                      "volume": 17,
     *                      "temperature": "+6",
     *                      "days": 6,
     *                      "location": {
     *                          "title": "Jersey",
     *                          "id": 3
     *                      },
     *                      "warehouse code": "567fgh&*(FGH",
     *
     *
     *     }},
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
     * @param \Illuminate\Http\Requests\StoreBookignRequest $request
     * @return \Illuminate\Http\Response
     */


    /**
     * @OA\POST(
     *      path="/booking/create",
     * @OA\RequestBody(
     *    required=true,
     *    request="booking",
     *    description="Data for booking",
     *    @OA\JsonContent(
     *       @OA\Property(property="user_id", type="string", example="3"),
     *       @OA\Property(property="location_id", type="string", example="4"),
     *       @OA\Property(property="volume", type="integer", example="7"),
     *       @OA\Property(property="days", type="integer", example="21"),
     *       @OA\Property(property="temperature", type="integer", example="+5"),
     *    ),
     * ),
     *
     * @OA\Response(
     *      response=200,
     *      description="Booking successfull created",
     *      @OA\JsonContent(
     *          @OA\Property(property="status", type="string", example="true"),
     *          @OA\Property(property="message", type="string", example="Booking successfull")
     *      )
     * ),
     *
     * @OA\Response(
     *      response=422,
     *      description="Wrong sended data",
     *      @OA\JsonContent(
     *          type="object",
     *          @OA\Property(property="status", type="string", example="false"),
     *          @OA\Property(property="message", type="string", example="validation error"),
     *          @OA\Property(
     *              property="errors",
     *              type="array",
     *              example={"field": {"The __ field is required"}},
     *              @OA\Items(
     *                  @OA\Property(
     *                      property="field",
     *                      type="string",
     *                      example={{}},
     *                  )
     *               )
     *          ),
     *      )
     * ),
     *
     * @OA\Response(
     *      response=409,
     *      description="Booking not completed",
     *      @OA\JsonContent(
     *          type="object",
     *          @OA\Property(
     *              property="status",
     *              type="string",
     *              example="false"
     *          ),
     *          @OA\Property(
     *              property="message",
     *              type="string",
     *              example="Booking not completed"
     *          ),
     *      )
     * )
     * )
     */

    public function store(StoreBookingRequest $request)
    {
        $response = [];

        $newBooking = Booking::create([
            'user_id' => $request->user_id,
            'volume' => $request->volume,
            'temperature' => $request->temperature,
            'days' => $request->days,
            'location_id' => $request->location_id,
            'status' => 'pending',
        ]);


        if($newBooking){
            $response['status'] = true;
            $response['message'] = 'Booking successfull';
            $status = 200;
        }
        else{
            $response['status'] = false;
            $response['message'] = 'Booking not completed';
            $status = 409;
        }
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
