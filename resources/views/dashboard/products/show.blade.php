@extends('layouts.dashboard')
@section('content')
    <div class="col-12">
        <h1>{{ $product->title }}</h1>


        <p>{{ $product->description }}</p>


        <p>This is our gallery {{ $product->image }}</p>


        @foreach($product->gallery as $gallery)

            <div class="col-4">
                <img src="/assets/img/gallery/thumbnails/{{ $gallery->image }}">
            </div>

        @endforeach
    </div>
@endsection
