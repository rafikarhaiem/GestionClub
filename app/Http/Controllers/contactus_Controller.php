<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ContactUS;
use Validator;
use Mail;


class contactus_Controller extends Controller
{
  public function submit(Request $request){
    $rules=[
      'Name' => 'required',
      'Email' => 'required|email',
      'Subject' => 'required',
      'Message' => 'required'
    ];

    $validator = Validator::make($request->all(),$rules );

      if ($validator->fails()) {
          return redirect('/#contact')
                      ->withErrors($validator)
                      ->withInput();
      }

      //Create New Message
      $contactus= new ContactUS;
      $contactus->Name          = $request->input('Name'        );
      $contactus->Email         = $request->input('Email'       );
      $contactus->Subject       = $request->input('Subject'     );
      $contactus->Message       = $request->input('Message'     );
      $contactus->save();

    /*  Mail::send('email',
        array(
          'name'=>$request->get('Name'),
          'email'=>$request->get('Email'),
          'user_message'=>$request->get('Message'),
          'subject'=>$request->get('Subject')
        ),function($message){
          $message->from('csc.ensatanger@gmail.com');
          $message->to('csc.ensatanger@gmail.com','Admin');
        }
      );*/

      return redirect('/#contact')->withInput()->with('success','Message a été envoyé avec succes');
  }
}
