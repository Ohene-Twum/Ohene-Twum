<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Authentication\UserAuthenticationController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [UserAuthenticationController::class, 'register']);
Route::post('login', [UserAuthenticationController::class, 'login']);


Route::get('email/verify/{id}/{hash}', [EmailVerifyController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
Route::post('email/verification-notification', [EmailVerifyController::class, 'sendVerificationEmail'])->middleware(['auth:api'])->name('verification.send');

// put all api protected routes here
Route::middleware('auth:api')->group(function () {
    Route::post('user-detail', [UserAuthenticationController::class, 'userDetail']);
    Route::post('logout', [UserAuthenticationController::class, 'logout']);
    Route::post('messages', [ChatController::class, 'message']);
    Route::get('send', [ChatController::class, 'sendNotification']);

});
