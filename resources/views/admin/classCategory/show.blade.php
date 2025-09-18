@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Show') }}</div>

                <div class="card-body">

                    <a href=" {{ route('categories.index') }} " class="btn btn-primary mb-2">Back</a>
                    
                    <div class="container">
                        <p><strong>ID: </strong> <span>{{ $classCategory->id }}</span></p>
                        <p><strong>Name: </strong> <span>{{ $classCategory->name }}</span></p>
                        <p><strong>Created: </strong> <span>{{ $classCategory->created_at }}</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
