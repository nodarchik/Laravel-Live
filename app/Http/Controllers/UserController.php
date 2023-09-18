<?php

namespace App\Http\Controllers;

use app\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('wallets.currency')->get()->map(function ($user){
            return [
                'name'=>$user->name,
                'email'=>$user->email,
                'phone'=>$user->phone,
                'photo'=>$user->photo,
                'wallets'=>$user->wallets->map(function ($wallet){
                    return [
                        'currency'=>$wallet->currency->name,
                        'amount'=>$wallet->amount
                    ];
                })
            ];
        });
        return response()->json($users);
    }
}
