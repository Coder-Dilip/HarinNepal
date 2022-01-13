<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;

class Subscribers extends Controller
{

    function add_subscribers(Request $req)
    {
        $member = new Newsletter;

        $previous = DB::table("newsletters")->where('name', $req->input("add_user"))->value('name');

        $username = $req->input("add_user");

        if ($username == $previous) {
            return view('dilip', ['message' => "You have already subscribed!", true]);
        }

        $member->name = $req->input("add_user");
        $member->date = date("Y-m-d");
        $member->save();
        return view('dilip', ['message' => "Thank you subscribing!"]);
    }
}
