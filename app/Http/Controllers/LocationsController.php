<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\District;
use App\Models\Location;
use App\Models\Province;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ubicaciones = Location::all();
        return view('admin.ubicaciones.index',['ubicaciones' => $ubicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        $cantons = Canton::all();
        $districts = District::all();
        return view('admin.ubicaciones.create',['provinces' => $provinces, 'cantons' => $cantons, 'districts' => $districts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'province_id' => ['required', 'int'],
            'canton_id' => ['required', 'int'],
            'district_id' => ['required', 'int'],
        ]);

        $location = new Location();
        $location->name = $request->get('name');
        $location->province_id = $request->get('province_id');
        $location->canton_id = $request->get('canton_id');
        $location->district_id = $request->get('district_id');
        $location->save();

        return redirect()->route('ubicaciones.index')->with('status', 'La ubicación se creó con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::findOrFail($id);
        $provinces = Province::all();
        $cantons = Canton::all();
        $districts = District::all();

        return view('admin.ubicaciones.edit',['location' => $location, 'provinces' => $provinces, 'cantons' => $cantons, 'districts' => $districts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $location = Location::findOrFail($id);

        $location->name = $request->get('name');
        $location->province_id = $request->get('province_id');
        $location->canton_id = $request->get('canton_id');
        $location->district_id = $request->get('district_id');
        $location->update();

        return redirect()->route('ubicaciones.index')->with('status', 'La ubicación se actualizó con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getCantonsDistricts(Request $request)
    {
        if(!is_null($request->get('canton_id'))) {
            $districts  = District::where('canton_id', $request->get('canton_id'))->get();
            return json_encode(['districts' => $districts]);
        }

        if(!is_null($request->get('province_id'))){
            $cantons = Canton::where('province_id', $request->get('province_id'))->get();
            $districts = District::where('canton_id', $cantons->first()->id)->get();
            return json_encode(['cantons'=> $cantons, 'districts' => $districts]);
        }
    }
}
