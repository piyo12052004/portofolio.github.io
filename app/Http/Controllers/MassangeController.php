<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactformMail;

class MassangeController extends Controller
{
    public function massang (Request $request){
        $request->validate([
            'email' => 'required|email',
            'nama' => 'required|min:3',
            'pesan' => 'required',
        ]);
        // send email to admin
        Mail::to('piyoaswandi@gmail.com')->send(new ContactformMail($request));

        return back()->with('success', 'Pesan Anda telah berhasil dikirim!');

    }
}
