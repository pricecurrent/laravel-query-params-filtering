<?php

namespace App\Http\Controllers;

use App\User;
use App\UsersFilter;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request, UsersFilter $filters)
    {
        if ($request->expectsJson()) {
            $users = User::with('info')->filter($filters)->get();

            return response()->json($users->toArray());
        }

        return view('users.index', compact('users'));
    }
}
