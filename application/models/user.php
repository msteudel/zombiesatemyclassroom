<?php

class User extends Eloquent {

    public static $table = 'users';
    public static $timestamps = true;

    public function roles()
    {
        return $this->has_one('Role');
    }

    public function classrooms()
    {
        return $this->has_many_and_belongs_to( 'Classroom', 'classroom_user' );
    }

    public function gamedata()
    {
        return $this->has_one( 'Gamedata');
    }
}