<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function getInfos()
    {
		return view('infos');
	}

	public function postInfos(Request $request)
	{
		return 'Le nom est ' . $request->input('nom') . '<br/>Le pswd est ' . $request->input('mdp') . '<br/>Le mail est ' . $request->input('email');
	}

}