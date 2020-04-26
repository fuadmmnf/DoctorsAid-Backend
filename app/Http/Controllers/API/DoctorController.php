<?php

namespace App\Http\Controllers\API;

use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        //
    }

    public function getSingleAvailableDoctorByType($doctortype_id)
    {
        $availableDoctorsByType = Doctor::where('doctortype_id', $doctortype_id)
            ->where('status', 0)
            ->inRandomOrder()
            ->first();

        return response()->json($availableDoctorsByType);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required| min:1',
            'mobile' => 'required| min:11',
            'password' => 'required| min:8',
            'bmdc_number' => 'required',
            'device_id' => 'required',
        ]);

        $newDoctor = new Doctor();
        $newDoctor->name = $request->name;
        $newDoctor->mobile = $request->mobile;
        $newDoctor->bmdc_number = $request->bmdc_number;
        $newDoctor->device_id = $request->device_id;
        $newDoctor->password = Hash::make($request->password);
        $newDoctor->save();

        return response()->json($newDoctor);
    }

    public function show($id)
    {
        //
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
