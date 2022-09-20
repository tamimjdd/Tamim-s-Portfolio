<?php

namespace App\Http\Controllers;

use App\Mail\MailSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class mailController extends Controller
{
    public function sendMail(Request $request){
        $details=Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        if($details->fails()){
            return response()->json([
                'status' =>400,
                'errors' =>$details->messages(),
            ]);
        }
        else{
            $details2=[
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ];
            Mail::to("deviltamim88@gmail.com")->send(new MailSent($details2));
            return response()->json([
                'status'=>200,
                'message'=>'Mail Sent',
            ]);
        }
    }
}
