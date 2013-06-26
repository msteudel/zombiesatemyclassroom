<?php

class Gamedata extends Eloquent {
    public static $table = 'student_game_data';
    public static $timestamps = true;

    function users()
    {
        return $this->has_one( 'User' );
    }
}