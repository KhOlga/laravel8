<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $user = $request->user();

		$token = $request->session()->token();
		$csrf_token = csrf_token();

        return view('profile.dashboard', [
            'user' => $user,
			'token' => $token,
			'csrf_token' => $csrf_token
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Request $request)
    {
        $user = $request->user();

        return view('profile.user.edit', [
            'user' => $user
        ]);
    }

    public function update()
    {
        //
    }
}
