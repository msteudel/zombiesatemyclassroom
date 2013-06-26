<?php

class Student extends Eloquent {
    public static $table = 'students';
    public static $timestamps = true;

    public function classrooms()
    {
        return $this->has_many_and_belongs_to( 'classroom', 'classroom_user');
    }
}