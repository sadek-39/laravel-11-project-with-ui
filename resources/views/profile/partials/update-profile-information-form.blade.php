<x-app-layout>
    <div class="container-fluid">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Profile Information') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </header>
        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" value="{{ auth()->user()->name }}" id="name" name="name">

                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" disabled
                       value="{{ auth()->user()->email }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                       name="password">

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class=" mb-3">
                <label for="team" class="form-label">Team</label>
                <select id="team" name="team_id" class="form-select @error('team_id') is-invalid @enderror">
                    @foreach($teams as $team)
                        <option @if(auth()->user()->team_id == old('team_id', $team->id)) selected @endif value="{{$team->id}}">{{ $team->name }}</option>
                    @endforeach
                </select>
                @error('team_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 row">
                <label class="col-2 form-check-label" for="status">Status: </label>
                <div class="col-10 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="status" name="status" value="1" {{ old('status', auth()->user()->status ?? 0) == 1 ? 'checked' : '' }}>
                </div>
            </div>

            <button class="btn btn-outline-primary" type="submit">Update</button>
        </form>
    </div>
</x-app-layout>
