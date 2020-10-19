<?php namespace Gofer\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use ValidationException;

class ContactForm extends ComponentBase
{
     
    public function componentDetails(){
        return[
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form'
        ]; 
    }

    public function onSend(){

        $data = post();

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'content' => 'required',
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            
            throw new ValidationException($validator);

        } else {

            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'subject' => Input::get('subject'), 'content' => Input::get('content')   ];

            Mail::send('gofer.contact::mail.message', $vars, function($message) {

            $message->to('norbzqwerty@gmail.com', 'Gofer');
            $message->subject('New Message from Contact Form');

            });
        }
    }

}