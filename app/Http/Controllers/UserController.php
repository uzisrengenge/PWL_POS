<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $data = [
            'username' => 'manager_dua',
            'nama' => 'manager 2',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ];

        UserModel::create($data);

        //update
        $data = [
            'nama' => 'John Doe',
        ];
        UserModel::where('username', 'johndoe')->update($data);


       $user = UserModel::all();
         return view('user', ['data' => $user]);
    }
}
