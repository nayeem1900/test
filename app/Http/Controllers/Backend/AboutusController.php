<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutusController extends Controller
{
    public function view(){

        $data['allData']=Aboutus::all();


        return view ('backend.aboutus.view-aboutus', $data);


    }

    public function add(){

        return view('backend.aboutus.add-aboutus');

    }

    public function store(Request $request){

        $data =new Aboutus();
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->created_by=Auth::user()->id;
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('about_us.view');
    }

    public function edit($id){

        $editData=Aboutus::find($id);
        return view('backend.aboutus.edit-aboutus',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Aboutus::find($id);
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->updated_by=Auth::user()->id;

        $data->save();
        session()->flash('success',' Aboutus update success');
        return redirect()->route('about_us.view');


    }
    public function delete($id){

        $facility=Aboutus::find($id);

        if(file_exists('public/backend/image/' .$facility->image)AND !empty($facility->image)){
            unlink('public/backend/image/' .$facility->image);
        }
        $facility->delete();
        return redirect()->route('about_us.view')->with('success', 'Data Deleted successfully');
    }

}
