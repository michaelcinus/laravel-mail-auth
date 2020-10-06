<?php

namespace App\Http\Controllers;

use App\mail;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete($id) {

        $mail = mail::findOrFail($id);
        $mail -> delete();
        return redirect() -> route('home');

     }
}
