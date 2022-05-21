<?php

namespace App\Http\Controllers;


use Mail;
use App\Models\ContactMail;
use Illuminate\Http\Request;

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

        if(empty($lname)){
            $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Please fill last name field, thank you!
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
            Please fill subject field, thank you!
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
        
        $mail['subject'] = "Falcon Constraction contact message";
        $mail['fname'] = $fname;
        $mail['lname'] = $lname;
        $mail['email'] = $email;
        $mail['phone'] = $visitor_phone;
        $mail['message'] = $visitor_message;
        $email_to = "kazimuhammadullah@gmail.com";
        $a = Mail::send('emails.contact', compact('mail'), function($message)use($mail,$email_to) {
            $message->from('kmushakil64@gmail.com', 'Falcon Construction');
            $message->to($email_to)
            ->subject($mail["subject"]);
            });


            
            if ($a)
                {
                    $message ="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Thanks for your message! We will get back to you soon :)
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    return response()->json(['status'=> 303,'message'=>$message]);
                    exit();

                } else {

                    $message ="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Problem with sending message !
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    return response()->json(['status'=> 303,'message'=>$message]);
                    exit();

                }
        
        // end

            }
}
