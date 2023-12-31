<?php
namespace App\Http\Controllers;
use Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    
    public function getForm()
    {
        return view('contact');
    }
    public function postForm(ContactRequest $Request)
    {
        return view('email_contact')-> with($Request->all());
    }
}