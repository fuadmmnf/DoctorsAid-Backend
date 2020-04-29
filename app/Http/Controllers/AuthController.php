<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticateUser(Request $request){
        $this->validate($request, [
            'mobile' => 'required| min:11',
            'password' => 'required| min:8',
            'device_id' => 'required',
        ]);

        $user = Patient::where('mobile', $request->mobile)
            ->where('password', Hash::make($request->password))
            ->first();

        if(!$user){
            $user = Doctor::where('mobile', $request->mobile)
                ->where('password', Hash::make($request->password))
                ->first();
        }

        if($user){
            $user->device_id = $request->deviceId;
            $user->save();
            return response()->json($user, 200);
        }
        else{
            return response()->json('Bad Credentials', 401);
        }
    }
}
