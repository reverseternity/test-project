<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;
use Illuminate\Routing\Controller;
use App\Http\Requests\JokeStoreRequest;

class JokeController extends Controller
{
        /**
     * @OA\Post(
     *      path="/write",
     *      operationId="Write",
     *      tags={"TableOperations"}, 
     *      summary="Add recording to the table",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *          required={"joke_jenre","joke_coolness","joke"},
     *          @OA\Property(property="joke_genre", type="string", example="prison joke"),
     *          @OA\Property(property="joke_coolness", type="string", example="legendary"),
     *          @OA\Property(property="joke", type="string", example="There is two chairs..."),
     *          )
     *      ),   
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(property="id", type="integer", example="5"),
     *              @OA\Property(property="joke_genre", type="string", example="prison joke"),
     *              @OA\Property(property="joke_coolness", type="string", example="legendary"),
     *              @OA\Property(property="joke", type="string", example="There is two chairs..."),
     *              @OA\Property(property="created_at", type="string", example="2021-04-09T10:31:14.000000Z"),
     *              @OA\Property(property="updated_at", type="string", example="2021-04-09T10:46:26.000000Z")
     *              )
     *       ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not found"
     *      )
     *     )
     */
    public function store(JokeStoreRequest $request)
    {
        $item = new Joke();
        $item->fill($request->all());
        $item->save();

        return $item;
    }

        /**
     * @OA\Get(
     *      path="/showtable",
     *      operationId="ShowTable",
     *      tags={"TableOperations"}, 
     *      summary="Show all recordings in the table",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not found"
     *      )
     *     )
     */
    public function show() {
        $model = Joke::all();
        return response() -> json($model);
    }

}
