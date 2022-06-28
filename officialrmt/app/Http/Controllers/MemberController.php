<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function show()
    {
        return view('members', [
            "title" => "Member RMT",
            "members" => Member::all()
        ]);
    }
}
