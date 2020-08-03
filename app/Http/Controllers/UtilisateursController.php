<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\Message;


class UtilisateursController extends Controller
{
	public function liste(){
		
	$utilisateurs = Utilisateur::all();

	return view('utilisateurs',compact('utilisateurs'));
	}








	public function voir(){

		$email = request('email');

		$utilisateur = Utilisateur::where('email',$email)->firstOrFail();

		return view('utilisateur',compact('utilisateur'));
	}
}
