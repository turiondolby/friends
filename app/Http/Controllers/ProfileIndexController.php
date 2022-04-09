<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileIndexController extends Controller
{
    public function __invoke(User $user)
    {
        return view('profile.index', compact('user'));
    }
}
