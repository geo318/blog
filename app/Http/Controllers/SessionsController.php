<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
	public function store()
	{
		$params = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (!auth()->attempt($params))
		{
			throw ValidationException::withMessages(['email' => 'Check your rmail and password again!']);
		}

		session()->regenerate();
		return redirect('/')->with('success', 'Welcome back!');
	}

	public function create()
	{
		return view('sessions.create', [
			'inputs' => (new User())->getLoginInputs(),
		]);
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/')->with('success', 'Bye bye!');
	}
}
