<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        
        return view('main.home');
    }
    public function postContact(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        $save = new Contact;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->message = $request->message;
        $save->save();
        $data = [];
        $data['name'] = $save->name;
        $data['email'] = $save->email;
        $data['messagebody'] = $save->message;
        Mail::send('main.mail', $data, function ($message) use ($data) {
            $message->from('info@mekong.digital');
            $message->to('phoud63@gmail.com');
            $message->subject('Message from Mekong Digital Works\'s customers');
        });
        return response()->json(["data"=> "Successfully"]);
    }
}
