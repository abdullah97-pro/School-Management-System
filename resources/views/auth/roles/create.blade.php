@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Create Role') }}</div>

                    <div class="card-body">
                        <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>

                        <form action="{{ route('roles.store') }}" method="POST">
                            @csrf

                            <div class="mt-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mt-2">
                                <h3>Permissions:</h3>
                                @foreach ($permissions as $permission)
                                    <label for=""><input type="checkbox" name="permissions[{{ $permission->name }}]" value="{{ $permission->name }}">{{ $permission->name }}</label><br>
                                @endforeach
                            </div>

                            <div class="mt-2">
                                <button class="btn btn-success">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection