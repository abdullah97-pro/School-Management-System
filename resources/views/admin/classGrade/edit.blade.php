@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Update ClassGroup') }}</div>

                <div class="card-body">
                    <a href=" {{ route('grades.index') }} " class="btn btn-primary mb-2">Back</a>

                    <form action=" {{ route('grades.update', $classGrade->id) }} " method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-2">
                            <div class="col-sm-2">
                                <label for="">Select Class:</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="c_category_id" class="form-select">
                                    <option value="">Select</option>
                                    @foreach ($classCategories as $classCategory)
                                        <option value="{{$classCategory->id}}">Class {{ $classCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="">Class Grade: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $classGrade->name }}" class="form-control">
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