<?php

class Authentication_Controller extends Base_Controller {

    public function action_login()
    {
        $credentials['username'] = Input::get( 'username' );
        $credentials['password'] = Input::get( 'password' );

        if( Auth::attempt($credentials) ) {
            return Redirect::to('teacher/profile');
        }
        else {
            return View::make( 'authentication/login' )->nest( 'header', 'header' )->nest( 'footer', 'footer');
        }
    }

    public function action_logout()
    {
        Auth::logout();

        Redirect::to('/');
    }
}