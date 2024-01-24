<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Privilege;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\Api;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);

        $nama = $validated['full_name'];
        $phone = $validated['phone_number'];
        $email = $validated['email'];
        $password = bcrypt($validated['password']);


        $user = new User();
        $user->full_name = $nama;
        $user->email = $email;
        $user->phone_number = $phone;
        $user->password = $password;
        $user->role = "user";
        $user->save();

        $inputan = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $dataUser = ([
            'user_id' => $user->id
        ]);

        Privilege::create($dataUser);
        $data = User::where('id', $user->id)->get();

        if (Auth::attempt($inputan)) {
            // $request->session()->regenerate();
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'failed', $data);
        }
    }

    public function login(Request $request)
    {
        $inputan = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);


        $data = User::select('id', 'full_name', 'email', 'phone_number', 'password', 'role')->where('email', $inputan['email'])->get();

        if (Auth::attempt($inputan)) {
            // $request->session()->regenerate();
            return ApiFormatter::createApi(200, 'success', $data);
        }
        return ApiFormatter::createApi(400, 'failed', $data);
    }

    public function getDetail($id)
    {
        $data = User::select('id', 'full_name', 'email', 'phone_number', 'password', 'role')->where('id', $id)->first();

        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'failed', $data);
        }
    }
}
