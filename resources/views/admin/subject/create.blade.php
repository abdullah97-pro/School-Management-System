@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create User') }}</div>

                <div class="card-body">
                    <a href=" {{ route('users.index') }} " class="btn btn-primary mb-2">Back</a>

                    <form action=" {{ route('users.store') }} " method="POST">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="">Name: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <div class="col-sm-2">
                                <label for="">Email: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="">Password: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-success">ADD</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection