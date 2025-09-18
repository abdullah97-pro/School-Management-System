@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Show') }}</div>

                <div class="card-body">

                    <a href=" {{ route('users.index') }} " class="btn btn-primary mb-2">Back</a>
                    
                    <div class="container">
                        <p><strong>ID: </strong> <span>{{ $user->id }}</span></p>
                        <p><strong>Name: </strong> <span>{{ $user->name }}</span></p>
                        <p><strong>Email: </strong> <span>{{ $user->email }}</span></p>
                        <p><strong>Password: </strong> <span>{{ $user->password }}</span></p>
                        <p><strong>Created: </strong> <span>{{ $user->created_at }}</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection