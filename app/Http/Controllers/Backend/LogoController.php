<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoController extends Controller
{
    public function view(){
        $data['countLogo']=Logo::count();
        $data['allData']=Logo::all();


        return view ('backend.logo.view-logo', $data);


    }

    public function add(){

        return view('backend.logo.add-logo');

    }

    public function store(Request $request){

        $data =new Logo();
        $data->created_by=Auth::user()->id;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('frontend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('logos.view');
    }

    public function edit($id){

        $editData=Logo::find($id);
        return view('backend.logo.edit-logo',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Logo::find($id);
        $data->updated_by=Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            @unlink(public_path('frontend/image/' . $data->image));

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('frontend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('logos.view');


    }
    public function delete($id){

        $logo=Logo::find($id);

        if(file_exists('public/frontend/image/' .$logo->image)AND !empty($logo->image)){
            unlink('public/frontend/image/' .$logo->image);
        }
        $logo->delete();
        return redirect()->route('logos.view')->with('success', 'Data Deleted successfully');
    }

}
