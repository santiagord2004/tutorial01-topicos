{{-- resources/views/product/created.blade.php --}}
@extends('layouts.app')

@section('title', 'save')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Success</div>
                <div class="card-body">
                    <p class="text-success">Product created successfully!</p>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Go back to products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
