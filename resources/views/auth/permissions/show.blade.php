@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Show Permission') }}</div>

                <div class="card-body">
                   
                    <a href="{{ route('permissions.index') }}" class="btn btn-success mb-3">Back</a>

                    <p><strong>Name: </strong>{{ $permission->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
