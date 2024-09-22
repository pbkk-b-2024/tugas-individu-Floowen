<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class FPController extends Controller
{
    
    public function listusers(Request $request){

        if($request->has('search')){
            $userdata = User::where('name','like','%'.$request->search.'%')->paginate(6);
        }else{
            $userdata = User::paginate(6);
        }
        return view('users',compact('userdata'));
    }

    public function addusers(){

        return view('addusers');
    }

    public function insertUser(Request $request){
        User::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        return view('welcome');
    }

    public function datauser($id){
        $data = User::find($id);
        return view('userdata',compact('data'));
    }

    public function updatedata(Request $request,$id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('listusers')->with('success','Data Updated Successfully');
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('listusers')->with('success','Data Deleted Successfully');
    }
}
