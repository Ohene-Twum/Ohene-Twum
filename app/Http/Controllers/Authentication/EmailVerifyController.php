<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use App\Models\User;

class EmailVerifyController extends Controller
{
    public function __construct(Request $request) {
        // $this->middleware('signed')->only('verify');
        if (!$request->hasValidSignature()) {
            return response()->json([
              'status' => 'Unauthorized',
              'message' => 'Email Verfifcation Link has expired, visit dashboard to resend Verfifcation link'
            ], 403);
        }
        $this->middleware('throttle:6,1')->only('verify');
      }

      public function sendVerificationEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return [
                'message' => 'Already Verified'
            ];
        }

        $request->user()->sendEmailVerificationNotification();

        return ['status' => 'verification-link-sent'];
    }

    public function verify(Request $request)
    {
        $user = User::findOrFail($request->id);

        if ($request->route('id') != $user->getKey()) {
            throw new AuthorizationException;
        }

        if ($user->hasVerifiedEmail()) {
            return [
                'message' => 'Email already verified'
            ];
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return [
            'message'=>'Email has been verified'
        ];
    }
}
