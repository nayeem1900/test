<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\PrincipalMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrincipalMessageController extends Controller
{
    public function view(){
        $data['countMessage']=PrincipalMessage::count();
        $data['allData']=PrincipalMessage::all();


        return view ('backend.principal_message.view-message', $data);


    }

    public function add(){

        return view('backend.principal_message.add-message');

    }

    public function store(Request $request){

        $data =new PrincipalMessage();
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
        return redirect()->route('principals.view');
    }

    public function edit($id){

        $editData=PrincipalMessage::find($id);
        return view('backend.principal_message.edit-message',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =PrincipalMessage::find($id);
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
        return redirect()->route('principals.view');


    }
    public function delete($id){

        $message=PrincipalMessage::find($id);

        if(file_exists('public/backend/image/' .$message->image)AND !empty($message->image)){
            unlink('public/backend/image/' .$message->image);
        }
        $message->delete();
        return redirect()->route('principals.view')->with('success', 'Data Deleted successfully');
    }

}
