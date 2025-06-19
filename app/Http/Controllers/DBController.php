<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('users')
            ->leftJoin('user_roles', 'users.id', '=', 'user_roles.user_id')
            ->leftJoin('roles', 'user_roles.role_id', '=', 'roles.id')
            ->select(
                'users.id',
                'users.first_name',
                'users.last_name',
                'users.user_name',
                'users.password',
                'roles.role_name',
                'roles.description'
            )
            ->get();

        return view('welcome', ['users' => $users]);
    }
}
