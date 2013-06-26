<?php

class Role extends Eloquent {
    public static $table = 'roles';
    public static $timestamps = true;

    public function users()
    {
        return $this->has_many_and_belongs_to('User');
    }
}