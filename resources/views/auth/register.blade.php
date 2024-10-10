<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="team" class="form-label">Team</label>
            <select id="team" name="team_id" class="form-select @error('team_id') is-invalid @enderror">
                <option selected>Open this select menu</option>
                @foreach($teams as $team)
                    <option value="{{$team->id}}">{{ $team->name }}</option>
                @endforeach
            </select>
            @error('team_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row d-flex justify-content-between align-items-center">
            <button type="submit" class="col-6 btn btn-primary">Submit</button>
            <p class="btn border-primary mb-0 col-6"><a href="{{ route('login') }}">Already Registered</a></p>
        </div>

    </form>
</x-guest-layout>
