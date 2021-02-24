@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h1>{{ $data->product_title }}</h1>
            <img src="{{ url('img/'.$data->product_image) }}" alt="">
        </div>
    </div>
@endsection