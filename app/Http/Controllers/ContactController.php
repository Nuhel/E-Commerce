<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use\App\Contact;
use Session;

class ContactController extends Controller
{
       

   public $flagcontact;

    public function __construct()
    {
         //$this->middleware('auth:admins');

       $flagcontact=__class__;
   
       session()->put('flagcontact',$flagcontact);

    }

    public function message(){


        $message = Contact::orderBy('id', 'desc')->paginate(500);
        
         $message2 = Contact::where('seen','=', '')->get();
         $number2= count($message2);

        
    
        return view('contact.message')->with('message', $message)->with('message2', $message2);
    
        
    }

    public function contactclear(){
          return redirect()->route('contact.create');
    }

    public function messageseen($id){

     

        $contact = Contact::find($id);

          $contact->seen = 'seen';
       
           $contact->save();

        return view('contact.messageseen')->withcontact($contact);
    }



    public function index()
    {
        $contact = Contact::orderBy('id', 'asc')->paginate(500);
        return view('contact.index')->withcontact($contact);
    }

   
    public function create()
    {
        return view('contact.create');

    }

    

    public function store(Request $request)
    {
 $this->validate($request, array(
  'name'         => 'required',
  'email'             => 'required|email',
  'message'       => 'required',

));

   $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        
       

           $contact->save();
           Session::flash('contact', 'Thanks for your message!');

         $message2 = Contact::where('seen','=', '')->get();
         $number2= count($message2);

          session()->put('message', $number2);

            return redirect()->route('contact.create', $contact->id);
          
    }
   

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('')->withcontact($contact);
    }

    

    public function edit($id)
    {
        $contact = Contact::find($id);
        
        return view('contact.edit')->withcontact($contact);
    }


    public function update(Request $request, $id)
    {


   $contact = Contact::find($id);

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
       
           $contact->save();

             return redirect()->route('contact.show', $contact->id);
    }

   
    public function destroy($id)
    {
         $contact = Contact::find($id);
         
        $contact->delete();
    }
}
