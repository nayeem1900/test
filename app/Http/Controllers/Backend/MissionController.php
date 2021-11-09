<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    public function view(){
        $data['countMission']=Mission::count();
        $data['allData']=Mission::all();


        return view ('backend.mission_about_school.view-mission', $data);


    }

    public function add(){

        return view('backend.mission_about_school.add-mission');

    }

    public function store(Request $request){

        $data =new Mission();
        $data->title=$request->title;

        $data->created_by=Auth::user()->id;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('missions.view');
    }

    public function edit($id){

        $editData=Mission::find($id);
        return view('backend.mission_about_school.edit-mission',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Mission::find($id);
        $data->title=$request->title;
        $data->updated_by=Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            @unlink(public_path('backend/image/' . $data->image));

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Information update success');
        return redirect()->route('missions.view');


    }
    public function delete($id){

        $mission=Mission::find($id);

        if(file_exists('public/backend/image/' .$mission->image)AND !empty($mission->image)){
            unlink('public/backend/image/' .$mission->image);
        }
        $mission->delete();
        return redirect()->route('missions.view')->with('success', 'Data Deleted successfully');
    }

}
