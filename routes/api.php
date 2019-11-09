<?php

use App\Chapter;
use App\Post;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::prefix('v1')->group(function () {
    Route::apiResource('posts','PostController');   
    Route::get('posts/{post}/chapter', 'PostController@chapter');

    Route::get('/chapters/{chapter}/posts', function(Chapter $chapter) {
        $chapters = $chapter->posts;

        return $chapters;
});
});


Route::fallback(function(){
    return response("Page not Found!",404);
});