@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Update Category') }}</div>

                <div class="card-body">
                    <a href=" {{ route('categories.index') }} " class="btn btn-primary mb-2">Back</a>

                    <form action=" {{ route('categories.update', $classCategory->id) }} " method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="">Name: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{ $classCategory->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection