<?php

namespace App\Http\Controllers;

use App\mail;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {

        $mails = mail::all();

        return view('home', compact('mails'));

    }

    public function show($id) {

        $mail = mail::findOrFail($id);
        return view('show', compact('mail'));

    }
}
