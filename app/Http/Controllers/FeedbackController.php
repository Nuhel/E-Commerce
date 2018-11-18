<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use\App\Feedback;
use Session;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::orderBy('id', 'asc')->paginate(500);
        return view('feedback.index')->withfeedback($feedback);
    }


   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


   $feedback = new Feedback;

        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->department = $request->department;
        $feedback->mail = $request->mail;
        $feedback->check = $request->check;
        
       

           $feedback->save();
           Session::flash('feedback', 'Thanks for your feedback!');

            return redirect()->route('product.index', $feedback->id);
          
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedback::find($id);
        return view('feedback.show')->withfeedback($feedback);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        
        return view('feedback.edit')->withfeedback($feedback);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(

                'name'         => 'required',
                'email'  => 'required',
                'subject'  => 'required',
                'department'  => 'required',
                'mail'  => 'required',
                'check'  => 'required'
               
                
                 ));
            


   $feedback = Feedback::find($id);

        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->subject = $request->input('subject');
        $feedback->department = $request->input('department');
        $feedback->mail = $request->input('mail');
        $feedback->check = $request->input('check');
       
       
           $feedback->save();

             return redirect()->route('feedback.show', $feedback->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $feedback = Feedback::find($id);
         
        $feedback->delete();
    }
}
