<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use App\comments;

class CommentsControlle extends Controller
{
    public function mail(Request $request){

       $comments = new comments;
 
       $comments->name = $request->input('name');
       $comments->email = $request->input('email');
       $comments->comments = $request->input('comment');
       $comments->save();
       return redirect('/'); 
    }

    public function show(){
    
        $msg=comments::orderBy('updated_at', 'desc')->get();
        return view('adminfunctions.complains')->with('msg', $msg);
    }

}
