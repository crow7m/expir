<?php
class FeedBackController extends BaseController{
    public function feedback(){

        $user = array(
            'email' => Input::get('email')
        );
        $data = array(
            'email' => Input::get('email'),
            'message' => Input::get('message'),
            'name' => Input::get('name')
        );

        Mail::send('email', $data, function($message) use ($user) {
                $message->to('crow7m@gmail.com')
                ->replyTo($user['email'])
                ->subject('Contact form request');
        });

        return Redirect::back('/');
    }

}