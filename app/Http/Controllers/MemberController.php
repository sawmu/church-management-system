<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Image;
use App\Models\Members;

class MemberController extends Controller
{
    public function index(){
        $members = Members::all();
        return view('admin.member.index', compact('members'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        Menbers::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->email,
            'address' => $request->address,
            'address' => $request->age,
            'join_date' => $request->join_date,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Member added successfully');
      
}
}