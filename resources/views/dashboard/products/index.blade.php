@extends('layouts.dashboard')
@section('content')

    <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
        <div class="card-header">
        </div>
    <div class="table-responsive">
        <a href="{{ route('products.create') }}"  class="btn btn-primary active mb-2 me-2"> + Додади продукт</a>
    </div>

    <table class="table table-hover table-striped mb-0">
        <thead>
        <tr class="bg-body">
            <th>Id</th>
            <th>Слика</th>
            <th>Наслов</th>
            <th>Опис</th>
            <th>Категорија</th>
            <th>Слајдер</th>
            <th>Фајл</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->id }}</a></td>
                <td>{{ $product->image }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->user->name }}</td>
                <td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="col-12">
        {{ $products->links() }}
    </div>
@endsection
