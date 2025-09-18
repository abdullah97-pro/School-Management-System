@extends('layouts.app')
@section('title','Class Create')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create Classs Category') }}</div>

                <div class="card-body">
                    <a href=" {{ route('categories.index') }} " class="btn btn-primary mb-2">Back</a>

                    <form action=" {{ route('categories.store') }} " method="POST">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <label for="">Name</label>
                                <select name="name" class="form-select">
                                    <option value="" selected disabled>Select Class</option>
                                    <option value="Nursury">Nursury</option>
                                    <option value="KG1">KG1</option>
                                    <option value="KG2">KG2</option>
                                    <option value="1">Class 1</option>
                                    <option value="2">Class 2</option>
                                    <option value="3">Class 3</option>
                                    <option value="4">Class 4</option>
                                    <option value="5">Class 5</option>
                                    <option value="6">Class 6</option>
                                    <option value="7">Class 7</option>
                                    <option value="8">Class 8</option>
                                    <option value="9">Class 9</option>
                                    <option value="10">Class 10</option>
                                    <option value="11">Class 11</option>
                                    <option value="12">Class 12</option>
                                </select>
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