<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Lib\Response\Response;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function check()
    {
    }
    public function register()
    {
    }
    public function otp()
    {
    }
    public function adminLogin(Request $request)
    {
        try {
            $validate = Validator::make(
                $request->all(),
                [
                    'email' => 'email|required',
                    'password' => 'min:6|max:32|required',
                ]
            );
            if ($validate->fails()) {
                return Response::validator_error(null, $validate->errors());
            }
            $admin = User::where('email', $request->email)->first();
            if ($admin) {
                if (!Hash::check($request->password, $admin->password)) {
                    return Response::error(null, 'auth.wrong_admin');
                } else {
                    return Response::success([
                        'user' => $admin,
                        'role' => $admin->role,
                        'access_token' => $admin->createToken('admin_api_token')->plainTextToken,
                        'token_type' => 'Bearer',
                    ]);
                }
            } else {
                return Response::error(null, 'auth.wrong_admin');
            }
        } catch (Exception $e) {
            return Response::exception_error($e->getMessage());
        }
    }
}
