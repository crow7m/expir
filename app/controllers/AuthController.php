<?php
Class AuthController extends BaseController
{
    public function getLogin()
    {
        return View::make('/Admin/login');

    }
public function postLogin()
{
    $rules = array('username' => 'required', 'password' => 'required');
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
    return Redirect::route('user-login')->withErrors($validator);
    }
    $auth = Auth::attempt(array(
        'email' => Input::get('username'),
        'password' => Input::get('password')
    ), false);
    if (!$auth) {
        return Redirect::route('user-login')->withErrors(array('Ошибка Авторизации'));
    }


    return Redirect::route('Admin/admin');

}





    public function out(){
        Auth::logout();
        return View::make('index');
    }


public function HiAdmin(){
    return  View::make('/Admin/admin')
        ->with('clients',Feature::paginate(10));


}}


