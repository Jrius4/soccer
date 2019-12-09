<?php

namespace App\Http\Controllers\ApiControllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register (Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()],422);
        }

        $user = User::create($request->toArray());

        $token = $user->createToken('Laravel Passport Grant Client')->accessToken;
        $response = ['user'=>$user,'access_token'=>$token];
        return response($response,200);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email'=>'email|required',
            'password'=>'required',
        ]);
        $user = User::where('email',$loginData['email'])->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['user'=>$user,'token'=>$token];
                return response($response,200);
            }
            else
            {
                $response = 'Password mismatch';
                return response($response,422);
            }

        }
        else{
            $response = 'User does not exist';
            return response($response,422);
        }


    }

    public function logout (Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();

        $response = 'You have been successfully logged out!';
        return response($response,200);
    }

    public function auth()
    {
        return response()->json(
            [
                'errors' => [
                    'status' => 401,
                    'message' => 'Unauthenticated',
                ]
            ], 401
        );
    }

    public function showForgotPasswordToken(Request $request, $token = null)
    {
        return response()->json(
            ['token' => $token, 'email' => $request->email]
        );
    }

}
