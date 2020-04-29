<?php

namespace App\Http\Controllers\API;

use App\Doctortype;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorTypesController extends Controller
{

    public function index()
    {
        $doctorTypes = Doctortype::withCount('doctors')->get();
        return response()->json($doctorTypes);
    }


//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'name' => 'required| min:1',
//        ]);
//
//        $newDoctorType = new Doctortype();
//        $newDoctorType->name = $request->name;
//
////        if ($request->monogram) {
////            // $filename = time(). '.' . explode('/', explode(':', substr($request->monogram, 0, strpos($request->monogram, ':')))[1])[0];
////            $filename = $newPLayer->code . '_' . time(). '.' . explode(';', explode('/', $request->monogram)[1])[0];
////            $location   = public_path('/images/country/player/'. $filename);
////            Image::make($request->monogram)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); })->save($location);
////            $newPLayer->monogram = $filename;
////        }
//
//        $newDoctorType->save();
//
//        return response()->json($newDoctorType);
//    }


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
