@extends('layouts.dashboard')
@section('content')


    <div class="content pt-3 px-3 px-lg-6 d-flex flex-column-fluid">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 mb-3 mb-lg-5">
                    <div class="card">
                        <div class="table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="col-sm-12 col-md-6"></div></div><div class="row">
                                <div class="col-sm-12">
                                        <table id="datatable" class="table mt-0 table-striped table-card table-nowrap dataTable no-footer" aria-describedby="datatable_info">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="{{ route('users.create') }}"><button type="button" class="btn btn-primary active mb-2 me-2"> + Додади корисник</button></a>
                                                </div>
                                            </div>

                                            <tbody>
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
                                                                <td><a href="{{ route('users.edit', $user->id) }}"  class="material-symbols-rounded align-middle fs-5 text-body">visibility</a>
                                                                <a href="{{ route('users.show', $user->id) }}" class="material-symbols-rounded align-middle fs-5 text-body">edit</a>
                                                                <a href="{{ route('users.destroy', $user->id) }}" class="material-symbols-rounded align-middle fs-5 text-body">delete</a></td>
                                                            </tr>
                                                        @endforeach

@endsection

