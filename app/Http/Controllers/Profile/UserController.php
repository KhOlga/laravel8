<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * The user repository instance.
	 */
	protected $users;

	/**
	 * Create a new controller instance.
	 *
	 * @param  \App\Repositories\UserRepository  $users
	 * @return void
	 */
	public function __construct(UserRepository $users) //TODO: add UserRepository
	{
		$this->users = $users;
	}

	/**
	 * Store a new user.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
//		$user = $request->user();
	}

	/**
	 * Update the given user.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  User $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user)
	{
		//
	}

	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->users->find($id);

		return view('user.profile', ['user' => $user]);
	}

	/**
	 * Show the profile for a given user.
	 *
	 * @param  User $user
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
	 */
//	public function show(Request $request)
//	{
//		return view('profile.user.show', [
//			'user' => $request->user()
//		]);
//	}
}
