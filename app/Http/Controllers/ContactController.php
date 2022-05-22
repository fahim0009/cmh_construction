<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\ContactMail;
use Illuminate\Http\Request;
use App\Mail\HomeContact;

class ContactController extends Controller
{

    public function contactMail()
    {
        $contactmail = ContactMail::all();
        return view('admin.contact.contactmail',compact('contactmail'));
    }

    public function ContactmailEdit($id)
    {
        $mail = ContactMail::where('id','=' , $id)->first();
        return view('admin.contact.editcontactmail', compact('mail'));
    }

    public function mailUpdate(Request $request, $id)
    {
        $user = ContactMail::findOrFail($id);
        $user->name = $request->name;
        if($user->save()){
            $message ="Contact mail Update Successfully";
        return redirect()->route('admin.contactmail')->with(['status'=> 303,'message'=> $message]);
        }
        return back()->with(['status'=> 303,'message'=>'Server Error!!']);
    }




    public function visitorContact(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $visitor_phone = $request->phone;
        $visitor_message = $request->message;

        $emailValidation = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,10}$/";

        if(empty($fname)){
            $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Please fill first name field, thank you!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();
        }

        if(empty($email)){
            $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Please fill email field, thank you!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();
        }

        if(!preg_match($emailValidation,$email)){

            $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Your mail ".$email." is not valid mail. Please wirite a valid mail, thank you!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();

        }

        if(empty($visitor_phone)){
            $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Please fill phone field, thank you!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();
        }

        if(empty($visitor_message)){
            $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Please write your query in message field, thank you!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return response()->json(['status'=> 303,'message'=>$message]);
            exit();
        }


        // new code start
        $contactmail = ContactMail::where('id', 1)->first()->name;

        $array['subject'] = "Falcon Constraction contact message";
        $array['fname'] = $fname;
        $array['lname'] = $lname;
        $array['email'] = $email;
        $array['phone'] = $visitor_phone;
        $array['message'] = $visitor_message;
        $email = $email;


        Mail::to($email)
        ->cc($contactmail)
        ->send(new HomeContact($array));


        $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mail sent successfully.</b></div>";
        return response()->json(['status'=> 300,'message'=>$message]);


            }
}
