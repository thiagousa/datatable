<?php

namespace App\Http\Controllers;

use App\User;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('users.index');
    }

    public function usersDataTables()
    {
        $users = User::select(['id', 'name', 'email']);

        return DataTables::of($users)->make();
    }
}
