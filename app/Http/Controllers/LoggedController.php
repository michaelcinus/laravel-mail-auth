<?php

namespace App\Http\Controllers;

use App\mail;
use App\Mail\UserAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoggedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete($id) {

        $mail = mail::findOrFail($id);
        $mail -> delete();

        $user = auth::user();
        $action = 'DELETE';

        Mail::to('admin@boolean.it')->send(new UserAction($user, $mail, $action));

        return redirect() -> route('home');

    }

    public function edit($id) {

        $mail = mail::findOrFail($id);
        return view('edit', compact('mail'));
    }

    public function update(request $request, $id){

        $data = $request -> all();
        $mail = mail::findOrFail($id);

        $mail -> update($data);
    
        return redirect() -> route('show', $id);
    
    }

    public function create() {
        return view ('create');
    }

    public function store(request $request){

        $data = $request -> all();

        $mail = mail::create($data);
    
        return redirect() -> route('home');
    
    }

}
