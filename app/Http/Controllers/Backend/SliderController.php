<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{

    public function view(){

        $data['allData']=Slider::all();


        return view ('backend.slider.view-slider', $data);


    }

    public function add(){

        return view('backend.slider.add-slider');

    }

    public function store(Request $request){

        $data =new Slider();
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->created_by=Auth::user()->id;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('sliders.view');
    }

    public function edit($id){

        $editData=Slider::find($id);
        return view('backend.slider.edit-slider',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Slider::find($id);
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->updated_by=Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            @unlink(public_path('backend/image/' . $data->image));

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' slider update success');
        return redirect()->route('sliders.view');


    }
    public function delete($id){

        $slider=Slider::find($id);

        if(file_exists('public/backend/image/' .$slider->image)AND !empty($slider->image)){
            unlink('public/backend/image/' .$slider->image);
        }
        $slider->delete();
        return redirect()->route('sliders.view')->with('success', 'Data Deleted successfully');
    }


}
