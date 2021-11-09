<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmissionController extends Controller
{
    public function view(){

        $data['allData']=Admission::all();


        return view ('backend.admission.view-admission', $data);


    }

    public function add(){

        return view('backend.admission.add-admission');

    }

    public function store(Request $request){

        $data =new Admission();
        $data->class=$request->class;
        $data->admission_fee = $request->admission_fee;
        $data->session_fee = $request->session_fee;
        $data->salary = $request->salary;
        $data->half_yearly_fee = $request->half_yearly_fee;
        $data->middle_fee = $request->middle_fee;
        $data->created_by=Auth::user()->id;
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('admissions.view');
    }

    public function edit($id){

        $editData=Admission::find($id);
        return view('backend.admission.edit-admission',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Admission::find($id);
        $data->class=$request->class;
        $data->admission_fee = $request->admission_fee;
        $data->session_fee = $request->session_fee;
        $data->salary = $request->salary;
        $data->half_yearly_fee = $request->half_yearly_fee;
        $data->middle_fee = $request->middle_fee;
        $data->created_by=Auth::user()->id;

        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('admissions.view');
    }
    public function delete($id){

        $slider=Admission::find($id);
        $slider->delete();
        return redirect()->route('admissions.view')->with('success', 'Data Deleted successfully');
    }

}
