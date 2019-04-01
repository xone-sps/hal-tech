<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Blog;

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
    public function getBlog(){
        $blog = Blog::where('category', 'blog')->get();
        $event = Blog::where('category', 'activity')->get();
        $related = Blog::all();
        return response()->json(["data"=> $blog, "event"=> $event, 'related'=>$related]);
        
    }

    public function getData($id){
        $data = Blog::find($id);
        return response()->json(["data" => $data]);
    }
}
