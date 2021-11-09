<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Gallarey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GallareyController extends Controller
{
    public function view(){

        $data['allData']=Gallarey::all();


        return view ('backend.gallarey.view-gallarey', $data);


    }

    public function add(){

        return view('backend.gallarey.add-gallarey');

    }

    public function store(Request $request){

        $data =new Gallarey();
        $data->created_by=Auth::user()->id;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('gallareys.view');
    }

    public function edit($id){

        $editData=Gallarey::find($id);
        return view('backend.gallarey.edit-gallarey',compact('editData'));
    }


    public function update(Request $request,$id){

        $data =Gallarey::find($id);

        $data->updated_by=Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            @unlink(public_path('backend/image/' . $data->image));

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Gallarey Image update success');
        return redirect()->route('gallareys.view');


    }

    public function delete($id){

        $slider=Gallarey::find($id);

        if(file_exists('public/backend/image/' .$slider->image)AND !empty($slider->image)){
            unlink('public/backend/image/' .$slider->image);
        }
        $slider->delete();
        return redirect()->route('gallareys.view')->with('success', 'Data Deleted successfully');
    }


}
