<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

class NewsLetterController extends Controller
{
	public function __invoke(Newsletter $newsletter)
	{
		request()->validate(['sub-email' => 'email|required']);

		try
		{
			$newsletter->subscribe(request('sub-email'));
		}
		catch(\Exception $e)
		{
			return redirect('/')->with('fail', 'Yo! mail not right, yo!');
		}

		return redirect('/')->with('success', 'Yo! subscribed to newsletter, yo!');
	}
}
