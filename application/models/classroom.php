<?php

class Classroom extends Eloquent {
    public static $table = 'classrooms';
    public static $timestamps = true;
    public $classroom_id = null;
    public $teacher;
    public $students;
    public $teams;
    public $game;
    public $created_on;
    public $updated_on;

    function __construct( $classroom_id = null )
    {
        parent::__construct();

        if( !empty( $classroom_id ) ) {
            $data = $this::find( $classroom_id );


        }
    }

    public function students()
    {
        return $this->has_many_and_belongs_to('User', 'classroom_user' );
    }

    public function update_classroom_name( $classroom_name )
    {
        if( !empty( $this->classroom_id ) && is_numeric( $this->classroom_id ) ) {
            $this::find( $this->classroom_id );
            $this->classroom_name = $classroom_name;
            $this->save();
        }
    }

    public function get_teacher()
    {

    }

    public function get_students()
    {

    }

    public function get_teams()
    {

    }

    public function get_game()
    {

    }

    public function add_student( $student )
    {

    }

    public function delete_student( $student )
    {

    }


}