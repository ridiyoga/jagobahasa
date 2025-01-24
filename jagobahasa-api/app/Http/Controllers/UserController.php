<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // use AuthorizesRequests, ValidatesRequests;
    public function listuser()
    {
        // $auth = Auth::guard('web')->user()->email;
        $user = User::get();
        return $user;
    }
    public function userpost(Request $request)
    {
        $userpost = User::create([
            'name'    => $request->name,
            'email'    => $request->email,
            'password'    => bcrypt($request->password),
            'role'    => $request->role,
            'create_at'    => date('Y-m-d H:i:s'),
            'status'    => $request->status
        ]);
        if ($userpost) {
            return array(
                'message' => "Data Berhasil Dimasukkan",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Dimasukkan",
                'success' => false
            );
        }
    }
    public function userupdate(Request $request)
    {
        $userpost = User::where('id', $request->id)->update([
            'name'    => $request->name,
            'email'    => $request->email,
            'password'    => bcrypt($request->password),
            'role'    => $request->role,
            'updated_at'    => date('Y-m-d H:i:s')
        ]);
        if ($userpost) {
            return array(
                'message' => "Data Berhasil Diupdate",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Diupdate",
                'success' => false
            );
        }
    }
    public function userdelete(Request $request)
    {
        $userpost = User::where('id', $request->id)->update([
            'status'    => $request->status,
            'updated_at'    => $request->updated_at
        ]);
        if ($userpost) {
            return array(
                'message' => "Data Berhasil Diupdate",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Diupdate",
                'success' => false
            );
        }
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user == NULL) {
            $response = [
                'status' => 400,
                'message' => 'Gagal, data kosong'
            ];
            return response()->json($response);
        } else {
            // dd($user);
            if (
                $user != '[]' &&
                Hash::check($request->password, $user->password)
            ) {
                Session::put('name', $user->name);
                Session::put('email', $user->email);
                Session::put('role', $user->role);
                // Session::put('login', TRUE);
                // dd('b');
                // $token = $user->createToken()->plainTextToken;
                $response = [
                    'status' => 200,
                    'user' => $user,
                    'message' => 'Success',
                ];
                return response()->json($response);
            } else {
                // dd('a');
                $response = [
                    'status' => 400,
                    'message' => 'Gagal, Username atau Password Salah'
                ];
                return response()->json($response);
            }
        }
    }
}
