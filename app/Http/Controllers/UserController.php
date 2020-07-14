<?php

namespace App\Http\Controllers;

use App\UsersModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showAllUsers()
    {
//        return response()->json(get_declared_classes());
        return response()->json(UsersModel::all());
    }

    public function showOneUser($id)
    {
        return response()->json(UsersModel::find($id));
    }

    public function create(Request $request)
    {
        $user = UsersModel::create($request->all());

        return response()->json($user, 201);
    }

    public function update($id, Request $request)
    {
        $user = UsersModel::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete($id)
    {
        UserModel::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}