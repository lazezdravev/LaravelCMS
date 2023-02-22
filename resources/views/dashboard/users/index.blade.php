@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-4">
            <a href="{{ route('users.create') }}" class="btn btn-success ">+Креирај корисник</a>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <table class="table mt-xl-4">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Име</th>
                    <th>Емаил</th>
                    <th>Улога</th>
                    <th>Креиран на</th>
                    <th>Акција</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->id }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Измени</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

