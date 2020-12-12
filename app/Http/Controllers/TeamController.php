<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request){
        $data=$request->validate([
            'name'=>['required']
        ]);
        Team::create($data);
        return back();
    }

    public function show(Team $team){
        return view('team.show',compact('team'));
    }

    public function edit(Team $team){
        return view('team.edit',compact('team'));
    }

    public function update(Request $request,Team $team){
        $data=$request->validate([
            'name'=>[]
        ]);
        $team->update($data);
        return redirect()->route('home');
    }

    public function destroy(Team $team){
       $team->delete();
       return back();
    }
}
