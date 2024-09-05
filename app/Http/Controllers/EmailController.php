<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function create()
    {
        return view('about');
    }
    public function index()
    {
        $posts = DB::table('email')->get();
        return view('about', ['posts' => $posts]);
    }
    public function insert(Request $request)
    {
        DB::table('email')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        // Redirect with success message
        return redirect('/');
    }
}
