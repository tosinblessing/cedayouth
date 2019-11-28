<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Nefeed;

class NewsController extends Controller
{
    //
    //this echoes the name in the input
    public function submit(Request $request){
        // return $request->input('title');  for testing

        $this->validate($request, [
            'title' => 'required',
            'discription' => 'required',
            
        ]);
        // return 'SUCCESS'; 
        //  create new message   using the newfeed class   
        $notification = new Nefeed;
        $notification->title = $request->input('title');
        $notification->text = $request->input('text');
        $notification->discription = $request->input('discription');

        // save message
        $notification->save();
        
        // incase of redirect
        return redirect('/news')->with('success' , 'Message Sent');
    }

    // pulling data from database
    public function getNews(){
        $notification = Nefeed::all();

        return view('newsallfeed')->with('newsallfeed' , $notification);

    }

}