<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        // $data = [
        //     'username' => 'manager_tiga',
        //     'nama' => 'manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];

        // UserModel::create($data);

        //update
        // $data = [
        //     'nama' => 'John Doe',
        // ];
        // UserModel::where('username', 'johndoe')->update($data);


    //    $user = UserModel::all();
    //      return view('user', ['data' => $user]);

    // $user = UserModel::find(1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::where('level_id', 1)->first();
    // return view('user', ['data' => $user]);

    // $user = UserModel::firstWhere('level_id', 1);
    // return view('user', ['data' => $user]);

    // $user = UserModel::findOrfail(1);
    // return view('user', ['data' => $user]);


    }
}
