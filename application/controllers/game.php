<?php

class Game_Controller extends Base_Controller {

    public function action_run( $classroom_id )
    {
        $students = Classroom::find( $classroom_id )->students()->get();

        return View::make( 'game.game', array( 'students' => $students ) )->nest( 'footer', 'footer' )->nest( 'header', 'header' );
    }

    public function action_attendance( $classroom_id )
    {
        $students = Classroom::find( $classroom_id )->students()->get();

        return View::make( 'game.attendance', array( 'students' => $students ) )->nest( 'footer', 'footer' )->nest( 'header', 'header' );
    }

    public function action_test()
    {
        $users = User::where( 'role_id', '=', 2 )->get();

        foreach( $users as $user ) {
            $gd = Gamedata::create( array( 'bites' => 0 ) );
            $user->gamedata()->insert( $gd );
            $user->save();
        }
    }


}