<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Message;
// to use message model(database) include above

class MessagesController extends Controller
{
    //this echoes the name in the input
    public function submit(Request $request){
        // return $request->input('fullname');  for testing

        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            
        ]);
        // return 'SUCCESS'; 
        //  create new message
        $message = new Message;
        $message->fullname = $request->input('fullname');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // save message
        $message->save();
        
        // incase of redirect
        return redirect('/contact')->with('success' , 'Message Sent');
    }
}