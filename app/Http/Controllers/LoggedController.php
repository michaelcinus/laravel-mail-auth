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
