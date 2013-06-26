<?php

class Classroom_controller extends Base_Controller {

    function action_create()
    {
        $rules = array( 'classroom_name' => 'required' );
        $errors = array();
        $input = Input::all();
        $validation = Validator::make( $input, $rules );

        if( !empty($input ) && $validation->fails() ) {
            $errors = $validation->errors->all();
        }
        else if( !empty( $input ) ) {
            // save
            if( $input['csrf_token'] == Session::get('csrf_token' ) ) {

                $c = new Classroom;
                $c->classroom_name = $input['classroom_name'];
                $c->teacher_id = Auth::user()->id;
                $c->save();
            }

            // redirect to classroom page
            return Redirect::to('teacher/profile');
        }

        $footer = array();
        $footer['javascript'][] = '/js/students.js';
        return View::make( 'classroom/create', array( 'errors' => $errors ) )->nest( 'header', 'header' )->nest( 'footer', 'footer', $footer);
    }

    public function action_delete( $classroom_id )
    {
        $user_id = Auth::user()->id;

        $classroom = Classroom::find($classroom_id );

        if( $user_id == $classroom->teacher_id  ) {

            // @TODO: figure out why eloquent delete didnt work
            DB::table( 'classrooms' )->delete( $classroom_id );
        }

        return Redirect::to( 'teacher/profile' );
    }

    public function action_add_students( $classroom_id )
    {
        $footer = array();
        $footer['javascript'][] = '/js/students.js';
        return View::make( 'classroom/add_students' )->nest( 'header', 'header' )->nest( 'footer', 'footer', $footer );
    }

    public function action_students( $classroom_id )
    {
        $students = Classroom::find( $classroom_id )->students()->get();

        return View::make( 'classroom/students', array( 'students' => $students ) )->nest( 'header', 'header' )->nest( 'footer', 'footer' );
    }
}