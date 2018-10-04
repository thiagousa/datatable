<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $users = $this->user->all();

        return view("users.index", compact('users'));
    }

    public function data()
    {
        return Datatables::of(User::query())->make(true);
    }
}
