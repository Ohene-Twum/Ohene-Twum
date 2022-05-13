<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Authentication\UserAuthenticationController;
use App\Http\Controllers\Authentication\EmailVerifyController;
use App\Http\Controllers\Audit\AuditingController;
use App\Http\Controllers\General\NotesController;

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


// Verify email
Route::get('/email/verify/{id}/{hash}', [EmailVerifyController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

// Resend link to verify email
Route::post('/email/verify/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth:api', 'throttle:6,1'])->name('verification.send');

// put all api protected routes here
Route::middleware('auth:api')->group(function () {
    Route::post('user-detail', [UserAuthenticationController::class, 'userDetail']);
    Route::post('logout', [UserAuthenticationController::class, 'logout']);
    Route::post('messages', [ChatController::class, 'message']);
    Route::get('send', [ChatController::class, 'sendNotification']);
    Route::get('get_user_audits/{id}', [AuditingController::class, 'getUserAudits']);
    Route::get('get_all_audits', [AuditingController::class, 'getAllAudits']);
    Route::get('get_audit/{id}', [AuditingController::class, 'getAudit']);
    Route::resource('notes', NotesController::class);
});
