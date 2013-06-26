<?php

class Teacher extends Eloquent
{
    public static $table = 'teachers';
    public static $timestamps = true;
    public $teacher_id;
    public $classrooms;
    public $created_on;
    public $updated_on;

    function __construct($teacher_id = null )
    {

    }

    public function update_teacher_name(str $teacher_name)
    {

    }

    public function update_teacher_email(str $teacher_email)
    {

    }

    public function update_teacher_password(str $teacher_password)
    {

    }

    public function add_classroom(str $classroom_name)
    {

    }

    public function delete_classroom(int $classroom_id)
    {

    }

    public function get_classrooms(int $teacher_id)
    {

    }
}