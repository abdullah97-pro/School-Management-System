@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Show') }}</div>

                <div class="card-body">

                    <a href=" {{ route('grades.index') }} " class="btn btn-primary mb-2">Back</a>
                    
                    <div class="container">
                        <p><strong>Class Name</strong> <span>Class {{ $classGrade->classCategory->name }}</span></p>
                        <p><strong>Class Group: </strong> <span>{{ $classGrade->name }}</span></p>
                        <p><strong>Created: </strong> <span>{{ $classGrade->created_at }}</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection