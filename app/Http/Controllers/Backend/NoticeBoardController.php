<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\NoticeBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeBoardController extends Controller
{
    public function view(){

        $data['allData']=NoticeBoard::all();


        return view ('backend.noticeboard.view-noticeboard', $data);


    }

    public function add(){

        return view('backend.aboutus.add-noticeboard');

    }

    public function store(Request $request){

        $data =new NoticeBoard();

        $data->long_title=$request->long_title;
        $data->created_by=Auth::user()->id;
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('noticeboards.view');
    }

    public function edit($id){

        $editData=NoticeBoard::find($id);
        return view('backend.noticeboard.edit-noticeboard',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =NoticeBoard::find($id);
        $data->long_title=$request->long_title;
        $data->updated_by=Auth::user()->id;

        $data->save();
        session()->flash('success',' Aboutus update success');
        return redirect()->route('noticeboards.view');


    }
    public function delete($id){

        $facility=NoticeBoard::find($id);

        if(file_exists('public/backend/image/' .$facility->image)AND !empty($facility->image)){
            unlink('public/backend/image/' .$facility->image);
        }
        $facility->delete();
        return redirect()->route('noticeboards.view')->with('success', 'Data Deleted successfully');
    }
}
