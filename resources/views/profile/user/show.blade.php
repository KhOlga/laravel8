<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('User information') }}
		</h2>
	</x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="tasks-list">
					<div class="item">
						<span>Your ID</span>
						<span>First name</span>
						<span>Last name</span>
						<span>Nickname</span>
						<span>E-mail</span>
						<span>Photo</span> {{-- TODO: add <img> --}}
						<span>Your team ID</span> {{-- TODO: get team name, add table 'teams' in DB, model Team etc. --}}
						<span>Creation date</span>
						<span>Last profile's update</span>
					</div>
					<div class="item">
						<span>{{ $user->id }}</span>
						<span>{{ $user->first_name }}</span>
						<span>{{ $user->second_name }}</span>
						<span>{{ $user->nickname ?? null }}</span>
						<span>{{ $user->email }}</span>
						<span>{{ $user->profile_photo_path ?? null }}</span>
						<span>{{ $user->current_team_id ?? null }}</span>
						<span>{{ $user->created_at ?? null }}</span>
						<span>{{ $user->updated_at ?? null }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>