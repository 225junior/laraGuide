<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class InscriptionController extends Controller
{



    public function form(){
		request()->validate([
			'email'=>['required','email','unique:Utilisateurs'],
			'password'=>['required','confirmed'],
			'password_confirmation'=>['required','min:4']
		]);

		Utilisateur::create([
			'email'=>request('email'),
			'password'=>bcrypt(request('password'))
		]);
		
		return redirect('login');
    }






    public function inscription(){

		return view('inscription');

	}
}
