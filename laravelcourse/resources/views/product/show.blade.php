@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                    @php
                    $price = preg_replace('/[^\d.]/', '', $viewData['product']['price']);
                    $price = (float) $price; 
                    @endphp
                    <h5 class="card-title" style="{{ $price > 100 ? 'color: red;' : '' }}">
                        {{ $viewData['product']['name'] }}
                    </h5>
                    <p class="card-text">{{ $viewData["product"]["price"] }}</p>
                    @foreach($viewData["product"]->comments as $comment)
                    - {{ $comment->getDescription() }}<br />
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection