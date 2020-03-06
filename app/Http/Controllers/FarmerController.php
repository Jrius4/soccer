<?php

namespace App\Http\Controllers;

use App\Farmer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $farmers = Farmer::orderBy('name')->paginate(2);
        $farmers = Farmer::orderBy('name')->get();
        // return response()->json(['data'=>$farmers],200);
        return view('manage-farmers.index',compact('farmers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Farmer $farmer)
    {
        return view('manage-farmers.create',compact('farmer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
                    'name'=>'required|min:4',
                    'location'=>'required',
                    'farm_size'=>'required',
                    'produce'=>'required',
                    'phone'=>'required|min:10',
                ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->messages()]);

        }

        Farmer::create($request->all());

        // return response()->json(['message'=>'Created successful']);
        return redirect()->route("farmers.index")->with([['message'=>'Created successful']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        return response()->json(['data'=>$farmer],201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
        return view('manage-farmers.edit',compact('farmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmer $farmer)
    {
        // $rules = [
        //     'name'=>'required|min:4',
        //     'location'=>'required',
        //     'farm_size'=>'required',
        //     'produce'=>'required',
        //     'phone'=>'required|min:10',
        // ];

        // $validator = Validator::make($request->all(),$rules);
        // if($validator->fails())
        // {
        //     return response()->json(['errors'=>$validator->messages()]);

        // }

        $farmer->update($request->all());

        return response()->json(['message'=>'Updated successful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer $farmer)
    {
        $farmer->delete();
        return response()->json(['message'=>'deleted successful']);

    }
}
