<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamResource;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(3);
        return TeamResource::collection($teams);
    }

    public function getAllTeams($id)
    {
        return new TeamResource(Team::find($id));
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
        $rules=array(
            'name'=>'required|min:6|unique:teams',
            'logo'=>'required|image|max:1024',
            'slogan'=>'nullable|min:4|unique:teams',
            'biography'=>'nullable',
            'location'=>'nullable',
        );
        $request->validate($rules);
        $team = new Team();
        $team->name = $request['name'];
        $team->slogan = $request['slogan'];
        $team->biography = $request['biography'];
        $team->location = $request['location'];
        $team->slug = str_slug($request['name'],'_');
        if($request->file(['logo']) !=null)
        {
            $extension = $request->file(['logo'])->getClientOriginalExtension();
            $filename = str_slug($request['name'],'_').'_logo'. '.' . $extension;

            $request->file(['logo'])->move(public_path('/images/logos'),$filename);
            $team->logo = $filename;
            $team->url_logo = public_path('/images/logos').'/'.$team->logo;



        }
        else
        {
            return response()->json(['errors'=>'team registration failed']);

        }
        if($team->save())
        {
            return new TeamResource($team);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return new TeamResource($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $rules=array(
            'name'=>'required',
            'logo'=>'nullable|image|max:1024',
            'slogan'=>'nullable|min:4',
            'biography'=>'nullable',
            'location'=>'nullable',
        );
        $request->validate($rules);

        $team->update(array(
            'name'=>$request['name'],
            'slogan'=>$request['slogan'],
            'biography'=>$request['biography'],
            'location'=>$request['location'],
        ));

        if($request->file(['logo']) !=null)
        {
            $this->removeFile($team->logo);
            $extension2 = $request->file('logo')->getClientOriginalExtension();
            $filename2 = str_slug($team->name,'_').'_logo'. '.' . $extension2;

            $request->file('logo')->move(public_path('/images/logos'),$filename2);
            $team->update(array(
                'logo'=>$filename2
            ));

            $team->update(array(
                'url_logo'=>public_path('/images/logos').'/'.$filename2
            ));




        }

        return new TeamResource($team);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $this->removeFile($team->logo);
        $team->delete($team);
        return response()->json(['message'=>'team deleted successfully']);
    }

    private function removeFile($file)
    {
        if ( ! empty($file) )
        {
            $filePath     = public_path('/images/logos'). '/' . $file;


            if ( file_exists($filePath) ) unlink($filePath);
        }
    }
}
