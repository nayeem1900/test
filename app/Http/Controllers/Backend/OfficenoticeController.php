<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Officenotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficenoticeController extends Controller
{
    public function view(){

        $data['allData']=Officenotice::all();


        return view ('backend.office_notice.view-office-notice', $data);


    }

    public function add(){

        return view('backend.office_notice.add-office-notice');

    }

    public function store(Request $request){

        $data =new Officenotice();
        $data->title=$request->title;
        $data->post_date = $request->post_date;
        $data->end_date = $request->end_date;
        $data->created_by=Auth::user()->id;
        if ($request->file('onotice_download')) {

            $file = $request->file('onotice_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/notice_images'), $filename);
            $data['onotice_download'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('office_notice.view');

    }
    public function edit($id){

        $editData=Officenotice::find($id);
        return view('backend.office_notice.edit-office-notice',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Officenotice::find($id);
        $data->title=$request->title;
        $data->post_date = $request->post_date;
        $data->end_date = $request->end_date;
        $data->created_by=Auth::user()->id;
        if ($request->file('onotice_download')) {

            $file = $request->file('onotice_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/notice_images'), $filename);
            $data['onotice_download'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('office_notice.view');
    }

    public function delete($id){

        $slider=Officenotice::find($id);

        if(file_exists('upload/notice_images/' .$slider->image)AND !empty($slider->image)){
            unlink('upload/notice_images' .$slider->image);
        }
        $slider->delete();
        return redirect()->route('office_notice.view')->with('success', 'Data Deleted successfully');
    }

}
