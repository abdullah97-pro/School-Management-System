@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Update Permission') }}</div>

                    <div class="card-body">
                        <a href="{{ route('permissions.index') }}" class="btn btn-primary">Back</a>

                        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mt-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="{{ $permission->name }}" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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