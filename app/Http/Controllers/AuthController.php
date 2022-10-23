<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return response()->json([
            'note' => 'Hello Francois'
        ]);
    }


    public function register(StoreUserRequest $request)
    {
        $request->validated($request->all());
        return response()->json([
            'note' => 'You are about to signup.'
        ]);
    }

    public function logout()
    {
        return response()->json([
            'note' => 'You have logged out.'
        ]);
    }
}
