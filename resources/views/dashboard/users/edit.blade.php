@extends('layouts.dashboard')
@section('content')

    <div class="col-12">

        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('put')

            <div class="form-group mt-2">
                <label for="name">Име</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="YourName" name="name"
                       value="{{ $user->name }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="email">Емаил адреса</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email"
                       value="{{ $user->email }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="password">Лозинка</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ $user->password }}">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-xl-4">Потврди</button>


        </form>

    </div>

@endsection

