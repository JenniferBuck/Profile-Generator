<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('member.index',compact('members'));
    }

    public function create(){
        $teams = Team::all();
        $categories = Category::all();
        return view('member.create',compact('teams','categories'));
    }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>[],
            'email'=>[],
            'phone'=>[],
            'github'=>[],
            'team_id'=>[],
            'category_id'=>[]
        ]);
        Member::create($data);
        return redirect()->route('members.index');
    }

    public function edit(Member $member){
        $teams = Team::all();
        $categories = Category::all();
        return view('member.edit',compact('member','teams','categories'));
    }

    public function update(Request $request,Member $member){
        $data=$request->validate([
            'name'=>[],
            'email'=>[],
            'phone'=>[],
            'github'=>[],
            'team_id'=>[],
            'category_id'=>[]
        ]);
        $member->update($data);
        return redirect()->route('members.index');

    }

    public function destroy(Member $member){
        $member->delete();
        return back();
    }




}
