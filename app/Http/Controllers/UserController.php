<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use File;

class UserController extends Controller
{
    public function user()
    {
        $user = User::get();
        return view('admin.user', compact('user'));
    }

    public function user_create()
    {
        return view('admin.user_create');
    }

    public function user_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $user = new User();
        
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.user');
    }

    public function user_delete(Request $request, $id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('admin.user');
    }
}
