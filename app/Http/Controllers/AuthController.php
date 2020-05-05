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

        // dd(Hash::check($request->password, Hash::make($request->password)));

        $authUser = Patient::where('mobile', $request->mobile)->first();

        if($authUser == null){
            $authUser = Doctor::where('mobile', $request->mobile)->first();

        }

        if($authUser != null){
            if(Hash::check($request->password, $authUser->password)){
                $authUser->device_id = $request->device_id;
                $authUser->save();
                // dd($authUser);
                return response()->json($authUser, 200);
            }       
        }
        else{
            return response()->json('Bad Credentials', 401);
        }
    }
}
