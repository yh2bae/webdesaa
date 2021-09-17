<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function login($username,$password)
    {
        $query = DB::table('users')
            ->select('*')
            ->where(array(  'users.username'	=> $username,
                            'users.password'    => Hash::check($password, $password)))
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }
}
