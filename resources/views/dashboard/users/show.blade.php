
@extends('layouts.dashboard')
@section('content')
    <div class="col-12">
        <h1>Добредојде {{ $user->name }}</h1>
        <p>Вашата емеил адреса е: {{ $user->email }}</p>
        <p> Креиравте профил пред {{ $user->created_at->diffForHumans() }}</p>


        <p>Ги додавте следниве продукти:</p>

        <form method="post" action="{{ route('users.destroy', $user->id) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Избриши</button>
        </form>

    </div>
@endsection
