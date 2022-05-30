<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AuthorizationController extends Controller
{

    public function index()
    {
        Gate::allows('isAdmin') ? Response::allow() : abort(403);
        return "Authorization";



        // if (Gate::denies('isAdmin')) {
        //     dd('You are not admin!');
        // } else {
        //     dd('Admin Allowed');
        // }
    }

}
