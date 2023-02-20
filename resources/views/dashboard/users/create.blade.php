@extends('layouts.dashboard')
@section('content')
    <div class="col-12">
        <div class="row ">
            <div class="col-8">

                <form method="post" action="{{ route('users.store') }}">
                    @csrf

                    <div class="form-roup mt-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" aria-describedby="YourName" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" aria-describedby="emailHelp" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}"name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="country">Country</label>
                        <input type="country" class="form-control @error('country') is-invalid @enderror" id="country" value="{{ old('country') }}"name="country">
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-xl-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection

