<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{
    public function view(){

        $data['allData']=Facility::all();


        return view ('backend.facility.view-facility', $data);


    }

    public function add(){

        return view('backend.facility.add-facility');

    }

    public function store(Request $request){

        $data =new Facility();
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->created_by=Auth::user()->id;
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('facilities.view');
    }

    public function edit($id){

        $editData=Facility::find($id);
        return view('backend.facility.edit-facility',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Facility::find($id);
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->updated_by=Auth::user()->id;

        $data->save();
        session()->flash('success',' facility update success');
        return redirect()->route('facilities.view');


    }
    public function delete($id){

        $facility=Facility::find($id);

        if(file_exists('public/backend/image/' .$facility->image)AND !empty($facility->image)){
            unlink('public/backend/image/' .$facility->image);
        }
        $facility->delete();
        return redirect()->route('facilities.view')->with('success', 'Data Deleted successfully');
    }

}
