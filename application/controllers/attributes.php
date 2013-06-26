<?php

class Attributes_controller extends Base_Controller
{

    public function action_index()
    {
        if (Auth::check()) {
            $attributes = Attribute::where( 'teacher_id', '=', Auth::user()->id )->get();

            return View::make('attributes.attributes', array('attributes' => $attributes))->nest('header', 'header')->nest('footer', 'footer');
        } else {

        }
    }

    public function action_create()
    {
        if( Auth::check() ) {
            $rules = array( 'attribute_name' => 'required' );
            $errors = array();
            $input = Input::all();
            $validation = Validator::make( $input, $rules );

            if( !empty($input ) && $validation->fails() ) {
                $errors = $validation->errors->all();
            }
            else if( !empty( $input ) ) {
                // save
                if( $input['csrf_token'] == Session::get('csrf_token' ) ) {

                    $a = new Attribute;
                    $a->attribute_name = $input['attribute_name'];
                    $a->attribute_points = $input['attribute_points'];
                    $a->teacher_id = Auth::user()->id;
                    $a->save();
                }

                // redirect to classroom page
                return Redirect::to('attributes');
            }

            return View::make('attributes.create', array( 'errors' => $errors ) )->nest('header', 'header')->nest('footer', 'footer');
        }
        else {

        }
    }

}