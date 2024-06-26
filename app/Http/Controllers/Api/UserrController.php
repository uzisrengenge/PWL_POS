<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserrController extends Controller
{
    public function index() {
        return UserModel::all();
    }

    public function store(Request $request) {
        $user = UserModel::create($request->all());
        return response()->json($user, 201);
    }

    public function show($user) {
        return UserModel::find($user);
    }

    public function update(Request $request, $user) {
        $user->update($request->all());
        return UserModel::find($user);
    }

    public function destroyy($user) {
        $user = UserModel::findOrFail($user); // Retrieve the user by ID
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus!'
        ]);
    }
}
