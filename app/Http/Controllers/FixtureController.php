<?php

namespace App\Http\Controllers;

use App\Fixture;
use App\Http\Resources\FixtureCollection;
use App\Http\Resources\FixtureResource;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fixtures = Fixture::orderBy('date','asc')->get()->groupBy('date');
        return FixtureResource::collection($fixtures);
        // return FixtureCollection::collection(Fixture::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'home_team'=>'required',
            'away_team'=>'required',
            'datetime'=>'required',
            'venue'=>'nullable',
            'broadcaster'=>'nullable'
        );

        $request->validate($rules);
        $fixture = new Fixture();
        if($request['home_team'] == $request['away_team'])
        {
            return response()->json(['error'=>'teams have to be different'],422);
        }
        if($fixture->get()->where('home_team',$request['home_team'])->where('away_team',$request['away_team'])->count() > 0)
        {
            return response()->json(['error'=>'fixture already set'],422);

        }
        $fixture->create($request->all());
        return new FixtureResource($fixture->get()->last());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function show(Fixture $fixture)
    {
        return new FixtureResource($fixture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function edit(Fixture $fixture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fixture $fixture)
    {
        $rules = array(
            'home_team'=>'required',
            'away_team'=>'required',
            'datetime'=>'required',
            'venue'=>'nullable',
            'broadcaster'=>'nullable'

        );

        $request->validate($rules);
        // $fixture = new Fixture();
        if($request['home_team'] == $request['away_team'])
        {
            return response()->json(['errors'=>'teams have to be different'],402);
        }
        $fixture->update($request->all());
        return new FixtureResource($fixture);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fixture $fixture)
    {
        $fixture->delete();
        return response()->json(['message'=>'deleted successfully']);
    }
}
