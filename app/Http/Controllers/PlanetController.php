<?php

namespace App\Http\Controllers;

use App\Models\Planet as Planet;
use App\Http\Resources\Planet as PlanetResource;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::paginate(10);
        return PlanetResource::collection($planets);
    }

    public function store(Request $request)
    {
        $planet = new Planet;
        $planet->name = $request->input('name');
	    $planet->number = $request->input('number');
	    $planet->surface_area = $request->input('surface_area');
	    $planet->gravity = $request->input('gravity');
	    $planet->mass = $request->input('mass');
	    $planet->radius = $request->input('radius');
	    $planet->orbital_period = $request->input('orbital_period');
	    $planet->rotation_period = $request->input('rotation_period');
	    $planet->image = $request->input('image');
	    $planet->distance_from_sun = $request->input('distance_from_sun');
	    $planet->temperature = $request->input('temperature');
	    $planet->density = $request->input('density');
	    $planet->atm_pressure = $request->input('atm_pressure');

        if( $planet->save() ){
            return new PlanetResource( $planet );
        }
    }

    public function show($id)
    {
        $planet = Planet::findOrFail($id);
        return new PlanetResource($planet);
    }

    public function update(Request $request, $id)
    {
        $planet = Planet::findOrFail($request->id);
        $planet->name = $request->input('name');
        $planet->number = $request->input('number');
        $planet->surface_area = $request->input('surface_area');
        $planet->gravity = $request->input('gravity');
        $planet->mass = $request->input('mass');
        $planet->radius = $request->input('radius');
        $planet->orbital_period = $request->input('orbital_period');
        $planet->rotation_period = $request->input('rotation_period');
        $planet->image = $request->input('image');
        $planet->distance_from_sun = $request->input('distance_from_sun');
        $planet->temperature = $request->input('temperature');
        $planet->density = $request->input('density');
        $planet->atm_pressure = $request->input('atm_pressure');

        if( $planet->save() ){
            return new PlanetResource( $planet );
        }
    }

    public function destroy($id)
    {
        $planet = Planet::findOrFail( $id );
        if( $planet->delete() ){
            return new PlanetResource( $planet );
        }
    }
}
