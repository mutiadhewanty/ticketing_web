<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $req)
    {
        //validate
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:customers',
            'password' => 'required|string|min:6'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //create new pengunjung in pengunjung table
        $customer = Customer::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        $token = $customer->createToken('Personal Access Token')->plainTextToken;
        $response = ['customer' => $customer, 'token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $req)
    {
        //validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required|string',
        ];
        $req->validate($rules);
        //find user email
        $customer = Customer::where('email', $req->email)->first();
        //if user email found and password is correct
        if ($customer && Hash::check($req->password, $customer->password)) {
            $token = $customer->createToken('Personal Access Token')->plainTextToken;
            $response = ['customer' => $customer, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ["message" => 'Incorrect email or password'];
        return response()->json($response, 400);
    }
}
