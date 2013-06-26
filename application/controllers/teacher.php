<?php
class Teacher_controller extends Base_Controller
{

    function action_index()
    {
        $classroom = new Classroom();

        return View::make('header');
    }

    public function action_register()
    {
        $rules = array('teacher_name' => 'required',
            'email' => 'required');

        $input = Input::all();
        $errors = array();

        $validation = Validator::make($input, $rules);

        if (!empty($input) && $validation->fails()) {
            $errors = $validation->errors->all();
        } else if (!empty($input)) {
            // save
            if ($input['csrf_token'] == Session::get('csrf_token')) {
                $role = Role::where('role_name', '=', 'teacher')->first();

                $u = new User;
                $u->user_name = $input['teacher_name'];
                $u->email = $input['email'];
                $u->password = Hash::make($input['password']);

                $u->save();

                $u->roles()->attach($role->id);

                Auth::attempt(array('username' => $input['email'], 'password' => $input['password']));
            }

            // redirect to classroom page
            return Redirect::to('teacher/profile');
        }

        return View::make('teacher.register', array('errors' => $errors))->nest('header', 'header')->nest('footer', 'footer');
    }

    public function action_profile()
    {
        if (Auth::check()) {
            $classrooms = Classroom::where('teacher_id', '=', Auth::user()->id)->get();


            return View::make('teacher.profile', array('classrooms' => $classrooms))->nest('header', 'header')->nest('footer', 'footer');
        } else {
            return Redirect::to('authentication/login');
        }
    }

    public function action_add_test_users()
    {
        $students = array(array('user_name' => 'Bob',
            'email' => 'test@test.com',
            'password' => Hash::make('milesdavis') ),
            array('user_name' => 'Mary',
                'email' => 'test1@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Pete',
                'email' => 'test2@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Bill',
                'email' => 'test3@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'George',
                'email' => 'test3@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Charlie',
                'email' => 'test4@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Peggy',
                'email' => 'test5@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Sherry',
                'email' => 'test6@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Tyrone',
                'email' => 'test7@test.com',
                'password' => Hash::make('milesdavis')),
            array('user_name' => 'Bill',
                'email' => 'test8@test.com',
                'password' => Hash::make('milesdavis')));

        foreach( $students as $student ) {
            $role = Role::find( 2 );
            $c = Classroom::find( 3 );

            $student = User::create( $student );
            $student->roles()->attach( $role );
            $student->classrooms()->attach( $c );
            $student->save();
        }


    }
}