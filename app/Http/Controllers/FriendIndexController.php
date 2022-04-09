<?php

namespace App\Http\Controllers;

class FriendIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke()
    {
        return view('friends.index');
    }
}
