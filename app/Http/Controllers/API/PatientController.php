<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required| min:1',
            'mobile' => 'required| min:11',
            'password' => 'required| min:8',
            'device_id' => 'required',
        ]);

        $newPatient = new Patient();
        $newPatient->name = $request->name;
        $newPatient->mobile = $request->mobile;
        $newPatient->password = Hash::make($request->password);
        $newPatient->device_id = $request->device_id;
        $newPatient->save();

        return response()->json($newPatient);
    }


    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
