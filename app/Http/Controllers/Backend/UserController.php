<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view(){

        $data['allData']=User::all();


        return view ('backend.user.view-user', $data);


    }

    public function add(){

        return view('backend.user.add-user');

    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email',


        ]);


        $data =new User();

        $data->usertype=$request->usertype;

        $data->name= $request->name;

        $data->email= $request->email;

        $data->password=bcrypt($request->password);
        $data->save();
        session()->flash('success',' Data update success');
        return redirect()->route('users.view');
    }

    public function edit($id){

        $editData=User::find($id);
        return view('backend.user.edit-user',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =User::find($id);

        $data->name= $request->name;
        $data->email= $request->email;
        $data->usertype= $request->usertype;
        $data->save();
        session()->flash('success',' Data update success');
        return redirect()->route('users.view');


    }
    public function delete($id){

        $user=User::find($id);

        if(file_exists('public/upload/user_images/' .$user->image)AND !empty($user->image)){
            unlink('public/upload/user_images/' .$user->image);
        }
        $user->delete();
        return redirect()->route('users.view')->with('success', 'Data Deleted successfully');
    }
}
